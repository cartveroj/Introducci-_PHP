<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        Este archivo HTML muestra información personal de un individuo 
        utilizando PHP, en el formulario muestra información personal 
        de una persona en dos formatos: uno utilizando un array asociativo 
        y otro usando un bucle foreach. 
        */
        $dataNac = new DateTime("1994-01-13");
        $person = ["nomAlumne"=>"Veronica",
        "cognomsAlumne" => "Cartagena",
        "edat"=>"29", 
        "dataNaixement"=>$dataNac, 
        "telefon"=>"6565696688",
        "adreca"=>"carrer Campins",
        "email"=>"cartagena@gmail.com",
        "treballa"=>"Si",
        "alcada" => "157"];

        $personToFor = ["nomAlumne"=>"Veronica",
        "cognomsAlumne" => "Cartagena",
        "edat"=>"29", 
        "dataNaixement"=>"13-01-1994", 
        "telefon"=>"6565696688",
        "adreca"=>"carrer Campins",
        "email"=>"cartagena@gmail.com",
        "treballa"=>"Si",
        "alcada" => "157"];
    ?>
    <form>
        <div>
            <h1>Describiendo a: <?php 
            echo $person['nomAlumne']." ".$person['cognomsAlumne']
            ?>
            </h1>
        </div>
        <div>
            <h2>Les dades de <?php echo $person['nomAlumne']?> son:</h2>
        </div>  
        <ul>
            <li>Es diu <?php echo $person['nomAlumne'] ?></li>
            <li>Te <?php echo $person['edat'] ?> </li>
            <li>Va neixer l'any: <b><?php echo $person['dataNaixement']->format('d-m-y')?></b></li>
            <li>El seu telèfon és: <?php echo $person['telefon']?></li>
            <li>Viu a: <?php echo $person['adreca']?></li>
            <li>El seu email és:<?php echo $person['email']?></li>
            <li>Treballa: <?php echo $person['treballa']?></li>
            <li>I medeix <?php echo $person['alcada']?></li>
        </ul>
    </form>
    <!---Opcion con for--->
    <form>
        <div>   
            <b><p>Solución con bucle for</p></b>
            <?php foreach($personToFor as $key => $value){?>
                <ul>
                    <li><?php echo $key." = ".$value?></li>
                </ul>
            <?php }?>
        </div>
    </form>
</body>
</html>