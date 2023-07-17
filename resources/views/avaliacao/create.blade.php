@extends('layouts.app')

@section('conteudo')
    <h2>Adicionar Avaliação</h2>

    <form action="{{ route('avaliacao.store') }}" method="POST">
        @csrf
        <div>
            <label for="id_users">ID Usuário:</label>
            <input type="text" name="id_users" id="id_users">
        </div>
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data">
        </div>
        <div>
            <label for="tecnica">Avaliação Técnica:</label>
            <input type="text" name="tecnica" id="tecnica">
        </div>
        <div>
            <label for="fisica">Avaliação Física:</label>
            <input type="text" name="fisica" id="fisica">
        </div>
        <div>
            <label for="desempenho">Avaliação Desempenho:</label>
            <input type="text" name="desempenho" id="desempenho">
        </div>
        <div>
            <label for="observacoes">Observações:</label>
            <textarea name="observacoes" id="observacoes"></textarea>
        </div>
        <button type="submit">Adicionar</button>
    </form>
@endsection
