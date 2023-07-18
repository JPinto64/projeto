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
<form id="delete-form" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
<form action="{{ route('users.update', $user) }}"  method="POST" enctype="multipart/form-data">
<h3 >Usuario::{{$user->name}}
<div class="float-right">
<button type="submit" class="btn btn-primary" >Atualizar</button>
&nbsp; 
<a href="{{ route('users.destroy', $user->id) }}"
class="btn btn-danger"
   onclick="event.preventDefault();
<<<<<<< Updated upstream
            if (confirm('Deseja  remover o usuário {{$user->name}}?')) {
=======
<<<<<<< HEAD
            if (confirm('Deseja  remover o Utilizador {{$user->name}}?')) {
=======
            if (confirm('Deseja  remover o usuário {{$user->name}}?')) {
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
                document.getElementById('delete-form').submit();
            }">
    Remover
</a>
</div>
</h3>
<hr class="hr hr-blurry" />

    @csrf
    @method('PUT')
    <fieldset>
<legend style="text-align: center;">Detalhes</legend>
    <div class="container">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="name" class="form-label">Nome:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nome" value="{{ old('name', $user->name) }}" required readonly="readonly">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="email" class="form-label">Email:</label>
                </div>
                <div class="col-md-8">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $user->email) }}" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="password" class="form-label">Senha:</label>
                </div>
                <div class="col-md-8">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="usergroup" class="form-label">Grupo:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="usergroup" name="usergroup" class="form-control" placeholder="Grupo" value="{{ old('usergroup', $user->usergroup) }}" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </form>
    </div>

</fieldset>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>
@endsection
