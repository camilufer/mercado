`use strict`
//Este javascript proporcionará un constructor para nuestras rutas y también un par de funcionalidades
function Route(name, htmlName, defaultRoute) {
  //3 parametros: name=nombre de nuestra ruta, htmlName=el html que se carga con la ruta,default=es true si la ruta correcta
  try {
    if(!name || !htmlName) {
      throw 'error: name and htmlName params are mandatories';
    }
    this.constructor(name, htmlName, defaultRoute);
  } catch(e) {
    console.error(e);
  }
}
Route.prototype = {
  name: undefined,
  htmlName: undefined,
  default: undefined,
  constructor: function(name, htmlName, defaultRoute) {
    this.name = name;
    this.htmlName = htmlName;
    this.default = defaultRoute;
  },
  isActiveRoute: function(hashedPath) {
    return hashedPath.replace('#', '') === this.name;
  }
}