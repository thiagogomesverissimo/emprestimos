<div class="form-group">

    <div class="form-row">
        <div class="form-group col-md font-weight-bold">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" value="{{ old('titulo', $livro->titulo) }}">
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-md font-weight-bold">
            <label for="editora">Editora</label>
            <input type="text" class="form-control" name="editora" value="{{ old('editora', $livro->editora) }}">
        </div>

        <div class="form-group col-md font-weight-bold">
            <label for="local">Local</label>
            <input type="text" class="form-control" name="local" value="{{ old('local', $livro->local) }}">
        </div>

        <div class="form-group col-lg-1 font-weight-bold">
            <label for="ano">Ano</label>
            <input type="text" class="form-control" name="ano" value="{{ old('ano', $livro->ano) }}">
        </div>

        <div class="form-group col-lg-1 font-weight-bold">
            <label for="edicao">Edição</label>
            <input type="text" class="form-control" name="edicao" value="{{ old('edicao', $livro->edicao) }}">
        </div>


        <div class="form-group col-lg-1 font-weight-bold">
            <label for="volume">Volume</label>
            <input type="text" class="form-control" name="volume" value="{{ old('volume', $livro->volume) }}">
        </div>

        <div class="form-group col-lg-4 font-weight-bold">
            <label for="localizacao">Localização</label>
            <input type="text" class="form-control" name="localizacao" value="{{ old('localizacao', $livro->localizacao) }}">
        </div>



    </div>


    <div class="form-row">
        <div class="form-group col-lg-4 font-weight-bold">
            <label for="localizacao">Complemento da Localização</label>
            <input type="text" class="form-control" name="complemento_localizacao" value="{{ old('complemento_localizacao', $livro->complemento_localizacao) }}">
        </div>

        <div class="form-group col-lg-1 font-weight-bold">
            <label for="dimensao">Dimensão</label>
            <input type="text" class="form-control" name="dimensao" value="{{ old('dimensao', $livro->dimensao) }}">
        </div>

        <div class="form-group col-lg-1 font-weight-bold">
            <label for="extensao">Extensão</label>
            <input type="text" class="form-control" name="extensao" value="{{ old('extensao', $livro->extensao) }}">
        </div>


        <div class="form-group col-lg-1 font-weight-bold">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" name="isbn" value="{{ old('isbn', $livro->isbn) }}">
        </div>

    </div>

    <div class="form-row">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="sim" name="colorido"

            @if($livro->colorido == 'sim')
            checked
            @endif
            >
            
            <label class="form-check-label" for="colorido">
                Colorido?
            </label>
        </div>

    </div>

    <div class="form-row">
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="sim" name="ilustrado"
            
            @if($livro->ilustrado == 'sim')
            checked
            @endif
            >
            <label class="form-check-label" for="colorido">
                Ilustrado?
            </label>
        </div>

    </div>

    <div class="form-group">
        <label for="obs">Notas</label>
        <textarea class="form-control" name="obs" rows="3">{{ old('obs', $livro->obs) }}</textarea>
    </div>

    <div class="row">
        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button> 
        </div> 
    </div>

</div>
