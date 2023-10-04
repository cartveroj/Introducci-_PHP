<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_PhP_Cartagena</title>
</head>
<body>
    <?php
        /* Ejercicio que muestra mesas con comensales, si la mesa esta vacia muestra por pantalla que esta vacia
        si tiene 5 comensales esta lleno, si tiene entre 2 a 4 pone otro mensaje*/
        $mesas = [];

       /*Segunda parte del ejercicio, es un array de dos dimensiones, esta previamente inicializada 
       con 10 pisos y cada piso tiene 10 habitaciones */
       $hotel = array();

    ?>
    <div class="primeraParte">
        <form action="" >
        <p>Primera parte</p>
            <?php for($i = 0 ; $i <10 ; $i++){?>
                <?php
                    $comensales = rand(0,5);
                    $mesas[$i]=$comensales;
                    if($mesas[$i] == 0){
                        $mensaje = "la mesa ".$i." esta vacia";
                    }else if($mesas[$i] == 5){
                        $mensaje = "la mesa ".$i." esta "." plena";
                    }else{
                        $mensaje = "la mesa ".$i." tiene: ".$mesas[$i]." comensales";
                    }
                ?>
                <ul>
                    <li><?php echo $mensaje?></li>
                </ul>
            <?php }?>
        </form>
    </div>
    <div class="ParteGrupal">
        <form action="">
            <p>Segunda parte</p>
                <?php for($fila = 0; $fila < 10; $fila++){?>
                    <?php for($col=0; $col< 10 ; $col++){?>
                        <?php
                            $comensales = rand(0,5);
                            $hotel[$fila][$col]=$comensales;
                            if($hotel[$fila][$col]== 0){
                                $text = "la habitacion ".$col." de la planta ".$fila." esta vacia";
                            }else if($hotel[$fila][$col] == 5){
                                $text = "la habitacion ".$col." de la planta ".$fila." esta llena";
                            }else{
                                $text = "la habitacion ".$col." de la planta ".$fila." tiene ".$hotel[$fila][$col]." comensales";
                            }
                        ?>
                        <ul>
                            <li><?php echo $text?></li>
                        </ul>
                    <?php }?>
                <?php }?>
        </form>
    </div>
</body>
</html>