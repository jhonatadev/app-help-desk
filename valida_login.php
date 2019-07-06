<?php 
	
	session_start();

	//Variavel que verifica se a autenticação foi realiza
	$usuarios_autenticado = false;

	//Usuario do sistema
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd')
	);

	foreach($usuarios_app as $user){

		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuarios_autenticado = true;
		}
	}

	if ($usuarios_autenticado) {
		echo "User autenticado";
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	} else{
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: index.php?login=erro');
	}

 ?>