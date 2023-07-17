@extends('layouts.app')

@section('menu')
    @parent
@endsection

@section('conteudo')
    <style>
        .avaliacao-form {
            border-collapse: collapse;
            width: 100%;
        }

        .avaliacao-form td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .avaliacao-form label {
            font-weight: bold;
        }

        .input-number {
            /* Estilos desejados para os campos de número */
            /* Exemplo de estilos: */
            border: 1px solid #ccc;
            padding: 0.5rem;
            border-radius: 0.25rem;
        }

        .avaliacao-form input[type="text"],
        .avaliacao-form textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .avaliacao-form button[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .avaliacao-form button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <form action="{{ route('avaliacao.store') }}" method="POST">
        @csrf
        <h2>Adicionar Avaliação</h2>
        <table class="avaliacao-form">
            <tr>
                <td><label for="tecnica">Avaliação Técnica</label></td>
                <td><input type="number" name="tecnica" id="tecnica" class="input-number"></td>
            </tr>
            <tr>
                <td><label for="fisica">Avaliação Física</label></td>
                <td><input type="number" name="fisica" id="fisica" class="input-number"></td>
            </tr>
            <tr>
                <td><label for="desempenho">Avaliação de Desempenho</label></td>
                <td><input type="number" name="desempenho" id="desempenho" class="input-number"></td>
            </tr>
            <tr>
                <td><label for="observacoes">Observações</label></td>
                <td><textarea name="observacoes" id="observacoes"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Adicionar Avaliação</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
