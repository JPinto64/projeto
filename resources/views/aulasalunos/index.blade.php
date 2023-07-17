@extends('layouts.app')

@section('menu')
    @parent
@endsection

@section('conteudo')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h3><i class="fa-solid fa-person-swimming"></i> Minhas Aulas</h3>

<hr class="hr hr-blurry shadowed-hr"/>
<table class="table table-striped table-bordered table-hover dataTable" id="dataTable">
     <thead>
        <tr>
            <th class="text-center">Número</th>
            <th class="text-center">Data</th>
            <th  class="text-center">Horário</th>
            <th>Local</th>
            <th class="text-center">Escalão</th>
            <th>Tutor</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Agendada</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($aulasAlunos as $aula)
        <tr>
            <td class="text-center">{{ str_pad($aula->aulas_id, 9, '0', STR_PAD_LEFT) }}

              @if(!empty($aula->aulas_observacoes))
                    <span class="text-info" title="Observações: {{ $aula->aulas_observacoes }}"><i class="fa-solid fa-circle-info"></i></span>
                @endif
            </td>
            <td class="text-center">{{ date('d/m/Y', strtotime($aula->aulas_data)) }}</td>
            <td class="text-center">{{ $aula->aulas_hora_inicio }} - {{ $aula->aulas_hora_termino }}</td>
            <td>{{ $aula->aulas_local}}</td>
            <td class="text-center">{{ $aula->aulas_escalao }}</td>
            <td>{{ $aula->tutores_nome }}
            <br/>

            @if(!empty($aula->tutores_linguasfaladas))
            	<span class="text-info small">
            		<label class="label">Línguas faladas: </label>{{$aula->tutores_linguasfaladas}}
            	</span>
            @endif

              @if(!empty($aula->tutores_bio))
              		<br/>
                    <span class="text-info small" title="{{ $aula->tutores_bio }}">
                    	<label class="label" style="text-decoration: underline; cursor: pointer;">Bio</label>
                    </span>
                @endif

              @if(!empty($aula->tutores_classificacao > 0))
                <br/>
                <span class="small" style="color: orange;">
                 @for ($i = 1; $i <= $aula->tutores_classificacao; $i++)
    				&#9733;
				@endfor
                </span>
                @endif
            </td>
            <td class="text-center">{{ $aula->aulas_estado }}</td>
            <td class="text-center">
                @if ($aula->agendada == 1)

                <form id="delete-form" action="{{ route('aulasalunos.destroy', $aula->id) }}" method="POST">
    				@csrf
    				@method('DELETE')
                	<i class="fa-regular fa-calendar-check" style="color: green; font-size: 1.2em"></i>
                    |
                	<input type="hidden" name="id" value="{{$aula->id}}"/>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Cancelar</button>
                 </form>
                @else
                <form action="{{ route('aulasalunos.store') }}"  method="POST">
                	@csrf
                	<input type="hidden" id="aluno_id" name="aluno_id" value="{{Auth::user()->aluno->id}}"/>
                	<input type="hidden" name="aula_id" value="{{$aula->aulas_id}}"/>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-calendar-days"></i> Participar</button>
                 </form>
                @endif

            </td>
        </tr>
        @endforeach
        </tbody>
</table>

@endsection
