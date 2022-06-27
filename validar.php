<?php
$datos = array(
    'nombreUs' => $_POST['nomUs'],
    'contrasena' => $_POST['contrasena'],
    'email' => $_POST['email'],
    'email2' => $_POST['email2'],
    'nombre' => $_POST['nombre'],
    'apellidos' => $_POST['apellidos'],
    'curp' => $_POST['curp'],
    'cct' => $_POST['cct'],
    'alcaldia' => $_POST['alcaldia'],
    'country' => $_POST['country'],
    'perfil' => $_POST['perfil'],
    'aviso1' => $_POST['aviso1'],
    'aviso2' => $_POST['aviso2'],
    'aviso3' => $_POST['aviso3']
);
print_r($datos);
