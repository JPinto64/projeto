@extends('layouts.app')

@section('conteudo')
    <h2>Avaliação</h2>

    <div>
<<<<<<< Updated upstream
        <p>ID Usuário: {{ $avaliacao->id_users }}</p>
=======
<<<<<<< HEAD
        <p>ID Utilizador: {{ $avaliacao->id_users }}</p>
=======
        <p>ID Usuário: {{ $avaliacao->id_users }}</p>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        <p>Data: {{ $avaliacao->data }}</p>
        <p>Avaliação Técnica: {{ $avaliacao->tecnica }}</p>
        <p>Avaliação Física: {{ $avaliacao->fisica }}</p>
        <p>Avaliação Desempenho: {{ $avaliacao->desempenho }}</p>
        <p>Observações: {{ $avaliacao->observacoes }}</p>
    </div>

    <a href="{{ route('avaliacao.edit', $avaliacao->id) }}">Editar</a>
@endsection
