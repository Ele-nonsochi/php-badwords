<?php
//testo che devo inserire
$text = "Come fai a raccogliere le fila di una vecchia vita? Come fai ad andare avanti quando 
         nel tuo cuore cominci a capire che non si torna 
         indietro? Ci sono cose che il tempo non può accomodare, ferite talmente profonde 
         che lasciano un segno.";

//Inserisco la parola nell'url ? badword = scelgo la parola
$wordUrl = $_GET["badword"];

//lunghezza e modifico la parola con *
$newText = str_replace($wordUrl, "***",$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWord</title>
</head>
<body>
    <h2><?php echo $text?></h2>
    <p>The sentence is long: <?php echo strlen($text) ?></p>
    <p>Bad Word : <?php echo $wordUrl ?></p>
    <h2>New: <?php echo $newText ?> </h2>
    <p>New lenght :<?php echo strlen($newText) ?></p>
</body>
</html>