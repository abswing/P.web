<html><html>
<head>
    <title>PHP Test</title>
</head>

<body>
    <form method="post" action="">
    <label>Curso que procura:</label>
    <input type="text" name="curso" required>

    <input type="submit" name="procurar">		
    </form>

    <?php 

    // Crie um arquivo que contenha: 
    // Formulário HTML para o usuário digitar uma busca.
    // Lógica para mostrar se foi encontrado o valor procurado em                   formulario.php
    // Crie um array com os seguintes valores: [ PHP, HTML, CSS,                     JavaScript, Jquery, Python, SQL, Bootstrap, Java, C++, Fluter ]
    // Se o usuário encontrar um valor acima, mostre a seguinte mensagem           "Temos o curso para a sua busca $valorda busca"
    // Se não encontrar mostre uma mensagem avisando o usuário.

    // Array de cursos
    $cursos = [ "PHP", "HTML", "CSS", "JavaScript", "Jquery", "Python", "SQL", "Bootstrap", "Java", "C++", "Fluter" ];

    // Verifica se o formulário foi enviado com o método POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtém o valor digitado no campo do formulário
        $busca = trim($_POST['curso']);

        // Verifica se o valor buscado está no array de cursos
        if (in_array($busca, $cursos)) {
            echo "Temos o curso para a sua busca: {$busca}";
        } else {
            echo "Não temos o curso para a sua busca: {$busca}";
        }
    }
    ?> 

</body>
</html>
