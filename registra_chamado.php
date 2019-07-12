<?php 
	
	session_start();	

	// Estamos trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);	
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);	

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	// Abrindo o arquivo
	$arquivo = fopen('arquivo.hd', 'a');
	// Escrevendo o texto
	fwrite($arquivo, $texto);
	// Fechando o arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');

?>