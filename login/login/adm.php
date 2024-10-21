<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>area administrativa</title>

</head>
<body>
<?php if (isset($_SESSION['ativa'])){  ?>

	<h1> Bem vindo area administrativa do site!</h1>
	<h3>Ola usuario, <?php echo $_SESSION['email']; ?></h3>
	<p>Conteudo restrito do site...</p>

	<a href="logout.php"> Sair (deslogar) </a>

<?php } ?>
	</body>
</html>