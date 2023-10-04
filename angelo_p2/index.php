<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica2</title>
</head>
<body>
    <div>
            <?php
                $mesa=[];// inicializacion del array
            ?>
            <form action="">
                <?php for($a=0; $a<10;$a++){/*bucle para el recorrido de las mesas*/?> 
                        
                        <?php 
                        $comensal= rand(0,5);//se le asigna al random de cuanos numeros debe dar aleatorio
                        $mesa[$a]= $comensal;
                        if($mesa[$a]==5){//condicion para cuando el rand de exactamente 5
                            $mensaje = "La taula ".$a." plena";//prints
                            
                        }else if($mesa[$a]==0){//condicion para cuando el rand de exactamente 0
                            $mensaje= "La taula ".$a." es buida";//prints
                            
                        } else{
                            $mensaje= "La taula ".$a." te ".$mesa[$a]." comensals "; //dar este mensaje para cuaando ninguna de las dos condiciones anteriores se cumplan
                            
                        }?>
                        <ul>
                            <li><?php echo $mensaje?></li>
                        </ul>
                    <?php }?>  
            </form>
    </div>

    </br>
    <div>
        <form id="parte_grupal"action="">
        
                <?php 
                //segunda parte de la practica comieza aqui

                for($i = 0 ; $i < 10 ; $i++){//bucle para los pisos?>
                    <?php for($j = 0 ; $j < 10 ; $j++){//bucle para las habitaciones dentro de los diferentes pisos?>
                    <?php 
                            $comensales = rand(0,5);// se especifica al random de que numero a que numero queremos que haga la asignacion aleatoria
                            $rooms[$i][$j]= $comensales;//se le asigana lo aleatorio al array rooms
                            if($rooms[$i][$j] == 0){//condicion para cuando el rand sea 0
                                $mensajeHotel = "La habitacio ".$j." de la planta ".$i." es buida";//imprime de esta manera cuando las habitacion cumplen con esta condicion
                            }else if($rooms[$i][$j] == 5){//condicion para cuando el aleatorio se 5 exacto
                                $mensajeHotel = "La habitacio ".$j." de la planta ".$i." es plena";//imprime este texto cuando la condicion se hace valida
                            }else{//esto quiere decir que si no es ni 0 ni 5 pues que ponga lo que corresponde con el print que especifica cunatos tiene asignados
                                $mensajeHotel = "La habitacio ".$j." de la planta ".$i." te ".$rooms[$i][$j]." comensals";
                            }
                        ?>
                    <ul>
                        <li><?php echo $mensajeHotel ?></li>
                    </ul>
                    <?php }?>
                <?php }?>
        </form>
    </div>
</body>
</html>







































