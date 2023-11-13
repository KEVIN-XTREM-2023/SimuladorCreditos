<?php

include '../conexion.php'; 
$nombre = $_POST['nom_adm'];
$apellido = $_POST['ape_adm'];
$direccion = $_POST['dir_adm'];
$telefono = $_POST['tel_adm'];
$email = $_POST['email_adm'];
$contrasenia = $_POST['cont_adm'];
$id = $_POST['id_adm'];

$myArray=[];
$sql = "UPDATE administrador SET nom_adm='$nombre', ape_adm ='$apellido', dir_adm ='$direccion', tel_adm='$telefono',
 email_adm='$email' , cont_adm='$contrasenia' WHERE id_adm='$id'";



try {
    if($mysqli->multi_query($sql) === TRUE){
          echo json_encode(array('ok' => true, 'mensaje' => "Actualizacion Correcto")) ;
  
      }else{
        echo json_encode(array('ok'=> false, 'errorMsg' => "Los datos son incorrectos")) ;
        
      }
  } catch (\Throwable $th) {
    
    echo json_encode("Error") ;
  }

$mysqli->close();



?>