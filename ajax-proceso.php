
<?php
    //Mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
 
    //Datos iniciales
    $MP_SHORT_NAME = "mp-app-303963951";
    $MP_CLIENT_ID = "3161981920499652";
    $MP_CLIENT_SECRET = "BZd641UsIgZmfZ1iCJqdrvCWD3s5b5qs";
 
    //Obtener token de acceso
    require_once('lib/mercadopago.php');
 
    $mp = new MP ($MP_CLIENT_ID, $MP_CLIENT_SECRET);
    $access_token = $mp->get_access_token();
 
    //Cargar preferencias del producto
    $preference_data = array(
        "items" => array(
            array(
                "title" => $_POST['enviar_titulo'], //Obtiene dato desde ajax
                "quantity" => intval($_POST['enviar_cantidad']), //Obtiene dato desde ajax, convertir a entero con intval() o decimal con floatbal()
                "currency_id" => "CLP", // Available currencies at: https://api.mercadopago.com/currencies
                "unit_price" => intval($_POST['enviar_valor']) //Obtiene dato desde ajax, convertir a entero con intval() o decimal con floatbal()
            )
        )
    );
 
    $preference = $mp->create_preference($preference_data);
 
    //Muestra boton linkeado
    echo '<a class="btn btn-success" href="'.$preference['response']['sandbox_init_point'].'" target="_blank">Pagar</a>';
?>