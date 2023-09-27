<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dataNac = new DateTime("1994-01-13");
        $person = ["nombre"=>"Veronica",
        "apellido" => "Cartagena",
        "edad"=>"29", 
        "fechaNacimiento"=>$dataNac, 
        "telefono"=>"6565696688",
        "direccion"=>"carrer Campins",
        "email"=>"cartagena@gmail.com",
        "Trabaja"=>"Si",
        "medida" => "157"];
        $arrayDos = array("name"=> "Laura");
        // foreach( $person as $clave => $valor){
            
        //     echo "{$clave} => {$valor}";
        // }
    ?>
    <form>
        <div>
            <h1>Describiendo a: <?php echo $person['nombre']." ".$person['apellido']?></h1>
        </div>
        <div>
            <h2>Les dades de <?php echo $person['nombre']?> son:</h2>
        </div>  
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </form>
</body>
</html>