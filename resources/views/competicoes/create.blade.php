@extends('layouts.app')

@section('menu')
    @parent
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('conteudo')

    <form action="{{ route('competicoes.store') }}" method="POST">
<h3 >Nova Competição
<button type="submit" class="btn btn-primary float-right" >Guardar Competição</button>
</h3>

<hr class="hr hr-blurry" />


<div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

    @csrf
    <fieldset>
    <legend style="text-align: center;">Detalhes</legend>

	<div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="nome" class="form-label">Nome:</label>
            </div>
            <div class="col-md-6">
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" required>
            </div>
        </div>
        
       <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="data" class="form-label">Data:</label>
            </div>
            <div class="col-md-6">
                <input type="date" id="data" name="data" class="form-control" value="{{ old('data') }}" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="hora_inicio" class="form-label">Hora de Início:</label>
            </div>
            <div class="col-md-6">
                <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" value="{{ old('hora_inicio') }}" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="hora_termino" class="form-label">Hora de Término:</label>
            </div>
            <div class="col-md-6">
                <input type="time" id="hora_termino" name="hora_termino" class="form-control" value="{{ old('hora_termino') }}" required>
            </div>
        </div>

	<div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="local" class="form-label">Local:</label>
            </div>
            <div class="col-md-6">
                <input type="text" id="local" name="local" class="form-control" value="{{ old('local') }}" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="descricao" class="form-label">Descrição:</label>
            </div>
            <div class="col-md-6">
                <input type="text" id="descricao" name="descricao" class="form-control" value="{{ old('descricao') }}" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="numero_maximo_participantes" class="form-label">Número Máximo de Participantes:</label>
            </div>
            <div class="col-md-6">
                <input type="number" min="2" max="500" maxlength="3"  id="numero_maximo_participantes" name="numero_maximo_participantes" class="form-control" value="{{ old('numero_maximo_participantes') }}" required/>
            </div>
        </div>

      <div class="row form-group">
            <div class="col-md-4 text-right">
                <label class="form-label">Escalões:</label>
            </div>
            <div class="col-md-8">
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="escalaoA" name="escaloes[]" value="A" class="form-check-input"{{ in_array('A', old('escaloes', [])) ? ' checked' : '' }}>
                    <label for="escalaoA" class="form-check-label">A</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="escalaoB" name="escaloes[]" value="B" class="form-check-input"{{ in_array('B', old('escaloes', [])) ? ' checked' : '' }}>
                    <label for="escalaoB" class="form-check-label">B</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="escalaoC" name="escaloes[]" value="C" class="form-check-input"{{ in_array('C', old('escaloes', [])) ? ' checked' : '' }}>
                    <label for="escalaoC" class="form-check-label">C</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="escalaoD" name="escaloes[]" value="D" class="form-check-input"{{ in_array('D', old('escaloes', [])) ? ' checked' : '' }}>
                    <label for="escalaoD" class="form-check-label">D</label>
                </div>
            </div>
        </div>


        <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="premiacao" class="form-label">Premiação:</label>
            </div>
            <div class="col-md-6">
                <textarea id="premiacao" name="premiacao" class="form-control" rows="5">{{ old('premiacao') }}</textarea>
            </div>
        </div>


<fieldset style="text-align: center;" class="form-group">
    <legend style="text-align: center;">Poster</legend>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="foto">Poster:</label>
        </div>
        <div class="col-md-8">
            <input type="file" id="imagem" name="imagem" accept="image/*">
        </div>
    </div>
</fieldset>

        <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="observacoes" class="form-label">Observações:</label>
            </div>
            <div class="col-md-6">
                <textarea id="observacoes" name="observacoes" class="form-control" rows="5">{{ old('observacoes') }}</textarea>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-4 text-right">
                <label for="estado" class="form-label">Estado:</label>
            </div>
            <div class="col-md-6">
                <select id="estado" name="estado" class="form-control" required>
                    <option value="Adiada"{{ old('estado') === 'Adiada' ? ' selected' : '' }}>Adiada</option>
                    <option value="Ativa"{{ old('estado') === 'Ativa' ? ' selected' : '' }}>Ativa</option>
                    <option value="Cancelada"{{ old('estado') === 'Cancelada' ? ' selected' : '' }}>Cancelada</option>
                    <option value="Pendente"{{ old('estado') === 'Pendente' ? ' selected' : '' }}>Pendente</option>
                </select>
            </div>
        </div>

	<div class="row form-group">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar Competição</button>
            </div>
        </div>
</fieldset>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>
@endsection
