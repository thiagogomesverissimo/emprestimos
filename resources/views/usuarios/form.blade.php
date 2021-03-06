@include('usuarios.partials.foto')

<div class="row">
    <div class="col-sm">

        <div class="form-group">
            <label for="matricula"><b>Código da Matrícula</b></label>
            <input type="text" class="form-control" name="matricula" placeholder="" value="{{ old('matricula', $usuario->matricula) }}">   
        </div>

        <div class="form-group">
            <label for="nome"><b>Nome</b></label>
            <input type="text" class="form-control" name="nome" placeholder="" value="{{ old('nome', $usuario->nome) }}">   
        </div>

        <div class="form-group">
            <label for="telefone"><b>Telefone</b></label>
            <input type="text" class="form-control" name="telefone" placeholder="" value="{{ old('telefone', $usuario->telefone) }}">   
        </div>

        <div class="form-group">
            <label for="turma"><b>Turma</b></label>
            <input type="text" class="form-control" name="turma" placeholder="" value="{{ old('turma', $usuario->turma) }}">   
        </div>

        <div class="form-group">
            <label for="turma"><b>Setor</b></label>
            <input type="text" class="form-control" name="setor" placeholder="" value="{{ old('setor', $usuario->setor) }}">   
        </div>

        <div class="form-group">
            <label for="obs">Observações sobre este usuário</label>
            <textarea class="form-control" name="obs" rows="3">{{ old('obs', $usuario->obs) }}</textarea>
        </div>

    </div>
    <div class="col-sm">
        <input id="foto" type="hidden" name="foto">
            <div class="contentarea">
                <div class="camera">
                    <video id="video">Video stream not available.</video>
                </div>
                <div><button id="startbutton">Tirar Foto</button></div>
                
                <canvas id="canvas"></canvas>
                <div class="output">
                    <img id="photo" alt="The screen capture will appear in this box."> 
                    @if($usuario->tem_foto())
                        <img id="foto_antiga" src="/foto/{{ $usuario->matricula }}"> 
                    @endif
                </div> 
            </div>
    </div>
</div>

<div class="row">
    <div class="form-group">
        <button type="submit" class="btn btn-success">Salvar</button> 
    </div> 
</div>


