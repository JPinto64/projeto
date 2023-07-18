@extends('layouts.app')

@section('menu')
    @parent
@endsection

@section('conteudo')

<form action="{{ route('alunos.store') }}"  method="POST" enctype="multipart/form-data">
<h3 >Novo Aluno
<button type="submit" class="btn btn-primary float-right" >Adicionar</button>
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

    @csrf
    <fieldset>
    <legend style="text-align: center;">Detalhes Pessoais</legend>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="numero" class="form-label">Número:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="text" id="numero" name="numero" class="form-control" placeholder="(Gerado automaticamente)" disabled="disabled" value="{{ old('numero') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="text" id="numero" name="numero" class="form-control" placeholder="(Gerado automaticamente)" disabled="disabled" value="{{ old('numero') }}" />
=======
        <div class="col-md-8">
            <input type="text" id="numero" name="numero" class="form-control" placeholder="(Gerado automaticamente)" disabled="disabled" value="{{ old('numero') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="nome" class="form-label">Nome:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}" required/>
=======
        <div class="col-md-8">
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="nif" class="form-label">NIF:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="text" id="nif" name="nif" class="form-control" placeholder="NIF" maxlength="9" value="{{ old('nif') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="text" id="nif" name="nif" class="form-control" placeholder="NIF" maxlength="9" value="{{ old('nif') }}"  required/>
=======
        <div class="col-md-8">
            <input type="text" id="nif" name="nif" class="form-control" placeholder="NIF" maxlength="9" value="{{ old('nif') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="sexo" class="form-label">Sexo:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <select id="sexo" name="sexo" class="form-select">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <select id="sexo" name="sexo" class="form-select"  required>
=======
        <div class="col-md-8">
            <select id="sexo" name="sexo" class="form-select">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
                <option value="M" {{ old('sexo') === 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ old('sexo') === 'F' ? 'selected' : '' }}>Feminino</option>
            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="datadenascimento" class="form-label">Data de Nascimento:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="date" id="datadenascimento" name="datadenascimento" class="form-control" placeholder="Data de Nascimento" value="{{ old('datadenascimento') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="date" id="datadenascimento" name="datadenascimento" class="form-control" placeholder="Data de Nascimento" value="{{ old('datadenascimento') }}"  required>
=======
        <div class="col-md-8">
            <input type="date" id="datadenascimento" name="datadenascimento" class="form-control" placeholder="Data de Nascimento" value="{{ old('datadenascimento') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
</fieldset>

<fieldset style="text-align: center;" class="form-group">
    <legend style="text-align: center;">Foto</legend>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="foto">Foto:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
=======
<<<<<<< HEAD
        <div class="col-md-6">
=======
        <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"  required>
=======
        <div class="col-md-8">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="telemovel" class="form-label">Telemóvel:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="text" id="telemovel" name="telemovel" class="form-control" placeholder="Telemóvel" maxlength="9" value="{{ old('telemovel') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="text" id="telemovel" name="telemovel" class="form-control" placeholder="Telemóvel" maxlength="9" value="{{ old('telemovel') }}"  required>
=======
        <div class="col-md-8">
            <input type="text" id="telemovel" name="telemovel" class="form-control" placeholder="Telemóvel" maxlength="9" value="{{ old('telemovel') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="telemovel2" class="form-label">Telemóvel 2:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
=======
<<<<<<< HEAD
        <div class="col-md-6">
=======
        <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <input type="text" id="telemovel2" name="telemovel2" name="telemovel2" class="form-control" placeholder="Telemóvel 2" maxlength="9" value="{{ old('telemovel2') }}">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="endereco" class="form-label">Endereço:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" value="{{ old('endereco') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" value="{{ old('endereco') }}"  required>
=======
        <div class="col-md-8">
            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" value="{{ old('endereco') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
</fieldset>

<fieldset>
    <legend style="text-align: center;">Outros</legend>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="data_inscricao" class="form-label">Data de inscrição:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <input type="date" id="data_inscricao" name="data_inscricao" class="form-control" placeholder="Data de inscrição" value="{{ old('data_inscricao') }}">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <input type="date" id="data_inscricao" name="data_inscricao" class="form-control" placeholder="Data de inscrição" value="{{ old('data_inscricao') }}"  required>
=======
        <div class="col-md-8">
            <input type="date" id="data_inscricao" name="data_inscricao" class="form-control" placeholder="Data de inscrição" value="{{ old('data_inscricao') }}">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="escalao" class="form-label">Escalão:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <select id="escalao" name="escalao" class="form-select">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <select id="escalao" name="escalao" class="form-select"  required>
=======
        <div class="col-md-8">
            <select id="escalao" name="escalao" class="form-select">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
                <option value="A" {{ old('escalao') === 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('escalao') === 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ old('escalao') === 'C' ? 'selected' : '' }}>C</option>
                <option value="D" {{ old('escalao') === 'D' ? 'selected' : '' }}>D</option>
            </select>
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="bio" class="form-label">Necessidades especiais e Observações</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
=======
<<<<<<< HEAD
        <div class="col-md-6">
=======
        <div class="col-md-8">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <textarea id="observacoes" name="observacoes" class="form-control" placeholder="Necessidades especiais e Observações">{{ old('observacoes') }}</textarea>
        </div>
    </div>
 
 
    <div class="row form-group">
        <div class="col-md-4 text-right">
            <label for="estado" class="form-label">Estado:</label>
        </div>
<<<<<<< Updated upstream
        <div class="col-md-8">
            <select id="estado" name="estado" class="form-select">
=======
<<<<<<< HEAD
        <div class="col-md-6">
            <select id="estado" name="estado" class="form-select"  required>
=======
        <div class="col-md-8">
            <select id="estado" name="estado" class="form-select">
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
                <option value="Ativo" {{ old('estado') === 'Ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="Suspenso" {{ old('estado') === 'Suspenso' ? 'selected' : '' }}>Suspenso</option>
                <option value="Em divida" {{ old('estado') === 'Ferias' ? 'selected' : '' }}>Em dívida</option>
            </select>
        </div>
    </div>
</fieldset>

<div class="col-md-12 text-center">
	<button type="submit" class="btn btn-primary my-5" >Guardar</button>
</div>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>
<script type="text/javascript">
$(document).ready(function(){
  $('#nif').mask('000000000');
});

</script>

@endsection
