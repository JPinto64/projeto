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
<h3>Alunos
<a href="{{ route('alunos.create') }}"
class="btn btn-primary float-right">
    Novo
</a>

</h3>

<hr class="hr hr-blurry shadowed-hr"/>
<table class="table table-striped table-bordered table-hover dataTable" id="dataTable">
    <thead>
        <tr>
            <th style="text-align: center;">Numero</th>
            <th>Nome</th>
            <th style="text-align: center;">NIF</th>
            <th>Email</th>
            <th style="text-align: center;">Telemóvel</th>
            <th style="text-align: center;">Escalão</th>
            <th style="text-align: center;">Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alunos as $aluno)
            <tr>
                <td style="text-align: center;">{{ $aluno->numero }}</td>
                <td><a href="{{ route('alunos.edit', $aluno->id) }}">{{ $aluno->nome }}</a></td>
                <td style="text-align: center;">{{ $aluno->nif }}</td>
                <td>{{ $aluno->email }}</td>
                <td style="text-align: center;">{{ $aluno->telemovel }}</td>
                <td style="text-align: center;">{{ $aluno->escalao }}</td>
                <td style="text-align: center;">{{ $aluno->estado }}</td>
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
