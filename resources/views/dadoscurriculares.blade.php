<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
	margin: 0;
	padding: 0;
	background-color: #f1f1f1;
}
header {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	display: flex;
    justify-content: space-between;
	align-items: center;
	height: 60px;
	background-color: #306EBF;
	color: #fff;
	padding: 0 20px;
}
nav {
	float: left;
	width: 20%;
	background-color: white;
	height: 100vh;
	position: fixed;
}
nav ul {
	list-style-type: none;
	padding: 0;
}
nav li a {
	display: block;
	color: #000;
	padding: 8px 16px;
	text-decoration: none;
}
nav li a:hover {
	background-color: #306EBF;
}

nav ul li a.selecionado {
	background-color: #D9A036;
	color: white;
}

main {
	margin-top: 60px;
	margin-left: 20%;
	padding: 1px 16px;
	height: 1000px;
}
footer {
	background-color: #306EBF;
	color: #fff;
	padding: 10px;
	text-align: center;
	position: fixed;
	bottom: 0;
	width: 100%;
}
#logout {
	float: right;
	margin: 20px;
}
#logout a {
	background-color: #306EBF;
	color: #000000;
	padding: 10px 20px;
	text-decoration: none;
}
#logout a:hover {
	background-color: #fff;
	color: #333;
}
header img {
	max-width: 100%;
	max-height: 100%;
}
    </style>
</head>
<body>
    <header>
        <img src="../images/SimboloCCP.png" alt="Italian Trulli">
        <div id="logout">
            <a href="index.blade.php">Logout</a>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="pag_ini.blade.php" >Página Inicial</a></li>
            <li><a href="dadospessoais.blade.php" >Dados Pessoais</a></li>
            <li><a href="dadoscurriculares.blade.php" class="selecionado">Dados Curriculares</a></li>
            <li><a href="horario.blade.php">Horário</a></li>
            <li><a href="pagamentos.blade.php">Pagamentos</a></li>
            <li><a href="competicoes.blade.php">Competições</a></li>
            <li><a href="avaliacoes.blade.php">Avaliações</a></li>
        </ul>
    </nav>

    <main>
	<body>
			<?php
				// Dados do aluno
				$idCurriculo = 12345;
				$modalidade = "Ensino Médio";
				$historico = "O aluno possui um excelente desempenho acadêmico, com média geral acima de 9.0 em todas as disciplinas.";

				// Exibir os dados do aluno
				echo "<h1>Dados Curriculares</h1>";
				echo "<p><strong>ID do Currículo:</strong> " . $idCurriculo . "</p>";
				echo "<p><strong>Modalidade:</strong> " . $modalidade . "</p>";
				echo "<p><strong>Histórico:</strong> " . $historico . "</p>";
			?>
		</body>
    </main>

    <footer>
        <p>&copy; 2023 - Todos os direitos reservados.</p>
    </footer>
    <script>
        $('nav ul li a').click(function() {
  $('nav ul li a').removeClass('active');
  $(this).addClass('active');
});
    </script>
</body>
</html>
