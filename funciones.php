<?php

function area(){

// inicializa la variable
$salida = 0; 

// se conecta con la base de datos
$conexion = mysqli_connect('localhost', 'root', 'root', 'calculo');

// se acomoda los numeros 
$sql = "select 10 as n1,";

//hace la suma
$sql .= "20 as n2";

// muestra la base
$r = $conexion -> query($sql);

//recorre el recordset
while($fila = mysqli_fetch_assoc($r))
{

// incrementa o aculula
$salida = $fila['n1'] + $fila['n2'];  

}

$conexion -> close();

//retorna la operacion
return $salida;

}
