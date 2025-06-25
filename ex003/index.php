<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal, 0b = binário, 0 = Octal
    // $num = 0x1a;
    // echo "O valor da variavel é $num"

    // $v = 300;
    // var_dump($v); #Verifica qual o tipo primitivo da variavel

    // $num = 3e2;
    // echo "O valor é $num";

    #Para uma variavel booleana, se for igual a false retorna algo vazio/null se for igual a true retorna 1 ou true
    $solteiro = true;
    var_dump($solteiro);
    echo "Essa pessoa é solteira? [$solteiro] (considere 1 para sim ou vazio para não)"
    ?>
</body>
</html>