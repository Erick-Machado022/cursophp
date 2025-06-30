<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = 'Erick';
        $sobrenome = "Machado";
        const ESTADO = 'RS';   
        echo "Olá! eu me chamo $nome $sobrenome e moro no " .ESTADO . "<br>";

        #aprendendo a sequencia de escape: 
        # \n -> nova linha
        # \t -> Tabulação horizontal
        # \\ -> exibir barra invertida "\"
        # \$ -> mostrar sifrão "$"
        # \u{} -> Codepoint Unicode
        # \"\" -> coloca aspas duplas

        $nom = "Rodrigo";
        $sobrenom = "Nogueira";
        echo "E meu lutador favorito é o $nom \"Minotauro\" $sobrenom"
    ?>
</body>
</html>