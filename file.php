<?php 

$mysqli = new mysqli("localhost", "root", "", "ejercicio28");

 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
	 /**INSERTAR AQUÍ**/
	
	if (isset($_POST["email"], $_POST["pass"], $_POST["annio"]) and $_POST["email"] !="" and $_POST["pass"]!="" and $_POST["annio"]!="" ) {
			$val  = $_POST['email'];
			$val2 = $_POST['pass'];
			$val3 = $_POST['annio'];
			
			$sentencia = $mysqli->prepare("INSERT INTO usuario (email,contraseña,a_nacimiento) VALUES (?,?,?)");
			$sentencia->bind_param("ssi",$val,$val2,$val3);
			$sentencia->execute();
			$sentencia->close();
		
		}
	
	}
	
$mysqli->close();

?>
