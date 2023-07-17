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
<h3>Utilizadores
<a href="{{ route('users.create') }}"
class="btn btn-primary float-right">
    Novo
</a>

</h3>

<hr class="hr hr-blurry shadowed-hr"/>
<table class="table table-striped table-bordered table-hover dataTable" id="dataTable">
    <thead>
        <tr>
            <th >Nome</th>
            <th>Email</th>
            <th style="text-align: center;">Grupo</th>
            <th style="text-align: center;">Data de criação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                <td style="text-align: center;">{{ $user->email }}</td>
                <td style="text-align: center;">{{ $user->usergroup }}</td>
                <td style="text-align: center;">{{ date('d/m/Y', strtotime($user->created_at)) }}
</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
