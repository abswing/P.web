<?php
//limpa os caches da sessao
session_start();

//ecerra a sessao
session_unset();



session_destroy();

echo"Deslogado com sucesso!!";
header ( "location: index.php" ) ;