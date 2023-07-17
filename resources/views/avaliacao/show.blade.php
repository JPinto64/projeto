@extends('layouts.app')

@section('conteudo')
    <h2>Avaliação</h2>

    <div>
        <p>ID Usuário: {{ $avaliacao->id_users }}</p>
        <p>Data: {{ $avaliacao->data }}</p>
        <p>Avaliação Técnica: {{ $avaliacao->tecnica }}</p>
        <p>Avaliação Física: {{ $avaliacao->fisica }}</p>
        <p>Avaliação Desempenho: {{ $avaliacao->desempenho }}</p>
        <p>Observações: {{ $avaliacao->observacoes }}</p>
    </div>

    <a href="{{ route('avaliacao.edit', $avaliacao->id) }}">Editar</a>
@endsection
