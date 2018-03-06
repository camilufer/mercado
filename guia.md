Guía para implementar php

-descargamos un servidor local, en éste caso yo use xampp ---> https://www.apachefriends.org/es/index.html.(Éstos programas sirven, para cargar algo asi como un servidor web, entonces con el programa andando puedes cargar codigo PHP conetar con bases de datos etc...)
Acá tienes un video de cómo hacerlo https://www.gestionatuweb.net/instalar-un-servidor-web-en-linux-para-pruebas-y-aprendizaje-con-xampp/
Acá la guía:
Nos posicionamos en la carpeta donde hemos descargado XAMPP. Vemos que se trata de un archivo ejecutable con extensión .run. Pero para poder ejecutarlo necesitamos darle permisos de ejecución. Para ello lo seleccionamos con botón derecho del ratón y propiedades.
Ahora abrimos una terminal en la carpeta y nos autenticamos como root con el comando “sudo su” y escribimos ./nombre_del_archivo para ejecutarlo.
./xampp-linux-x64-5.6.20-0-installer.run
Un truquito: si escribes ./x y pulsas TAB debería autocompletarse el nombre del archivo.
Comenzará la instalación de XAMPP 
Clic en NEXT para continuar.
Dejamos los componentes a instalar por defecto. 
Esta es la ruta de instalación de XAMPP /opt/lampp, recordar porque la usaremos mucho para nuestros proyectos. 
Nos aparece el mensaje del patrocinador de XAMPP, si dejamos marcada la opción Learn more about Bitnami for XAMPP, se abrirá el navegador web a la página de Bitnami donde nos mostrarán sus productos y servicios. Podemos omitirla y pulsar Netx.
Comienza la instalación. 
Aparece el mensaje de que la instalación se ha completado con éxito. Si queremos arrancar el servidor en este momento, dejamos marcada la casilla Launch XAPP y pulsamos en Finish.
Para arrancar el servidor abrimos una terminal y tecleamos (con permisos de root) /opt/lampp/lampp start
Para detener el servidor: /opt/lampp/lampp stop 
Para reiniciar el servidor: /opt/lampp/lampp restart
Este comando es útil cuando hacemos algún cambio de configuración en el servidor y necesitamos que se reinicie para aplicarlo.
Si todo ha ido bien y para comprobar si tenemos el servidor en marcha, basta con abrir el navegador teclear la dirección http://localhost Deberá aparecernos una pantalla de XAMPP
se nos abrirá una ventana de XAMPP, vamos a la pestaña Manage Servers y comprobamos que todas las luces estén de color verde.


Junto con eso, se descargará una carpeta que por defecto estará bloqueada, para desbloquearla:
vamos a la consola y ponemos sudo chown nombreusuario:nombreusuario/opt/lampp/htdocs
(nombre usuario lo reemplazamos por nuestro nombre de usuario en nuestra computadora)

ahora vamos a la raíz del disco a buscar la carpeta htdocs y abrimos la que esta desbloqueada y creamos una carpeta. 
Dentro de de esa carpeta crea un archivo en blanco index.php
Hazle click derecho: abrir con gedit y escribe <?php echo "hola mundo"; ?>
(si no te aparece gedit, puedes hacerlo con block de notas) guardalo y prueba en http://localhost/NOMBRE_DE_TU_CARPETA
si te imprime el mensaje ya esta funcionando todo :D

CONCEPTOS BÁSICOS
en javascript las variables se definen con var, en php con un signo peso $, y para usar codigo php siempre se parte con <?php y se termina con ?>

Crea tus archivos dentro de la carpeta que creaste pero el index dejalo como index.php
(puedes borrar el anterior index.php que creamos para probar)

si quisieras mostrar tu key o alguna variable, en algun elemento html sería algo como esto
F
O
T
O



dentro de la raíz del disco buscamos la carpeta opt
