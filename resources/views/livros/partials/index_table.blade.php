<table class="table table-striped">
    <thead>
        <tr>
            <th>Título</th>
            <th>Responsabilidade</th>
            <th>Localização</th>
            <th>Exemplares</th>
            <th>Assuntos</th>
            <th>Notas</th>
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
                                {{ $instance->tombo }} - {{ $instance->tombo_tipo }}
                            </a> ({{ $instance->status }})
                           
                        </li>
                    @empty
                        <li>Não há exemplares cadastrados</li>
                    @endforelse
                </ul>
            </td>

            <td>
                <ul>
                @forelse($livro->assuntos as $assunto)
                    <li>{{ $assunto->titulo }}</li>
                @empty
                    <li>Não há assuntos cadastrados</li>
                @endforelse
                </ul>
            </td>

            <td>{{ $livro->obs }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
