<?php

//Parseamos el archivo .ini y recogemos los datos necesarios
//para conectarnos a la base de datos
session_start();
$ini_array = parse_ini_file("conexion.ini");
$ip = $ini_array['ip'];
$port = $ini_array['port'];
$usuario = $ini_array['usuario'];
$pass = $ini_array['pass'];
$db = $ini_array['database'];

//Nos aseguramos de que la conexión funcione y capturamos la excepción en caso contrario.

try{
$con=mysqli_connect($ip.':'.$port,$usuario, $pass, $db);
} catch(\Exception $e) {

printf("Error al conectar a la base de datos, por favor, compruebe el siguiente error:");
echo '<br>';
print_r($e->getmessage());
die();

}

//Ponemos un try para capturar la posible excepción en caso de que ocurra cualquier error
//Dentro de este try, capturamos la señal $_POST e insertamos los datos del registro
//en la base de datos.

try{
if($_SERVER['REQUEST_METHOD'] == "POST"){

$idquery = ($_POST["id"]);
$passquery = sha1($_POST["pass"]);

$consulta= "INSERT INTO usuarios VALUES ('$idquery', '$passquery')";
$con->query($consulta);

$_SESSION['registrao']=true;
header("Location:index.php");

} } catch (\Exception $q) {

	print_r($q->getmessage());

};

?>
