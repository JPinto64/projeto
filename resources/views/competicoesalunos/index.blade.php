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

<h3><i class="fa-solid fa-trophy"></i> Minhas Competições</h3>
<hr class="hr hr-blurry shadowed-hr"/>

<div class="container">
<div class="row">
    @foreach ($competicoesAlunos as $competicao)
    <div class="col-md-4">
        <div class="card mb-4" style="background-color: {{ $competicao->reservada ? 'rgb(0,255,0,0.1)' : ''}}">
			<div class="image-container">
				@if($competicao->competicoes_imagem) 
					<img src="{{ asset('storage/' .$competicao->competicoes_imagem) }}" class="card-img-top" alt="{{ $competicao->competicoes_nome }}"> 
				@else
				<div class="competicao-image-container">
					<div class="competicao-image-placeholder">Sem poster</div>
					</div>
				@endif
			</div>

			<div class="card-body">
                <h5 class="card-title">{{ $competicao->competicoes_nome }}</h5>
                <p class="card-text"><strong>Data:</strong> {{ date('d/m/Y', strtotime($competicao->competicoes_data)) }} | <strong>Horário: </strong>{{ date('H:i', strtotime($competicao->competicoes_hora_inicio)) }} - {{ date('H:i', strtotime($competicao->competicoes_hora_termino)) }}</p>
                <p class="card-text"><strong>Local:</strong> {{ $competicao->competicoes_local }}</p>
                <p class="card-text"><strong>Escalões:</strong> {{ $competicao->competicoes_escaloes }}</p>
                <p class="card-text"><strong>Estado:</strong> <span style="color: {{ $competicao->competicoes_estado !== 'Ativa' ? 'rgb(255,0,0)' : 'inherit' }}">{{ $competicao->competicoes_estado }}</span></p>
                
                @if (strtotime($competicao->competicoes_data) > strtotime('today'))
                  @if ($competicao->reservada)
                    
                <form id="delete-form" action="{{ route('competicoesalunos.destroy', $competicao->id) }}" method="POST">
    				@csrf
    				@method('DELETE')
                	<i class="fa-regular fa-calendar-check" style="color: green; font-size: 1.2em"></i>
                    |
<<<<<<< Updated upstream
                	<input type="hidden" name="id" value="{{$competicao->id}}"/>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Cancelar</button>
=======
<<<<<<< HEAD
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja cancelar esta reserva?')"><i class="fa fa-trash"></i> Cancelar</button>
=======
                	<input type="hidden" name="id" value="{{$competicao->id}}"/>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Cancelar</button>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
                 </form>
                @else
                <form action="{{ route('competicoesalunos.store') }}"  method="POST">
                	@csrf
                	<input type="hidden" id="aluno_id" name="aluno_id" value="{{Auth::user()->aluno->id}}"/>
                	<input type="hidden" name="competicao_id" value="{{$competicao->competicoes_id}}"/>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-calendar-days"></i> Participar</button>
                 </form>
                @endif
                
                @else
                <span class="badge badge-danger"> Expirada</span>
                @endif
                
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>



<@endsection
