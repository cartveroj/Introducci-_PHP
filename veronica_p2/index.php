<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Ejercicio que muestra mesas con comensales, si la mesa esta vacia muestra por pantalla que esta vacia
        si tiene 5 comensales esta lleno, si tiene entre 2 a 4 pone otro mensaje*/
        $mesas = [];

        /*Segunda parte del ejercicio, enseña por pantalla los pisos y las habitaciones con los comensales */
        $pisos = [];
        $habitaciones = [];

    ?>
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

    <form action="">
            <p>Segunda parte</p>
            <?php for($a = 0 ; $a < 10 ; $a ++){?>
                <?php for($b = 0 ; $b < 10 ; $b ++){?>
                   <?php 
                        $comensales = rand(0,5);
                        $habitaciones[$b]= $comensales;
                        if($habitaciones[$b] == 0){
                            $mensajeDos = "la habitacion ".$b." de la planta ".$a." esta vacia";
                        }else if($habitaciones[$b] == 5){
                            $mensajeDos = "la habitacion ".$b." de la planta ".$a." esta llena";
                        }else{
                            $mensajeDos = "la habitacion ".$b." de la planta ".$a." tiene ".$habitaciones[$b]." comensales";
                        }
                    ?>
                 <ul>
                    <li><?php echo $mensajeDos ?></li>
                </ul>
                <?php }?>
            <?php }?>
    </form>
</body>
</html>