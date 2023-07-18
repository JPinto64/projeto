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
<h3>Aulas
<a href="{{ route('aulas.create') }}"
class="btn btn-primary float-right">
    Nova
</a>

</h3>

<hr class="hr hr-blurry shadowed-hr"/>
<table class="table table-striped table-bordered table-hover dataTable" id="dataTable">
    <thead>
        <tr>
<<<<<<< Updated upstream
            <th style="text-align: center;">ID</th>
=======
<<<<<<< HEAD
            <th style="text-align: center;">Número</th>
=======
            <th style="text-align: center;">ID</th>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <th style="text-align: center;">Data</th>
            <th style="text-align: center;">Horário</th>
            <th>Local</th>
            <th style="text-align: center;">Escalão</th>
            <th style="text-align: center;">Estado</th>
            <th>Tutor</th>
<<<<<<< Updated upstream
            <th style="text-align: center;">Ações</th>
=======
<<<<<<< HEAD
=======
            <th style="text-align: center;">Ações</th>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </tr>
    </thead>
    <tbody>
        @foreach ($aulas as $aula)
            <tr>
                <td style="text-align: center;"><a href="{{ route('aulas.edit', $aula->id) }}">{{ str_pad($aula->id, 9, '0', STR_PAD_LEFT) }}</a></td>
                <td style="text-align: center;">{{ date('d/m/Y', strtotime($aula->data)) }}</td>
                <td style="text-align: center;">{{ $aula->hora_inicio }} - {{ $aula->hora_termino }}</td>
                <td>{{ $aula->local }}</td>
                <td style="text-align: center;">{{ $aula->escalao }}</td>
                <td style="text-align: center;">{{ $aula->estado }}</td>
                <td>{{ $aula->tutor->name }}</td>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
                <td style="text-align: center;">
                    <a href="{{ route('aulas.edit', $aula->id) }}">Editar</a>
                    <form action="{{ route('aulas.destroy', $aula->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </td>
<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            </tr>
        @endforeach
    </tbody>
</table>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD

=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
@endsection
