@extends('layouts.app')

@section('menu')
    @parent
@endsection
@section('conteudo')

<h3 >Nova Cobrança
</h3>

<hr class="hr hr-blurry" />


<div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<form action="{{ route('cobrancas.store') }}" method="POST">
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
        <option value="{{ $aluno->id }}" {{ old('aluno_id') == $aluno->id ? 'selected' : '' }}>{{ $aluno->numero }} - {{ $aluno->nome }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="data_cobranca" class="form-label">Data Cobrança:</label>
    </div>
    <div class="col-md-8">
      <input type="date" id="data_cobranca" name="data_cobranca" class="form-control" required value="{{ old('data_cobranca') }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="montante" class="form-label">Montante:</label>
    </div>
    <div class="col-md-8">
      <input type="number" step="0.01" id="montante" name="montante" class="form-control" required value="{{ old('montante') }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="multa" class="form-label">Multa:</label>
    </div>
    <div class="col-md-8">
      <input type="number" step="0.01" id="multa" name="multa" class="form-control" required value="{{ old('multa') }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="iva" class="form-label">IVA:</label>
    </div>
    <div class="col-md-8">
      <input type="number" step="0.01" id="iva" name="iva" class="form-control" required value="{{ old('iva') }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="descricao" class="form-label">Descrição:</label>
    </div>
    <div class="col-md-8">
      <input type="text" id="descricao" name="descricao" class="form-control" required value="{{ old('descricao') }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="referencia" class="form-label">Referência:</label>
    </div>
    <div class="col-md-8">
      <input type="text" id="referencia" name="referencia" class="form-control" required value="{{ old('referencia') }}" disabled="disabled" placeholder="(Gerado automaticamente)"/>
    </div>
  </div>

<div class="row form-group">
    <div class="col-md-4"  style="text-align: right">
      <label for="data_limite" class="form-label">Data Limite:</label>
    </div>
    <div class="col-md-8">
      <input type="datetime-local" id="data_limite" name="data_limite" class="form-control" value="{{ old('data_limite') }}">
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
      <input type="datetime-local" id="data_pagamento" name="data_pagamento" class="form-control" value="{{ old('data_pagamento') }}">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-4" style="text-align: right">
      <label for="modo_pagamento" class="form-label ">Modo de Pagamento:</label>
    </div>
    <div class="col-md-8">
      <input type="text" id="modo_pagamento" name="modo_pagamento" class="form-control" required value="{{ old('modo_pagamento') }}">
    </div>
  </div>

 <div class="row form-group">
  <div class="col-md-4"  style="text-align: right">
    <label for="estado" class="form-label">Estado:</label>
  </div>
  <div class="col-md-8">
    <select id="estado" name="estado" class="form-control" required>
      <option value="Pago" {{ old('estado') == 'Pago' ? 'selected' : '' }}>Pago</option>
      <option value="Nao Pago" {{ old('estado') == 'Nao Pago' ? 'selected' : '' }}>Não Pago</option>
      <option value="Pendente" {{ old('estado') == 'Pendente' ? 'selected' : '' }}>Pendente</option>
      <option value="Cancelada" {{ old('estado') == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
    </select>
  </div>
</div>

	<div class="row">
	<div class="col-md-4"  style="text-align: right"></div>
		<div class="col-md-8">
  			<button type="submit" class="btn btn-primary">Adicionar Cobrança</button>
  		</div>
  </div>
  <div class="row" style="height: 20px"></div>
  </fieldset>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>

@endsection
