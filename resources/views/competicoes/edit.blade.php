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
<form id="delete-form" action="{{ route('competicoes.destroy', $competicao->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<form action="{{ route('competicoes.update', $competicao) }}"  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<h3 >Competição::{{$competicao->nome}}
<div class="float-right">
<button type="submit" class="btn btn-primary" >Atualizar</button>
&nbsp; 
<a href="{{ route('competicoes.destroy', $competicao->id) }}"
class="btn btn-danger"
   onclick="event.preventDefault();
            if (confirm('Deseja  remover o competicao {{$competicao->nome}}?')) {
                document.getElementById('delete-form').submit();
            }">
    Remover
</a>
</div>
</h3>
<hr class="hr hr-blurry" />


    <fieldset>
            <legend style="text-align: center;">Detalhes</legend>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="nome" class="form-label">Nome:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $competicao->nome) }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="data" class="form-label">Data:</label>
                </div>
                <div class="col-md-6">
                    <input type="date" id="data" name="data" class="form-control" value="{{ old('data', $competicao->data) }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="hora_inicio" class="form-label">Hora de Início:</label>
                </div>
                <div class="col-md-6">
                       <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" value="{{ date('H:i', strtotime($competicao->hora_inicio)) }}" required pattern="[0-2][0-9]:[0-5][0-9]"/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="hora_termino" class="form-label">Hora de Término:</label>
                </div>
                <div class="col-md-6">
                      <input type="time" id="hora_termino" name="hora_termino" class="form-control" value="{{ old('hora_termino', date('H:i', strtotime($competicao->hora_termino))) }}" required pattern="[0-2][0-9]:[0-5][0-9]">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="local" class="form-label">Local:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="local" name="local" class="form-control" value="{{ old('local', $competicao->local) }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="descricao" class="form-label">Descrição:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="descricao" name="descricao" class="form-control" value="{{ old('descricao', $competicao->descricao) }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="numero_maximo_participantes" class="form-label">Número Máximo de Participantes:</label>
                </div>
                <div class="col-md-6">
                    <input type="number" min="2" max="500" maxlength="3"  id="numero_maximo_participantes" name="numero_maximo_participantes" class="form-control" value="{{ old('numero_maximo_participantes', $competicao->numero_maximo_participantes) }}" required/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label class="form-label">Escalões:</label>
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="escalaoA" name="escaloes[]" value="A" class="form-check-input"{{ in_array('A', old('escaloes', explode(',', $competicao->escaloes))) ? ' checked' : '' }}>
                        <label for="escalaoA" class="form-check-label">A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="escalaoB" name="escaloes[]" value="B" class="form-check-input"{{ in_array('B', old('escaloes', explode(',', $competicao->escaloes))) ? ' checked' : '' }}>
                        <label for="escalaoB" class="form-check-label">B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="escalaoC" name="escaloes[]" value="C" class="form-check-input"{{ in_array('C', old('escaloes', explode(',', $competicao->escaloes))) ? ' checked' : '' }}>
                        <label for="escalaoC" class="form-check-label">C</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="escalaoD" name="escaloes[]" value="D" class="form-check-input"{{ in_array('D', old('escaloes', explode(',', $competicao->escaloes))) ? ' checked' : '' }}>
                        <label for="escalaoD" class="form-check-label">D</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="premiacao" class="form-label">Premiação:</label>
                </div>
                <div class="col-md-6">
                    <textarea id="premiacao" name="premiacao" class="form-control" rows="5">{{ old('premiacao', $competicao->premiacao) }}</textarea>
                </div>
            </div>

<fieldset style="text-align: center;"  class="form-group">
    	<legend style="text-align: center;">Poster</legend>
    	@if($competicao->imagem)
    <img src="{{ asset('storage/' . $competicao->imagem) }}" alt="Foto {{$competicao->nome}}" class="img-thumbnail img-fluid my-3"/>
    @endif
    	<div class="row form-group">
    	<div class="col-md-4 text-right">
    <label for="foto">Poster:</label>
    </div>
    <div class="col-md-8">
    <input type="file" id="imagem" name="imagem" accept="image/*">
    </div>
  </div>
    </fieldset>
    
            <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="observacoes" class="form-label">Observações:</label>
                </div>
                <div class="col-md-6">
                    <textarea id="observacoes" name="observacoes" class="form-control" rows="5">{{ old('observacoes', $competicao->observacoes) }}</textarea>
                </div>
            </div>
            
  <div class="row form-group">
                <div class="col-md-4 text-right">
                    <label for="estado" class="form-label">Estado:</label>
                </div>
                <div class="col-md-6">
                    <select id="estado" name="estado" class="form-control" required>
                        <option value="Adiada"{{ old('estado', $competicao->estado) === 'Adiada' ? ' selected' : '' }}>Adiada</option>
                        <option value="Ativa"{{ old('estado', $competicao->estado) === 'Ativa' ? ' selected' : '' }}>Ativa</option>
                        <option value="Cancelada"{{ old('estado', $competicao->estado) === 'Cancelada' ? ' selected' : '' }}>Cancelada</option>
                        <option value="Pendente"{{ old('estado', $competicao->estado) === 'Pendente' ? ' selected' : '' }}>Pendente</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Atualizar Competição</button>
                </div>
            </div>
        </fieldset>
</form>
<div class="row" style="height: 250px;">&nbsp;</div>
@endsection
