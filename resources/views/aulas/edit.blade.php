@extends('layouts.app')

@section('menu')
    @parent
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form id="delete-form" action="{{ route('aulas.destroy', $aula->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
<form action="{{ route('aulas.update', $aula) }}"  method="POST" enctype="multipart/form-data">
<h3 >Aula::{{ str_pad($aula->id, 9, '0', STR_PAD_LEFT) }}
<div class="float-right">
<button type="submit" class="btn btn-primary" >Atualizar</button>
&nbsp; 
<a href="{{ route('aulas.destroy', $aula->id) }}"
class="btn btn-danger"
   onclick="event.preventDefault();
<<<<<<< Updated upstream
            if (confirm('Deseja  remover o usuário {{$aula->name}}?')) {
=======
<<<<<<< HEAD
            if (confirm('Deseja  remover o Utilizador {{$aula->name}}?')) {
=======
            if (confirm('Deseja  remover o usuário {{$aula->name}}?')) {
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
                document.getElementById('delete-form').submit();
            }">
    Remover
</a>
</div>
</h3>
<hr class="hr hr-blurry" />
    <div class="container" >
    <fieldset>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    <legend>Detalhes</legend>
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            @csrf
            @method('PUT')

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
                    <input type="date" id="data" name="data" class="form-control" value="{{ $aula->data }}">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="hora_inicio" class="form-label">Hora de Início:</label>
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
                    <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" value="{{ $aula->hora_inicio }}">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="hora_termino" class="form-label">Hora de Término:</label>
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
                    <input type="time" id="hora_termino" name="hora_termino" class="form-control" value="{{ $aula->hora_termino }}">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="local" class="form-label">Local:</label>
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
                    <select id="local" name="local" class="form-select">
                        <option value="Piscina 1" {{ $aula->local === 'Piscina 1' ? 'selected' : '' }}>Piscina 1</option>
                        <option value="Piscina 2" {{ $aula->local === 'Piscina 2' ? 'selected' : '' }}>Piscina 2</option>
                        <option value="Piscina 3" {{ $aula->local === 'Piscina 3' ? 'selected' : '' }}>Piscina 3</option>
                        <option value="Piscina 4" {{ $aula->local === 'Piscina 4' ? 'selected' : '' }}>Piscina 4</option>
                        <option value="Piscina 5" {{ $aula->local === 'Piscina 5' ? 'selected' : '' }}>Piscina 5</option>
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
                    <select id="escalao" name="escalao" class="form-select">
                        <option value="A" {{ $aula->escalao === 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ $aula->escalao === 'B' ? 'selected' : '' }}>B</option>
                        <option value="C" {{ $aula->escalao === 'C' ? 'selected' : '' }}>C</option>
                        <option value="D" {{ $aula->escalao === 'D' ? 'selected' : '' }}>D</option>
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
                    <select id="estado" name="estado" class="form-select">
                        <option value="Confirmada" {{ $aula->estado === 'Confirmada' ? 'selected' : '' }}>Confirmada</option>
                        <option value="Cancelada" {{ $aula->estado === 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
                        <option value="Alterada" {{ $aula->estado === 'Alterada' ? 'selected' : '' }}>Alterada</option>
                        <option value="Em atraso" {{ $aula->estado === 'Em atraso' ? 'selected' : '' }}>Em atraso</option>
                        <option value="Pendente" {{ $aula->estado === 'Pendente' ? 'selected' : '' }}>Pendente</option>
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
                    <textarea id="observacoes" name="observacoes" class="form-control">{{ $aula->observacoes }}</textarea>
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
                    <select id="tutor_id" name="tutor_id" class="form-select">
                        @foreach ($tutores as $tutor)
                            <option value="{{ $tutor->id }}" {{ $tutor->id === $aula->tutor_id ? 'selected' : '' }}>{{ $tutor->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
            </fieldset>
            </div>
        </form>

<div class="row" style="height: 250px;">&nbsp;</div>
@endsection
