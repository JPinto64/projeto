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
<form id="delete-form" action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
<form action="{{ route('alunos.update', $aluno) }}"  method="POST" enctype="multipart/form-data">
<h3 >Aluno::{{$aluno->numero}} - {{$aluno->nome}}
<div class="float-right">
<button type="submit" class="btn btn-primary" >Atualizar</button>
&nbsp; 
<a href="{{ route('alunos.destroy', $aluno->id) }}"
class="btn btn-danger"
   onclick="event.preventDefault();
            if (confirm('Deseja  remover o aluno {{$aluno->nome}}?')) {
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
<legend style="text-align: center;">Detalhes Pessoais</legend>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="numero" class="form-label">Número:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="numero" name="numero" class="form-control" placeholder="Número" value="{{ $aluno->numero }}" readonly="readonly" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="nome" class="form-label">Nome:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{ $aluno->nome }}"/>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="nif" class="form-label">NIF:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="nif" name="nif" class="form-control" placeholder="NIF" value="{{ $aluno->nif }}" maxlength="9" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="sexo" class="form-label">Sexo:</label>
    </div>
    <div class="col-md-8">
        <select id="sexo" name="sexo" class="form-select">
            <option value="M" {{ $aluno->sexo === 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ $aluno->sexo === 'F' ? 'selected' : '' }}>Feminino</option>
        </select>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="datadenascimento" class="form-label">Data de Nascimento:</label>
    </div>
    <div class="col-md-8">
        <input type="date" id="datadenascimento" name="datadenascimento" class="form-control" placeholder="Data de Nascimento" value="{{ $aluno->datadenascimento }}">
    </div>
</div>
</fieldset>

<fieldset style="text-align: center;"  class="form-group">
    	<legend style="text-align: center;">Foto</legend>
    	@if($aluno->foto)
    <img src="{{ asset('storage/' . $aluno->foto) }}" alt="Foto {{$aluno->nome}}" class="img-thumbnail img-fluid my-3"/>
    @endif
    	<div class="row form-group">
    	<div class="col-md-4 text-right">
    <label for="foto">Foto:</label>
    </div>
    <div class="col-md-8">
    <input type="file" id="foto" name="foto" accept="image/*">
    </div>
  </div>
    </fieldset>

<fieldset>
<legend style="text-align: center;">Endereço & Contato</legend>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="email" class="form-label">Email:</label>
    </div>
    <div class="col-md-8">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $aluno->email }}">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="telemovel" class="form-label">Telemóvel:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="telemovel" name="telemovel" class="form-control" placeholder="Telemóvel" maxlength="9" value="{{ $aluno->telemovel }}">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="telemovel2" class="form-label">Telemóvel 2:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="telemovel2" name="telemovel2" name="telemovel2" class="form-control" placeholder="Telemóvel 2" maxlength="9" value="{{ $aluno->telemovel2 }}">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="endereco" class="form-label">Endereço:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" value="{{ $aluno->endereco }}">
    </div>
</div>

</fieldset>
<fieldset>
<legend style="text-align: center;">Outros</legend>
<div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="data_inscricao" class="form-label">Data de inscrição:</label>
        </div>
        <div class="col-md-8">
            <input type="date" id="data_inscricao" name="data_inscricao" class="form-control" placeholder="Data de inscrição" value="{{ $aluno->data_inscricao }}">
        </div>
    </div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="escalao" class="form-label">Escalão:</label>
    </div>
    <div class="col-md-8">
        <select id="escalao" name="escalao" class="form-select">
            <option value="A" {{ $aluno->escalao === 'A' ? 'selected' : '' }}>A</option>
            <option value="B" {{ $aluno->escalao === 'B' ? 'selected' : '' }}>B</option>
            <option value="C" {{ $aluno->escalao === 'C' ? 'selected' : '' }}>C</option>
            <option value="D" {{ $aluno->escalao === 'D' ? 'selected' : '' }}>D</option>
        </select>
    </div>
</div>

<div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="bio" class="form-label">Necessidades especiais e Observações</label>
        </div>
        <div class="col-md-8">
            <textarea id="observacoes" name="observacoes" class="form-control" placeholder="Necessidades especiais e Observações">{{ $aluno->observacoes }}</textarea>
        </div>
    </div>
    
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="estado" class="form-label">Estado:</label>
    </div>
    <div class="col-md-8">
        <select id="estado" name="estado" class="form-select">
            <option value="Ativo" {{ $aluno->estado === 'Ativo' ? 'selected' : '' }}>Ativo</option>
            <option value="Suspenso" {{ $aluno->estado === 'Suspenso' ? 'selected' : '' }}>Suspenso</option>
            <option value="Ferias" {{ $aluno->estado === 'Ferias' ? 'selected' : '' }}>Férias</option>
            <option value="Ausente" {{ $aluno->estado === 'Ausente' ? 'selected' : '' }}>Ausente</option>
        </select>
    </div>
</div>
</fieldset>
<div class="col-md-12 text-center">
	<button type="submit" class="btn btn-primary my-5" >Atualizar</button>
</div>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>
<script type="text/javascript">
$(document).ready(function(){
  $('#nif').mask('000000000');
});

</script>

@endsection
