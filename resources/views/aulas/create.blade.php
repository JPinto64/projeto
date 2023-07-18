@extends('layouts.app')

@section('menu')
    @parent
@endsection
@section('conteudo')

<<<<<<< Updated upstream
<h3 >Novo Usuário
=======
<<<<<<< HEAD
<h3 >Novo Utilizador
=======
<h3 >Novo Usuário
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
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

<form action="{{ route('aulas.store') }}" method="POST">
    @csrf
    <fieldset>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    <legend>Detalhes</legend>
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="data" class="form-label">Data:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
=======
<<<<<<< HEAD
        <div class="col-md-6">
=======
        <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <input type="date" id="data" name="data" class="form-control" placeholder="Data" value="{{ old('data') }}">
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="hora_inicio" class="form-label">Hora Início:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
=======
<<<<<<< HEAD
        <div class="col-md-6">
=======
        <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" placeholder="Hora Início" value="{{ old('hora_inicio') }}">
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="hora_termino" class="form-label">Hora Término:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
=======
<<<<<<< HEAD
        <div class="col-md-6">
=======
        <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <input type="time" id="hora_termino" name="hora_termino" class="form-control" placeholder="Hora Término" value="{{ old('hora_termino') }}">
        </div>
    </div>
    
    <div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="piscina" class="form-label">Local:</label>
    </div>
<<<<<<< Updated upstream
    <div class="col-md-8">
=======
<<<<<<< HEAD
    <div class="col-md-6">
=======
    <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        <select id="local" name="local" class="form-select form-control">
            <option value="Piscina 1">Piscina 1</option>
            <option value="Piscina 2">Piscina 2</option>
            <option value="Piscina 3">Piscina 3</option>
            <option value="Piscina 4">Piscina 4</option>
            <option value="Piscina 5">Piscina 5</option>
        </select>
    </div>
</div>

    
    <div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="escalao" class="form-label">Escalão:</label>
    </div>
<<<<<<< Updated upstream
    <div class="col-md-8">
=======
<<<<<<< HEAD
    <div class="col-md-6">
=======
    <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        <select id="escalao" name="escalao" class="form-select form-control">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
    </div>
</div>

    
    <div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="estado" class="form-label">Estado:</label>
    </div>
<<<<<<< Updated upstream
    <div class="col-md-8">
=======
<<<<<<< HEAD
    <div class="col-md-6">
=======
    <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        <select id="estado" name="estado" class="form-control">
            <option value="Alterada" {{ old('estado') === 'Alterada' ? 'selected' : '' }}>Alterada</option>
            <option value="Cancelada" {{ old('estado') === 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
            <option value="Confirmada" {{ old('estado') === 'Confirmada' ? 'selected' : '' }}>Confirmada</option>
            <option value="Em atraso" {{ old('estado') === 'Em atraso' ? 'selected' : '' }}>Em atraso</option>
            <option value="Pendente" {{ old('estado') === 'Pendente' ? 'selected' : '' }}>Pendente</option>
        </select>
    </div>
</div>

    
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="observacoes" class="form-label">Observações:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
=======
<<<<<<< HEAD
        <div class="col-md-6">
=======
        <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <textarea id="observacoes" name="observacoes" class="form-control" placeholder="Observações">{{ old('observacoes') }}</textarea>
        </div>
    </div>
    
   <div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="tutor_id" class="form-label">Tutor:</label>
    </div>
<<<<<<< Updated upstream
    <div class="col-md-8">
=======
<<<<<<< HEAD
    <div class="col-md-6">
=======
    <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        <select id="tutor_id" name="tutor_id" class="form-control">
            @foreach($tutores as $tutor)
                <option value="{{ $tutor->id }}" {{ old('tutor_id') === $tutor->id ? 'selected' : '' }}>{{ $tutor->nome }}</option>
            @endforeach
        </select>
    </div>
</div>

    
    <div class="row form-group">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Create Aula</button>
        </div>
    </div>
    </fieldset>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>

@endsection
