@extends('layouts.app')

@section('menu')
    @parent
@endsection

@push('scripts')
<script src="{{ asset('js/competicao.js') }}"></script>
@endpush

@section('conteudo')
    <h2>Competições</h2>
    <style>
        .competicoes-list {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
        }

        .competicao-card {
            background-color: #f5f7fa;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .competicao-titulo {
            font-size: 1.5em;
        }

        .participar-button {
        background-color: #4caf50;
        color: #ffffff;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        outline: none;
        width: 100%;
        }

        .participar-button.disabled {
        background-color: #ff0000;
        cursor: not-allowed;
        }

        .participar-button:hover {
            background-color: #45a049;
        }
    </style>
    <div class="competicoes-list">
        @foreach ($competicoes as $competicao)
        <div class="competicao-card">
            <h3 class="competicao-titulo">{{ $competicao->nome_competicao }}</h3>
            <p>Data: {{ $competicao->data }}</p>
            <p>Descrição: {{ $competicao->descricao }}</p>
            <p>Participantes: {{ $competicao->participacoes_count }}</p>
            <p>Vagas disponíveis: {{ $competicao->n_participantes - $competicao->participacoes_count }}</p>
            @if ($competicao->participacoes_count < $competicao->n_participantes)
                <button class="participar-button" data-competicao-id="{{ $competicao->id }}">Participar</button>
            @else
                <p>Todas as vagas foram preenchidas.</p>
            @endif
        </div>
        @endforeach
    </div>
@endsection
