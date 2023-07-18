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
<form action="{{ route('users.store') }}"  method="POST">
    @csrf
    <fieldset>
    <legend style="text-align: center;">Detalhes</legend>

    <div class="container">
            @csrf
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="name" class="form-label">Nome:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="email" class="form-label">Email:</label>
                </div>
                <div class="col-md-8">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="password" class="form-label">Senha:</label>
                </div>
                <div class="col-md-8">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 text-right">
<<<<<<< Updated upstream
                    <label for="usergroup" class="form-label">Grupo do usuário:</label>
=======
<<<<<<< HEAD
                    <label for="usergroup" class="form-label">Grupo do Utilizador:</label>
=======
                    <label for="usergroup" class="form-label">Grupo do usuário:</label>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
                </div>
                <div class="col-md-8">
                    <select id="usergroup" name="usergroup" class="form-select" required="required">
                <option value="admin" {{ old('usergroup') === 'admin' ? 'selected' : '' }}>admin</option>
                <option value="aluno" {{ old('usergroup') === 'aluno' ? 'selected' : '' }}>aluno</option>
                <option value="tutor" {{ old('usergroup') === 'tutor' ? 'selected' : '' }}>tutor</option>
            </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
    </div>
</fieldset>


</form>
<div class="row" style="height: 250px;">&nbsp;</div>

@endsection
