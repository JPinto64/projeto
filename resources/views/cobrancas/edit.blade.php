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
<form id="delete-form" action="{{ route('cobrancas.destroy', $cobranca->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
<form action="{{ route('cobrancas.update', $cobranca) }}"  method="POST" >
<h3 >Cobranca::{{str_pad($cobranca->id, 9, '0', STR_PAD_LEFT)}} - {{$cobranca->aluno->nome}}
<div class="float-right">
<button type="submit" class="btn btn-primary" >Atualizar</button>
&nbsp; 
<a href="{{ route('cobrancas.destroy', $cobranca->id) }}"
class="btn btn-danger"
   onclick="event.preventDefault();
            if (confirm('Deseja  remover o cobranca {{$cobranca->nome}}?')) {
                document.getElementById('delete-form').submit();
            }">
    Remover
</a>
</div>
</h3>
<hr class="hr hr-blurry" />

    @csrf
    @method('PUT')
   <fieldset>
<legend>Detalhes da cobrança</legend>
  @csrf

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="aluno_id" class="form-label">Aluno:</label>
    </div>
    <div class="col-md-8">
      <select id="aluno_id" name="aluno_id" class="form-control">
        @foreach($alunos as $aluno)
        <option value="{{ $aluno->id }}" {{ $cobranca->aluno_id == $aluno->id ? 'selected' : '' }}>{{ $aluno->numero }} - {{ $aluno->nome }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="data_cobranca" class="form-label">Data Cobrança:</label>
    </div>
    <div class="col-md-8">
      <input type="date" id="data_cobranca" name="data_cobranca" class="form-control" required value="{{ $cobranca->data_cobranca }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="montante" class="form-label">Montante:</label>
    </div>
    <div class="col-md-8">
      <input type="number" step="0.01" id="montante" name="montante" class="form-control" required value="{{ $cobranca->montante }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="multa" class="form-label">Multa:</label>
    </div>
    <div class="col-md-8">
      <input type="number" step="0.01" id="multa" name="multa" class="form-control" required value="{{ $cobranca->multa }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="iva" class="form-label">IVA:</label>
    </div>
    <div class="col-md-8">
      <input type="number" step="0.01" id="iva" name="iva" class="form-control" required value="{{ $cobranca->iva }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="descricao" class="form-label">Descrição:</label>
    </div>
    <div class="col-md-8">
      <input type="text" id="descricao" name="descricao" class="form-control" required value="{{ $cobranca->descricao }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="referencia" class="form-label">Referência:</label>
    </div>
    <div class="col-md-8">
      <input type="text" id="referencia" name="referencia" class="form-control" required value="{{ $cobranca->referencia }}" readonly="readonly" placeholder="(Gerado automaticamente)"/>
    </div>
</div>


<div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="data_limite" class="form-label">Data Limite:</label>
    </div>
    <div class="col-md-8">
      <input type="datetime-local" id="data_limite" name="data_limite" class="form-control" value="{{ $cobranca->data_limite }}">
    </div>
  </div>

</fieldset>

<fieldset>
<legend>Detalhes de pagamento</legend>
  
  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="data_pagamento" class="form-label">Data Pagamento:</label>
    </div>
    <div class="col-md-8">
      <input type="datetime-local" id="data_pagamento" name="data_pagamento" class="form-control" value="{{ $cobranca->data_pagamento }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4" style="text-align: right">
      <label for="modo_pagamento" class="form-label ">Modo de Pagamento:</label>
    </div>
    <div class="col-md-8">
      <input type="text" id="modo_pagamento" name="modo_pagamento" class="form-control" required value="{{ $cobranca->modo_pagamento }}">
    </div>
  </div>

 <div class="row form-group">
  <div class="col-md-4"  style="text-align: right">
    <label for="estado" class="form-label">Estado:</label>
  </div>
  <div class="col-md-8">
    <select id="estado" name="estado" class="form-control" required>
      <option value="Pago" {{ $cobranca->estado == 'Pago' ? 'selected' : '' }}>Pago</option>
      <option value="Nao Pago" {{ $cobranca->estado == 'Nao Pago' ? 'selected' : '' }}>Não Pago</option>
      <option value="Pendente" {{ $cobranca->estado == 'Pendente' ? 'selected' : '' }}>Pendente</option>
      <option value="Cancelada" {{ $cobranca->estado == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
    </select>
  </div>
</div>

	<div class="row">
	<div class="col-md-4"  style="text-align: right"></div>
		<div class="col-md-8">
  			<button type="submit" class="btn btn-primary">Atualizar Cobrança</button>
  		</div>
  </div>
  <div class="row" style="height: 20px"></div>
  </fieldset>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>

@endsection
