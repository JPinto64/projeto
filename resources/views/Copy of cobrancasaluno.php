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
<h3>Cobranças
</h3>

<hr class="hr hr-blurry shadowed-hr"/>
<table class="table table-striped table-bordered table-hover dataTable" id="dataTable">
    <thead>
        <tr>
            <th style="text-align: center">Número</th>
            <th>Descrição</th>
            <th style="text-align: right">Montante</th>
            <th>Referência</th>
            <th style="text-align: center">Data de Cobrança</th>
            <th style="text-align: center">Data Limite</th>
            <th style="text-align: center">Modo de Pagamento</th>
            <th style="text-align: center">Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cobrancas as $cobranca)
        <tr>
            <td style="text-align: center"><a href="{{ route('cobrancas.edit', $cobranca->id) }}">{{ str_pad($cobranca->id, 9, '0', STR_PAD_LEFT) }}</a></td>
            <td>{{ $cobranca->descricao }}</td>
            <td style="text-align: right">{{ number_format($cobranca->montante, 2, ',', '.') }}</td>
            <td style="text-align: center">{{ $cobranca->referencia }}</td>
            <td style="text-align: center">{{ date('d/m/Y', strtotime($cobranca->data_cobranca)) }}</td>
            <td style="text-align: center">{{ $cobranca->data_limite ? date('d/m/Y', strtotime($cobranca->data_limite)) : '' }}</td>
            <td>{{ $cobranca->modo_pagamento }}</td>
            <td style="text-align: center">
                <span style="color: {{ $cobranca->estado === 'Pago' ? 'blue' : 'red' }}">
                    {{ $cobranca->estado }}
                </span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
