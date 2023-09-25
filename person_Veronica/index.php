
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction_Php</title>
</head>
    <body>
    <?php
    /*
    This document contains the logic of PHP, that shows all the 
    data about a person, in the first part there are the declarations
    of the variables and their inicialitazion, and, the second part has 
    the insertion of diferents elements of html with the variables of PHP.
    */
    $nomAlumna="Veronica";
    $cognomsAlumne="Cartagena";
    $edat="29";
    $dataDeNaixement= new DateTime("1994/01/13");
    $telèfon="656569668";
    $adreçaPostal="carrer campins, 13";
    $adreçaElectrònica="cartagenaveronica.19@gmail.com";
    $treballa="Si";
    $alcada="157";
    ?>
        <form action="accion.php" method="post">
            <div>
                <h1> Descripcion  <?php echo $nomAlumna." ".$cognomsAlumne ?> </h1>
            </div>
            <div>
                <h2> Les dades de <?php echo $nomAlumna ?> son:</h2>
            </div>
            <div>
                <ul>
                    <li>Es diu <?php echo $nomAlumna ?></li>
                    <li>Te <?php echo $edat ?> </li>
                    <li>Va neixer l'any: <b><?php echo $dataDeNaixement->format('d-m-y')?></b></li>
                    <li>El seu telèfon és: <?php echo $telèfon?></li>
                    <li>Viu a: <?php echo $adreçaPostal?></li>
                    <li>El seu email és:<?php echo $adreçaElectrònica?></li>
                    <li>Treballa: <?php echo $treballa?></li>
                    <li>I medeix <?php echo $alcada?></li>
                </ul>
            </div>
        </form>
    </body>
</html>