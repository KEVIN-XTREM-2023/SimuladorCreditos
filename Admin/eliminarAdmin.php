<?php

include '../conexion.php';

$id = $_POST['id_adm'];
$sql = "DELETE FROM administrador WHERE id_adm ='$id'";
try {
    if ($mysqli->query($sql) === TRUE) {
        echo json_encode(array('ok' => true, 'mensaje' => "Eliminacion correcta"));
    } else {
        echo json_encode(array('ok' => false, 'errorMsg' => "No se pudo eliminar el registro"));
    }
} catch (\Throwable $th) {
    echo json_encode(array('ok' => false, 'errorMsg' => "Error"));
}

$mysqli->close();

?>
