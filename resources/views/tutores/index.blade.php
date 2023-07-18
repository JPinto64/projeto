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

<h3>Professores
<a href="{{ route('tutores.create') }}"
class="btn btn-primary float-right">
    Novo
</a>

</h3>

<hr class="hr hr-blurry shadowed-hr"/>
<table class="table table-striped table-bordered table-hover dataTable" id="dataTable">
    <thead>
        <tr>
            <th style="text-align: center;">Numero</th>
            <th>Nome</th>
            <th style="text-align: center;">NIF</th>
            <th>Email</th>
            <th style="text-align: center;">Telemóvel</th>
            <th style="text-align: center;">Classificação</th>
            <th style="text-align: center;">Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tutores as $tutor)
            <tr>
                <td style="text-align: center;">{{ $tutor->numero }}</td>
                <td><a href="{{ route('tutores.edit', $tutor->id) }}">{{ $tutor->nome }}</a></td>
                <td style="text-align: center;">{{ $tutor->nif }}</td>
                <td>{{ $tutor->email }}</td>
                <td style="text-align: center;">{{ $tutor->telemovel }}</td>
                <td style="text-align: center; color:orange;">
                @for ($i = 1; $i <= $tutor->classificacao; $i++)
    				&#9733;
				@endfor

                </td>
                <td style="text-align: center;">{{ $tutor->estado }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<<<<<<< Updated upstream

=======
<<<<<<< HEAD
=======

>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
@endsection
