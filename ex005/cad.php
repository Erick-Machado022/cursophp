<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
    
</head>
<body>
    <header>
        <h1>Resultado do processamento </h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome"; #Alterar quando avançar no curso
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; #Alterar quando avançar no curso
            echo "<p> Olá $nome $sobrenome, este é meu primeiro teste com PHP </p>"
        ?>
    </main>
</body>
</html>