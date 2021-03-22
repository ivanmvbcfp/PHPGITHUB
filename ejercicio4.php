<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
</head>
<body>
    <form action="ejercicio4.php" method="post">
		Numero Maximo: <input type="decimal" name="numero" size="10">
		<input type="submit" value="primos">
	</form>
    <?php
    
        $numero = $_POST['numero'];
        if($numero>=2){
            $c=0;
            for($i = 2; $i<=$numero; $i++){
                $divisor = 2;
                $bandera = 0;
                while($divisor<$i){
                    if(($i % $divisor)==0){
                        $bandera = 1;
                        break;
                        
                        
                    }
                    $divisor++;
                    
                    
                }
                if($bandera == 0){
                    $c++;
                    echo "Numero primo (",$c,")  :",$i,"<br>";
                }
            }
        }else{
            echo "Por definicion, un numero primo es un numero natural mayor que uno y solamente es divisible por la unidad y por si mismo";
        }
        
    
    ?>
</body>
</html>