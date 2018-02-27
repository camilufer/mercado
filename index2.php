<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>APP E-Commerce</title>
</head>
<body>
<?php
    //Mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
 
    //Hola mundo
    echo "Bienvenido a mi APP E-Commerce<hr>";

 
    //Datos iniciales
    $MP_SHORT_NAME = "mp-app-303963951";
    $MP_CLIENT_ID = "3161981920499652";
    $MP_CLIENT_SECRET = "BZd641UsIgZmfZ1iCJqdrvCWD3s5b5qs";
 
    echo "El codigo SHORT_NAME es: ".$MP_SHORT_NAME."<br>";
    echo "El codigo CLIENT_ID es: ".$MP_CLIENT_ID."<br>";
    echo "El codigo CLIENT_SECRET es: ".$MP_CLIENT_SECRET."<br>";
 
    //Obtener token de acceso
    require_once ('lib/mercadopago.php');
 
    $mp = new MP ($MP_CLIENT_ID, $MP_CLIENT_SECRET);
    $access_token = $mp->get_access_token();
   
    echo "El codigo ACCESS_TOKEN es: ".$access_token."<br>";
    
?>
</body>
</html>
