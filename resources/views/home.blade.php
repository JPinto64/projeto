<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>

</head>
<body>
    @section('menu')

    <header>
        <img src="../images/SimboloCCP.png" alt="Italian Trulli">
        <div id="logout">
            <a href="index.blade.php">Logout</a>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="pag_ini" >Página Inicial</a></li>
            <li><a href="dadospessoais" class="">Dados Pessoais</a></li>
            <li><a href="dadoscurriculares">Dados Curriculares</a></li>
            <li><a href="horario">Horário</a></li>
            <li><a href="pagamentos">Pagamentos</a></li>
            <li><a href="competicoes">Competições</a></li>
            <li><a href="avaliacoes">Avaliações</a></li>
        </ul>
    </nav>

    @show

    <main>
	<div class="container">
        @yield('conteudo')

    </div>
    </main>

    <footer>
        <p>&copy; 2023 - Todos os direitos reservados.</p>
    </footer>


    <script>

    </script>
</body>
</html>
