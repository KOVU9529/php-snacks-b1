<!--## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.
-->
<?php 
$paragraph='Guarda il treno andar via dicendo che la mattina sei la vita mia.
Osserva il treno andar via dicendo che la mattina sei la vita mia.
Scruta il treno andar via dicendo che la mattina sei la vita mia.
Avvista il treno andar via dicendo che la mattina sei la vita mia.
Guardava il treno andar via dicendo che la mattina sei la vita mia.
Guardavano il treno andar via dicendo che la mattina sei la vita mia. ';
$paragraphArray= explode( "." , $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <!--Imposto il ciclo for-->
        <?php for($i = 0; $i < count($paragraphArray); $i++) { ?>
        <?php $oneParagraph = $paragraphArray[$i]; ?>
           <!--Imposto le condizioni-->
        <?php if(!empty($oneParagraph)) { ?>
            <p><?php echo $oneParagraph; ?></p>
        <?php } ?>
    <?php } ?>
    </div>
    
</body>
</html>