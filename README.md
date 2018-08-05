# lottery-card-generate
Sistema para generación de tarjetas para loteria basado en configuraciones establecidas del sistema.

## Prueba el sistema
### Pasos para poder probarlo:
1. Clona el repositorio:
```bash
$ git clone https://github.com/Intelguasoft/lottery-card-generate.git
```
2. Desde la consola, navega hacia la carpeta del proyecto:
```bash
$ cd /lottery-card-generate
```
3. Una vez dentro de la carpeta del proyecto, ingresa el siguiente comando:
```bash
$ composer install
```
Este comando instalara todos los paquetes de php que se utilizaron en el proyecto.
4. Después de instalar los paquetes necesarios para el funcionamiento del proyecto, necesitaremos que se cree la base de datos en nuestro caso estamos usando MySQL/MariaDB.
En nuestro caso lo haremos desde la consola usando los siguientes comandos:

 * Conectarnos al servidor de base de datos (MySQL/MariaDB):
```bash
$ mysql -u root -p ***********
```
 * Una vez dentro del servidor de base de datos, escribimos el comando para la creación de la base de datos:
```sql
$ CREATE DATABASE lottery CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
```
5. Luego de estar creada la bbdd, ubicados en la carpeta del proyecto ejecutamos las migraciones por medio del siguiente comando:
```bash
$ php artisan migrate
```
6. Al tener creadas las migraciones, ejecutamos el comando para poder tener disponible la aplicación en el navegador de la siguiente manera:
```bash
$ php artisan serve
Output: Laravel development server started: <http://127.0.0.1:8000>
```
7. Al tener levantada la aplicación accedemos a la ruta http://127.0.0.1:8000/register
 * Creamos un usuario de la aplicación.
 * Con el usuario creado nos logueamos.
 * Una vez dentro de la aplicación podemos generar el listado de boletas accediendo al menú "Cuadernillos de boletas".
 * Ya dentro de esta sección podemos dar click en el boton "Generar", el cual pasados unos segundos nos mostrara el cuadernillo generado en formato PDF.