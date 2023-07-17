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
<h3><i class="fa-solid fa-trophy"></i> Competições
<a href="{{ route('competicoes.create') }}"
class="btn btn-primary float-right">
    Nova
</a>

</h3>

<hr class="hr hr-blurry shadowed-hr"/>
<table class="table table-striped table-bordered table-hover dataTable" id="dataTable">
    <thead>
            <tr>
                <th class="text-center">Número</th>
                <th class="text-center">Data</th>
                <th>Nome</th>
                <th>Local</th>
                <th class="text-center">Escalões</th>
                <th class="text-center">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($competicoes as $competicao)
                <tr style="color: {{ $competicao->estado !== 'Ativa' ? 'rgb(255,0,0)' : 'inherit' }}">
                    <td class="text-center">
                    <a href="{{ route('competicoes.edit', $competicao->id) }}">{{ str_pad($competicao->id, 9, '0', STR_PAD_LEFT) }}</a>
                    </td>
                    <td class="text-center">{{ date('d/m/Y', strtotime($competicao->data)) }}</td>
                    <td>{{ $competicao->nome }}</td>
                    <td>{{ $competicao->local }}</td>
                    <td class="text-center">{{ $competicao->escaloes }}</td>
                    <td class="text-center">{{ $competicao->estado }}</td>
                </tr>
            @endforeach
        </tbody>
</table>
@endsection
