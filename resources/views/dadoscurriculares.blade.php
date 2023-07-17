@extends('layouts.app')

@section('menu')
    @parent
@endsection

@section('conteudo')
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

@endsection
</body>
</html>
