<table class="table table-striped">
    <thead>
        <tr>
            <th>Título</th>
            <th>Responsabilidade</th>
            <th>Localização</th>
            <th>Exemplares</th>
            <th>Notas</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($livros as $livro)
        <tr>

            <td><a href="/livros/{{$livro->id}}">{{ $livro->titulo }}</a></td>

            <td>
                <ul>
                @forelse($livro->responsabilidades as $responsabilidade)
                    <li>{{ $responsabilidade->nome }} ({{ $responsabilidade->pivot->tipo }})</li>
                @empty
                    <li>Não há Responsabilidade cadastrada</li>
                @endforelse
                </ul>
            </td>

            <td><a href="/livros/{{$livro->id}}">{{ $livro->localizacao_formatada }}</a></td>

            <td>
                <ul>
                    @forelse($livro->instances as $instance)
                        <li><a href="/instances/{{ $instance->id }}">
                                {{ $instance->tombo }} ({{ $instance->tombo_tipo }})
                            </a>
                        </li>
                    @empty
                        <li>Não há exemplares cadastrados</li>
                    @endforelse
                </ul>
            </td>

            <td>{{ $livro->obs }}</td>

            <td>
                
                <a href="/livros/{{$livro->id}}/edit" ><i class="fas fa-pencil-alt"></i></a> 

                <form method="POST" action="/livros/{{ $livro->id }}" style="display:inline">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="delete-item btn" onclick="return confirm('Você tem certeza que deseja apagar?')"><i class="fas fa-trash-alt"></i></button>
                </form>
                <br>
                <a href="/instances/create/?livro_id={{$livro->id}}"> <i class="fas fa-plus"></i> Adicionar Exemplar </a>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
