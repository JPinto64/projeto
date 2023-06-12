@extends('home')

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
    <h2>Dados Pessoais</h2>
    <form action="{{ route('dadospessoa') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="birthdate">Data de nascimento:</label>
        <input type="date" name="birthdate" id="birthdate" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="morada">Morada:</label>
        <input type="text" name="morada" id="morada" required><br>

        <label for="cod_postal">Código Postal:</label>
        <input type="text" name="cod_postal" id="cod_postal" required><br>

        <button type="submit">Guardar</button>

    </form>
@endsection
