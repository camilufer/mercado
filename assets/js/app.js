
// token APP_USR-3161981920499652-022320-6d85934c69559962fc923ac3b7b68ae0__M_H__-303963951
//https://api.mercadopago.com/users/303963951/mercadopago_account/balance?access_token=APP_USR-3161981920499652-022413-3c7732b20924fa208626ce5df1fb1841__LA_LC__-303963951

// https://api.mercadopago.com/users/30
'use strict';

(function () {
    var Router = require('react-router');
    function init() {
        
        var router = new Router([
          new Route('decoracion', 'decoracion.html', true),
          new Route('deportes', 'deportes.html'),
          new Route('accesorios', 'accesorios.html'),
          new Route('juegos', 'juegos.html'),
          new Route('login', 'login.html'),
          new Route('registro', 'registro.html')
        ]);
    }
    init();

}());
