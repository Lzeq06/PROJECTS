<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Principal - Exercícios PHP</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: Arial, Helvetica, sans-serif;
			background-color: #f4f7fb;
			color: #2c3e50;
			line-height: 1.6;
			padding: 40px 20px;
			min-height: 100vh;
		}

		.container {
			max-width: 620px;
			margin: 0 auto;
			background: white;
			padding: 40px 35px;
			border-radius: 10px;
			box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
		}

		h1 {
			color: #1e3a5f;
			text-align: center;
			margin-bottom: 35px;
			font-size: 2.1rem;
			position: relative;
		}

		h1::after {
			content: '';
			width: 90px;
			height: 4px;
			background-color: #3498db;
			position: absolute;
			bottom: -12px;
			left: 50%;
			transform: translateX(-50%);
			border-radius: 2px;
		}

		p.intro {
			text-align: center;
			color: #555;
			margin-bottom: 30px;
			font-size: 1.1rem;
		}

		.menu {
			list-style: none;
		}

		.menu li {
			margin-bottom: 16px;
		}

		.menu a {
			display: block;
			background: #3498db;
			color: white;
			padding: 16px 24px;
			text-decoration: none;
			border-radius: 8px;
			font-size: 1.15rem;
			font-weight: 500;
			text-align: center;
			transition: all 0.25s ease;
		}

		.menu a:hover {
			background: #2980b9;
			transform: translateY(-2px);
			box-shadow: 0 6px 15px rgba(52, 152, 219, 0.3);
		}

		.footer {
			text-align: center;
			margin-top: 50px;
			color: #7f8c8d;
			font-size: 0.95rem;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Menu Principal</h1>

		<p class="intro">Escolha o exercício que deseja executar:</p>

		<ul class="menu">
			<li><a href="01_operacoes_basicas/index.php">Exercício 1 - Operações Básicas</a></li>
			<li><a href="02_antecessor_sucessor/index.php">Exercício 2 - Antecessor e Sucessor</a></li>
			<li><a href="03_area_perimetro_quadrado/index.php">Exercício 3 - Área e Perímetro do Quadrado</a></li>
			<li><a href="04_area_triangulo/index.php">Exercício 4 - Área do Triângulo</a></li>
			<li><a href="05_par_impar/index.php">Exercício 5 - Par ou Ímpar</a></li>
			<li><a href="06_maior_menor/index.php">Exercício 6 - Maior e Menor</a></li>
			<li><a href="07_media_aluno/index.php">Exercício 7 - Média do Aluno</a></li>
			<li><a href="08_folha_pagamento/index.php">Exercício 8 - Folha de Pagamento</a></li>
		</ul>

		<div class="footer">
			Exercícios PHP Básicos - 2025
		</div>
	</div>
</body>

</html>