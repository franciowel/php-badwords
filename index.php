<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords!</title>
</head>

<body>
    <?php
        // parola scelta da utente
        $badword = $_GET["viva"];
        // il mio paragrafo
        $paragraph = "La vispa Teresa avea tra l'erbetta, a volo sorpresa gentil farfalletta. 
            E tutta giuliva stringendola viva gridava a distesaLa vispa Teresa avea tra l'erbetta,
            a volo sorpresa gentil farfalletta. E tutta giuliva stringendola viva gridava a distesa";
        // nuovo testo con parola censurata, scelta da utente
        $modifiedparagraph = str_replace($badword,"***",$paragraph); 
    ?>

    <p><?php echo $paragraph ?></p>
    <h3>questo testo ha <?php echo strlen($paragraph) ?> caratteri</h3>
    <p><?php echo $modifiedparagraph ?></p>
    <h3>il testo ritoccato ha <?php echo strlen($modifiedparagraph) ?> caratteri</h3> 
</body>

</html>