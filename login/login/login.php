<?php
$user = "admin@email.com";
$pass = "teste";

$ususarios = [

	"admin@email.com" => "teste",
	"teste@emai.com" => "1234",
	"fe@email.com" => "5678"
];

	

if (isset($_POST['logar'])) {
	$email = filter_input(INPUT_POST, 'email',
		FILTER_VALIDATE_EMAIL) ;
	$senha = filter_input(INPUT_POST,'senha', 
			FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		/*if ($email == $user and $senha == $pass){*/
		if ( array_key_exists( $email, $ususarios) ) {
			if ($ususarios[$email] == $senha) {
				//inicia a sessao

			session_start();
			$_SESSION['email'] = $email; 
			$_SESSION['ativa'] = true;
			header("location: adm.php");
		}else{
			echo " senha esta incorreta!";
		}
	}else{
		echo "e-mail incorreto!";
	}

}









// session_start();

// $_SESSION['email'] = "admin@email.com";
// $_SESSION['ativa'] = True;

// echo"<a href='adm.php'> Acessar area administrativa </a>";