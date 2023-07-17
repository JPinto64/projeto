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
<h3><i class="fa-solid fa-trophy"></i> Minhas Competições
<a href="{{ route('competicoesalunos.create') }}"
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
            @foreach ($competicoesAlunos as $competicaoAluno)
                <tr>
                    <td class="text-center">
                    <a href="{{ route('competicoesalunos.edit', $competicaoAluno->competicoes_id) }}">{{ str_pad($competicaoAluno->competicoes_id, 9, '0', STR_PAD_LEFT) }}</a>
                    </td>
                    <td class="text-center">{{ date('d/m/Y', strtotime($competicaoAluno->competicoes_data)) }}</td>
                    <td>{{ $competicaoAluno->competicoes_nome }}</td>
                    <td>{{ $competicaoAluno->competicoes_local }}</td>
                    <td class="text-center">{{ $competicaoAluno->competicoes_escaloes }}</td>
                    <td class="text-center">{{ $competicaoAluno->competicoes_estado }}</td>
                </tr>
            @endforeach
        </tbody>
</table>
@endsection
