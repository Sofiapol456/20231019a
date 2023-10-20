<?php
// sw nombra la funcion
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
//cerrar la conexion
$conexion -> close();
//retorna la operacion
return $salida;
}

<?php
//se nombra la funcion
function area(){
// inicializa la variable
$salida = 0; 
// se conecta con la base de datos
$conexion = mysqli_connect('localhost', 'root', 'root', 'calculo');
// se acomoda los numeros 
$sql = "select 2 + 1";
//hace la suma
$sql .= " as suma";
// muestra la base
$r = $conexion -> query($sql);
//recorre el recordset
while($fila = mysqli_fetch_assoc($r))
{
// incrementa o aculula
$salida += $fila['suma'];  
}
//cerrar la conexion
$conexion -> close();
//retorna la operacion
return $salida;
}

<?php
function conteo(){
// inicializa la variable
$salida = 0; 
// se conecta con la base de datos
$conexion = mysqli_connect('localhost', 'root', 'root', 'db_iniciar_sesion_45');
// se acomoda los numeros 
$sql = "select count(*) from db_iniciar_sesion_45;";
// ejecuta la consulta
$r = $conexion -> query($sql);
//recorre el recordset
while($fila = mysqli_fetch_assoc($r))
{
// incrementa o aculula
$salida = $fila ['count(*)'];  
}
//cerrado de la conexion
mysqli_close($conexion);
//retorna la operacion
return $salida;
}


<?php
function insertar_personas(){
// inicializa la variable
$salida = 0; 
// se conecta con la base de datos
$conexion = mysqli_connect('localhost', 'root', 'root', 'db_iniciar_sesion_45');
// se acomoda los numeros 
$sql = " insert into db_iniciar_sesion_45 (dni_usuario, nombre_de_usuario)";
$sql .= " values ('3', 'clara')";
// ejecuta la consulta
$r = $conexion -> query($sql);
//recorre el recordset
$salida=mysqli_affected_rows($conexion);
//cerrado de la conexion
mysqli_close($conexion);
//retorna la operacion
return $salida;
}

<?php
function borrar_personas($id){
// inicializa la variable
$salida = 0; 
// se conecta con la base de datos
$conexion = mysqli_connect('localhost', 'root', 'root', 'db_iniciar_sesion_45');
// se acomoda los numeros 
$sql = "delete from db_iniciar_sesion_45 where dni_usuario=$id;";
// ejecuta la consulta
$r = $conexion -> query($sql);
//recorre el recordset
$salida=mysqli_affected_rows($conexion);
//cerrado de la conexion
mysqli_close($conexion);
//retorna la operacion
return $salida;
}

<?php
function actualizar($id){
// inicializa la variable
$salida = 0; 
// se conecta con la base de datos
$conexion = mysqli_connect('localhost', 'root', 'root', 'db_iniciar_sesion_45');
// se acomoda los numeros 
$sql = "update db_iniciar_sesion_45 set sitio = 'sofia' where dni_usuario = '1';";
// ejecuta la consulta
$r = $conexion -> query($sql);
//recorre el recordset
$salida=mysqli_affected_rows($conexion);
//cerrado de la conexion
mysqli_close($conexion);
//retorna la operacion
return $salida;
}
