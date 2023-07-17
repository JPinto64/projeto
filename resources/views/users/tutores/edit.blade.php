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
<form id="delete-form" action="{{ route('tutores.destroy', $tutor->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
<form action="{{ route('tutores.update', $tutor) }}"  method="POST" enctype="multipart/form-data">
<h3 >Tutor::{{$tutor->numero}} - {{$tutor->nome}}
<div class="float-right">
<button type="submit" class="btn btn-primary" >Atualizar</button>
&nbsp; 
<a href="{{ route('tutores.destroy', $tutor->id) }}"
class="btn btn-danger"
   onclick="event.preventDefault();
            if (confirm('Deseja  remover o tutor {{$tutor->nome}}?')) {
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
        <input type="text" id="numero" name="numero" class="form-control" placeholder="Número" value="{{ $tutor->numero }}" readonly="readonly" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="nome" class="form-label">Nome:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{ $tutor->nome }}"/>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="nif" class="form-label">NIF:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="nif" name="nif" class="form-control" placeholder="NIF" value="{{ $tutor->nif }}" maxlength="9" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="sexo" class="form-label">Sexo:</label>
    </div>
    <div class="col-md-8">
        <select id="sexo" name="sexo" class="form-select">
            <option value="M" {{ $tutor->sexo === 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ $tutor->sexo === 'F' ? 'selected' : '' }}>Feminino</option>
        </select>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="datadenascimento" class="form-label">Data de Nascimento:</label>
    </div>
    <div class="col-md-8">
        <input type="date" id="datadenascimento" name="datadenascimento" class="form-control" placeholder="Data de Nascimento" value="{{ $tutor->datadenascimento }}">
    </div>
</div>
</fieldset>

<fieldset style="text-align: center;"  class="form-group">
    	<legend style="text-align: center;">Foto</legend>
    	@if($tutor->foto)
    <img src="{{ asset('storage/' . $tutor->foto) }}" alt="Foto {{$tutor->nome}}" class="img-thumbnail img-fluid my-3"/>
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
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $tutor->email }}">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="telemovel" class="form-label">Telemóvel:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="telemovel" name="telemovel" class="form-control" placeholder="Telemóvel" maxlength="9" value="{{ $tutor->telemovel }}">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="telemovel2" class="form-label">Telemóvel 2:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="telemovel2" name="telemovel2" name="telemovel2" class="form-control" placeholder="Telemóvel 2" maxlength="9" value="{{ $tutor->telemovel2 }}">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="endereco" class="form-label">Endereço:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" value="{{ $tutor->endereco }}">
    </div>
</div>

</fieldset>
<fieldset>
<legend style="text-align: center;">Outros</legend>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="linguasfaladas" class="form-label">Línguas Faladas:</label>
    </div>
    <div class="col-md-8">
        <input type="text" id="linguasfaladas" name="linguasfaladas" class="form-control" placeholder="Línguas Faladas" value="{{ $tutor->linguasfaladas }}"/>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="bio" class="form-label">Bio:</label>
    </div>
    <div class="col-md-8">
        <textarea id="bio" name="bio" class="form-control" placeholder="Bio">{{ $tutor->bio }}</textarea>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="classificacao" class="form-label">Classificação:</label>
    </div>
    <div class="col-md-8">
        <select id="classificacao" name="classificacao" class="form-select">
            <option value="0" {{ $tutor->classificacao === '0' ? 'selected' : '' }}>0</option>
            <option value="1" {{ $tutor->classificacao === '1' ? 'selected' : '' }}>1</option>
            <option value="2" {{ $tutor->classificacao === '2' ? 'selected' : '' }}>2</option>
            <option value="3" {{ $tutor->classificacao === '3' ? 'selected' : '' }}>3</option>
            <option value="4" {{ $tutor->classificacao === '4' ? 'selected' : '' }}>4</option>
            <option value="5" {{ $tutor->classificacao === '5' ? 'selected' : '' }}>5</option>
        </select>
    </div>
</div>

<div class="row form-group">
    <div class="col-md-4 text-right">
        <label for="estado" class="form-label">Estado:</label>
    </div>
    <div class="col-md-8">
        <select id="estado" name="estado" class="form-select">
            <option value="Ativo" {{ $tutor->estado === 'Ativo' ? 'selected' : '' }}>Ativo</option>
            <option value="Suspenso" {{ $tutor->estado === 'Suspenso' ? 'selected' : '' }}>Suspenso</option>
            <option value="Ferias" {{ $tutor->estado === 'Ferias' ? 'selected' : '' }}>Férias</option>
            <option value="Ausente" {{ $tutor->estado === 'Ausente' ? 'selected' : '' }}>Ausente</option>
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
