<?php
$a = "";
$b = "";

if($a>0){
    $x = $b/$a;
    echo $x;
    
}elseif($a == 0){
    echo "indefinido";
    
}else{
    echo "infinito";
}

?>

<form action="ejercicio2.php" method="POST">
    		Numero 1? <input type="text" size="10" value="<?php echo $a; ?>" />
    		Numero 2? <input type="text" size="10" value="<?php echo $b; ?>" />
    		Resultado: <input type="text" name="txtR" size="10" value="<?php echo $suma; ?>" disabled/>
    		Mensaje: <input type="text" name="txtR" size="15" value="<?php echo $mensaje; ?>" disabled/>
    		<input type="submit" value="Sumar" name="subSumar" /> 
		</form>