<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/SimboloCCP.png') }}" type="image/png">

    <link href="{{ asset('css/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
	<!-- Recursos boostrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
	<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.5/datatables.min.js"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <title>SwimManager {{ session('success') }}</title>
</head>
<body>
    @section('menu')

    <header style="vertical-align: middle;">
        <img src="{{ asset('images/SimboloCCP.png') }}" alt="Logotipo">
        SwimManager

@auth
	<span class="text-center small float-middle">
		Utilizador: {{ Auth::user()->name }} | Grupo: {{ Auth::user()->usergroup }}
	</span>

=======
<<<<<<< HEAD

    <link rel="icon" href="{{ asset('images/SimboloCCP.png') }}" type="image/png">

    <link href="{{ asset('css/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
	<!-- Recursos boostrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
	<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.5/datatables.min.js"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
=======
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/SimboloCCP.png') }}" type="image/png">

    <link href="{{ asset('css/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
	<!-- Recursos boostrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
	<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.5/datatables.min.js"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
    <title>SwimManager {{ session('success') }}</title>
</head>
<body>
    @section('menu')

    <header style="vertical-align: middle;">
        <img src="{{ asset('images/SimboloCCP.png') }}" alt="Logotipo">
        SwimManager

@auth
	<span class="text-center small float-middle">
		Utilizador: {{ Auth::user()->name }} | Grupo: {{ Auth::user()->usergroup }}
	</span>

>>>>>>> Stashed changes
        <a href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm float-right" id="btn-logout" style="margin-top:10px; color: #FFF">Terminar sessão</a>
 @else
      <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm float-right" id="btn-logout" style="margin-top:10px; color: #FFF"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
@endauth
    </header>

@auth
    <nav>

        <ul>
<<<<<<< Updated upstream
        <li><a href="pag_ini" class="{{ request()->is('pag_ini') ? 'selected' : '' }}"><i class="fa-solid fa-house"></i> Página Inicial</a></li>
=======
<<<<<<< HEAD
        <li><a href="/" class="{{ request()->is('/') ? 'selected' : '' }}"><i class="fa-solid fa-house"></i> Página Inicial</a></li>
=======
        <li><a href="pag_ini" class="{{ request()->is('pag_ini') ? 'selected' : '' }}"><i class="fa-solid fa-house"></i> Página Inicial</a></li>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
         @if(Auth::user()->usergroup === 'Administradores')
            <li><a href="{{ route('tutores.index') }}"  class="{{ request()->is('tutores') ? 'selected' : '' }}"><i class="fa-solid fa-person-chalkboard"></i> Professores</a></li>
            <li><a href="{{ route('alunos.index') }}" class="{{ request()->is('alunos') ? 'selected' : '' }}"><i class="fa fa-graduation-cap"></i> Alunos</a></li>
            <li><a href="{{ route('users.index') }}" class="{{ request()->is('users') ? 'selected' : '' }}">  <i class="fa fa-users"></i> Utilizadores</a></li>
            <li><a href="{{ route('aulas.index') }}" class="{{ request()->is('aulas') ? 'selected' : '' }}"><i class="fa-solid fa-calendar-days"></i> Aulas/Horários</a></li>
<<<<<<< Updated upstream
            <li><a href="{{ route('cobrancas.index') }}" class="{{ request()->is('cobrancas') ? 'selected' : '' }}"><i class="fa-solid fa-sack-dollar"></i> Pagamentos</a></li>
=======
<<<<<<< HEAD
            <li><a href="{{ route('cobrancas.index') }}" class="{{ request()->is('cobrancas') ? 'selected' : '' }}"><i class="fa-solid fa-sack-dollar"></i> Propinas</a></li>
=======
            <li><a href="{{ route('cobrancas.index') }}" class="{{ request()->is('cobrancas') ? 'selected' : '' }}"><i class="fa-solid fa-sack-dollar"></i> Pagamentos</a></li>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            <li><a href="{{ route('competicoes.index') }}" class="{{ request()->is('competicoes') ? 'selected' : '' }}"><i class="fa-solid fa-trophy"></i> Competições</a></li>
            <!--
            <li><a href="dadospessoais" class="{{ request()->is('dadospessoais') ? 'selected' : '' }}">Dados Pessoais</a></li>
             -->

<<<<<<< Updated upstream
            @elseif(Auth::user()->usergroup  === 'Tutores')
            	<li><a href="{{ route('aulas.index') }}" class="{{ request()->is('avaliacao') ? 'selected' : '' }}"><i class="fa-solid fa-person-swimming"></i> Minhas Aulas</a></li>
=======
<<<<<<< HEAD

            @elseif(Auth::user()->usergroup  === 'Tutores')
            	<li><a href="avaliacao" class="{{ request()->is('avaliacao') ? 'selected' : '' }}"><i class="fa-solid fa-person-swimming"></i> Minhas Aulas</a></li>
=======
            @elseif(Auth::user()->usergroup  === 'Tutores')
            	<li><a href="{{ route('aulas.index') }}" class="{{ request()->is('avaliacao') ? 'selected' : '' }}"><i class="fa-solid fa-person-swimming"></i> Minhas Aulas</a></li>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes

            @elseif(Auth::user()->usergroup  === 'Alunos')
            	<li><a href="{{ route('aulasalunos.index') }}" class="{{ request()->is('aulasalunos') ? 'selected' : '' }}"><i class="fa-solid fa-person-swimming"></i> Minhas Aulas</a></li>
            	<li><a href="{{ route('competicoesalunos.index') }}" class="{{ request()->is('competicoesalunos') ? 'selected' : '' }}"><i class="fa-solid fa-trophy"></i> Minhas Competições</a></li>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
            	<li><a href="{{ route('cobrancas-aluno') }}" class="{{ request()->is('cobrancas-aluno') ? 'selected' : '' }}"><i class="fa-solid fa-sack-dollar"></i> Minhas Propinas</a></li>
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
           @endif
        </ul>

    </nav>
@endauth

    @show

<<<<<<< Updated upstream
    <main>
=======
<<<<<<< HEAD
    <main style="{{ request()->is('/') ? 'margin-left: 0%;' : '' }}">
        <div style="height:150px">
=======
    <main>
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
	<div class="container">
	@if(session('success'))
    <div style="
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    margin-top: 1rem;
    border: 1px solid #155724;
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    ">
        {{ session('success') }}
    </div>
@endif
<hr class="hr shadowed-hr"/>
        @yield('conteudo')

    </div>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    </div>
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    </main>

    <footer>
        Clube de Caça e Pesca de Oliveira do Hospital.
         | Rua Professor Doutor César de Oliveira, n.º 3, Oliveira do Hospital, Portugal.
		<a href="mailto:geral@ccpoh.com" style="color:#FFF"> Email: geral@ccpoh.com</a> | Tel: 900 000 007

        <p>&copy; 2023 - Todos os direitos reservados.  </p>
    </footer>


    <script src="{{ asset('js/pagamento.js') }}"></script>
    <script src="{{ asset('js/projeto.js') }}"></script>
</body>
</html>
