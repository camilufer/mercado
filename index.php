<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>e-Commerce</title>
  <link href="https://fonts.googleapis.com/css?family=Sofadi+One" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
   
<div class="container">
    <!--Contenido general -->
   
    <section class="container-fluid">
    <div class="row shipping">
        <div class="col-xs-2 dropdown hidden-sm hidden-md hidden-lg">
 
            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                <i class="fas fa-bars"></i><span></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Perfil</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Decoracion</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Deportes</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Accesorios</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Juegos</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Example</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
            </ul>
        </div>
        <div class="col-xs-10 col-md-6">
            <a href="#"><p class="p-shipping">FREE SHIPPING on orders above</p></a>
        </div>
        <div class="col-md-6 hidden-xs">
            <ul class="registry">
                <li class="optionMenu"><a class="menu-desktop" href="#">Registry</a></li>
                <li class="optionMenu"><a class="menu-desktop" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li class="optionMenu"><a class="menu-desktop" href="#">Login</a></li>
            </ul>
        </div>
 
       
    </div>
 
    <div class="row">
      <div class="logo col-md-12 col-lg-12">
        
     </div>
    </div>
 
   
    <div class="row">
        <div class="col-xs-12">
            <div class="contenedor">
              <p class="amount"></p>
              <p class="balance"></p>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12">
            <section id="vanilla">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10">
                  <div id="custom-search-input">
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control input-lg" placeholder="Buscar" />
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-lg" type="button">
                            <i class="fas fa-search"></i>
                          </button>
                        </span>
                    </div>
                  </div>
                </div>
            </section>
 
            <section id="categories" class="row hidden-xs hidden-sm">
                 <div class=" text-center">
                   <ul id="categories" class="examples col-lg-12 col-md-12">
                     <li class="text-center option text-uppercase"><a class="option-desktop" href="">decoracion</a></li>
                     <li class="text-center option text-uppercase"><a class="option-desktop" href="">deportes</a></li>
                     <li class="text-center option text-uppercase"><a class="option-desktop" href="">accesorios</a></li>
                     <li class="text-center option text-uppercase"><a class="option-desktop" href="">juegos</a></li>
                     <li class="text-center option text-uppercase"><a class="option-desktop" href="">example</a></li>
                   </ul>
                 </div>
            </section>
        </div>
    </div>
 
    <div class="panel panel-primary margin-t-15">
        <div class="panel-heading">
            <h3 class="panel-title">Productos</h3>
        </div>
        <div class="panel-body" id="productos-generales">
 
            <!-- ************** ESTOS SE PUEDEN TRAER AUTOMATICAMENTE DESDE OTRA PARTE ************** -->
        
        <!-- ITEM 
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail contenedor-producto" id="producto-1">
            <img alt="thumbnail" class="img-responsive" src="https://i.imgur.com/1ApOadB.jpg">
            <div class="caption">
              <h3 data-titulo="Ricas empanadas">Ricas empanadas</h3>
              <p>Categoria: <b>(comida)</b></p>
              <p>Muy deliciosas</p>
              <p>1 por $100</p>
              <p>Cantidad: 
                <select autocomplete="off">
                  <option value="00.00" data-cantidad="0" selected="selected">Seleccione</option>
                  <option value="100.00" data-cantidad="1">1</option>
                  <option value="90.00" data-cantidad="5">5</option>
                  <option value="60.00" data-cantidad="10">10</option>
                </select>
              </p>
              <p class="boton-destino"></p>
            </div>
          </div>
        </div>
         ITEM -->
        
        
        <!-- ************** ESTOS SE PUEDEN TRAER AUTOMATICAMENTE DESDE OTRA PARTE ************** -->
 
        </div>
    </div>
 
    <!--Contenido general -->
</div>
 
 
 
 
<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 

<script type="text/javascript" src="assets/js/route.js"></script>
<script type="text/javascript" src="assets/js/router.js"></script>
 
<script>
$(document).ready(function(){

/* ================================================= DOCUMENT READY ================================================= */
  
  //Leer data json
  var request = new XMLHttpRequest();
  request.open("GET", "assets/js/data.json", true);
  request.send(null);
  request.onreadystatechange = function() {
  if ( request.readyState === 4 && request.status === 200 ) {
      var JSON_object = JSON.parse(request.responseText);
      //console.log(my_JSON_object);

      for(var itemA in JSON_object) { //Recorrer categorias
        //console.log(itemA, JSON_object[itemA]);
        
        
        for(var itemB in JSON_object[itemA]){ //Recorrer items
          //console.log(itemA, JSON_object[itemA][itemB]);
          
          var productoCAT = itemA;
          var productoID = JSON_object[itemA][itemB].id;
          var productoNAME = JSON_object[itemA][itemB].name;
          var productoDESC = JSON_object[itemA][itemB].description;
          var productoIMG = JSON_object[itemA][itemB].img;
          var productoPRICE = JSON_object[itemA][itemB].price
          var productoPRICE2 = JSON_object[itemA][itemB].price.replace(/[\. $]+/g, ""); //expresion regulara para borrar signo peso, espacio y guion
          
          var estructura = '<!-- ITEM -->'+
                   '  <div class="col-sm-6 col-md-4">'+
                   '    <div class="thumbnail contenedor-producto" id="'+productoID+'">'+
                   '      <img alt="thumbnail" class="img-responsive" src="'+productoIMG+'">'+
                   '      <div class="caption">'+
                   '        <h3 data-titulo="'+productoNAME+'">'+productoNAME+'</h3>'+
                   '        <p>Categoria: <b>('+productoCAT+')</b></p>'+
                   '        <p>'+productoDESC+'</p>'+
                   '        <p>1 por '+productoPRICE+'</p>'+
                   '        <p>Cantidad: '+
                   '          <select autocomplete="off">'+
                   '            <option value="0" data-cantidad="0" selected="selected">Seleccione</option>'+
                   '            <option value="'+productoPRICE2+'.00" data-cantidad="1">1</option>'+
                   '          </select>'+
                   '        </p>'+
                   '        <p class="boton-destino"></p>'+
                   '      </div>'+
                   '    </div>'+
                   '  </div>'+
                   '<!-- ITEM -->';
          
          //Poner elementos en el contenedor general
          $("#productos-generales").append(estructura);
        }
      }
    }
  }

  
  //Detectar cambios en los selects
  $(document).on("change",".contenedor-producto select", function() {
  
    //Obtener el id del contenedor principal
    var elementoPadre = $(this).parent().parent().parent().attr("id");
    //Cargar la funcion para enviar la data
    pagarItem(elementoPadre);
    
  });
  
/* ================================================= DOCUMENT READY ================================================= */

});

//Funcion para enviar la data
function pagarItem(elemento)
{
  //Elemento desde el ID
  var elementoProducto = $("#"+elemento);
  //Datos encontrados
  var obtener_titulo = elementoProducto.find("h3").data("titulo");
  var obtener_cantidad = elementoProducto.find("option:selected").data("cantidad");
  var obtener_valor = elementoProducto.find("option:selected").attr("value");
  
  //Mostrar datos de prueba
  console.log("- Titulo: "+obtener_titulo+" - Cantidad: "+obtener_cantidad+" - Valor: "+obtener_valor);
  
  //Checkear vacio
  if(obtener_cantidad=="0")
  {
    alert("Seleccione cantidad!");
    //Borrar html
    elementoProducto.find(".boton-destino").html('');
    return;
  }
  else
  {
    //Enviar post a php
    console.log("Cargando!");
    
    //Definir data segun valores encontrados
    var jsonData = {
      'enviar_titulo': obtener_titulo, 
      'enviar_cantidad': obtener_cantidad, 
      'enviar_valor':obtener_valor
    };  
    
    //Cargar ajax
    $.ajax({
      url: 'ajax-proceso.php',
      method: "POST",        
      data: jsonData,
      cache: false,
      beforeSend: function(){ 
        console.log("Cargando...");
        //Mostrar icono cargando
        elementoProducto.find(".boton-destino").html('<img src="https://loading.io/assets/img/default-loader.gif">');
      },
      success: function(data){
        console.log("Listo!");
        //Mostrar boton generado
        elementoProducto.find(".boton-destino").html(data);
      },
      error: function(errMsg){
        console.log("Error!");
        //Mostrar boton inhabilitado
        elementoProducto.find(".boton-destino").html('<a class="btn btn-default">Pagar</a>');
      }
    });
  }
}
</script>
       
</body>
</html>