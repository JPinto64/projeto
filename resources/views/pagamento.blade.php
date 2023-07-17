@extends('layouts.app')

@section('menu')
    @parent
@endsection



@section('conteudo')

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        th,
        td {
            padding: 0.5rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5f7fa;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f9fafb;
        }

        .pago {
            color: green;
        }

        .nao-pago {
            color: red;
        }
        .popup {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
    @if (isset($pagamentos) && $pagamentos->isEmpty())
        <p>Não há pagamentos registrados.</p>
        @else
        <table>
            <tr>
                <th>Data Limite</th>
                <th>Valor</th>
                <th>Data de Pagamento</th>
                <th>Estado de Pagamento</th>
                <th>Ano Propina</th>
                <th>Açoes </th>
            </tr>

            @foreach ($pagamentos as $pagamento)
            <tr data-pagamento-id="{{ $pagamento->id }}" data-estado-pagamento="{{ $pagamento->estado_pagamento }}" class="pagamento-row">
                <td>{{ $pagamento->data_limite }}</td>
                <td>{{ $pagamento->valor }}€</td>
                <td>{{ $pagamento->data_pagamento }}</td>
                <td>{{ $pagamento->estado_pagamento }}</td>
                <td>{{ $pagamento->ano_propina }}</td>
                <td><button type="submit" class="btn-pagar" data-referencia="{{str_pad($pagamento->id, 9, '0', STR_PAD_LEFT)}}">Pagar</button></td>
            </tr>
        @endforeach
        </table>
        <div id="id-popup" class="popup">
            <div class="popup-content">
                <form method="POST" action="{{ route('efetuar-pagamento') }}">
                    <input type="hidden" name="userID" id="id-userid" value=""/>
                    <h3>Confirmar Pagamento</h3>
                    <p>Entidade: <span id="entidade">12345</span></p>
                    <p>Referência: <span id="referencia"></span></p>
                    <button type="submit" id="confirmar-pagamento">Pagar</button>
                    <button id="cancelar-pagamento" class="cancelar">Cancelar</button>
                </form>
            </div>
        </div>
    @endif

@endsection
