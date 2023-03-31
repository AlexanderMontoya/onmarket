# OnMarket
"OnMarket" is a project created by the students of the Computer Science and Informatics program at [INSTITUTO SUPERIOR TECNOLOGICO - JOSE PARDO](https://www.jpardo.edu.pe/) for the Web Management course. This project is about a virtual store and the management of various products.
- Inicio
![OnMarket Inicio](https://alexandermontoya.github.io/onmarket/inicio.jpg)
- Productos
![OnMarket productos de categoría Abarrotes](https://alexandermontoya.github.io/onmarket/vistaVentas.jpg)
- Vista Producto
![Aceite de oliva - El Olivar](https://alexandermontoya.github.io/onmarket/vistaProducto.jpg)
- Carrito de compras
![OnMarket Carrito](https://alexandermontoya.github.io/onmarket/vistaContentCarrito.jpg)
- Vista Carrito de compras
![OnMarket Vista Carrito](https://alexandermontoya.github.io/onmarket/vistaCarrito.jpg)
- Panel Administrativo
![OnMarket Panel Administrativo](https://alexandermontoya.github.io/onmarket/vistaAdmin.jpg)
- Vista Administracion de Productos
![OnMarket gestión de productos](https://alexandermontoya.github.io/onmarket/vistaListProduct.jpg)
- PDF de los productos registrados
![OnMarket PDF de los Productos](https://alexandermontoya.github.io/onmarket/vistaPDFProduct.jpg)
##   Project features
### Built with
- HTML5
- CSS3
- Bootstrap
- PHP
- Laravel 9
- [Laravel Shpopping Cart]('https://github.com/darryldecode/laravelshoppingcart')
- [Laravel Crud Generator]('https://github.com/awais-vteams/laravel-crud-generator')
## Installation requirements:
-   PHP version 7.3 or higher
-   Composer (package manager for PHP)
-   Web server (e.g., Apache or Nginx)
-   Database server (e.g., MySQL or PostgreSQL)
-   Laravel Framework
## Installation
1.  Clone the project repository from GitHub or download the ZIP file of the project.
 ```sh
	git clone https://github.com/AlexanderMontoya/onmarket.git
   ```
2.  Install project dependencies using a package manager such as npm or Composer.
 ```sh
	composer install
   ```
3. Renaming the .env.example file to just .env, and changing the values of DB_DATABASE, DB_USERNAME, DB_PASSWORD.
4. Create database "onmarket"
![Create database onmarket](https://alexandermontoya.github.io/onmarket/instalacion/crearBD.jpg)
5. Run database migrations to create necessary tables and relationships.
![OnMarket migrations](https://alexandermontoya.github.io/onmarket/instalacion/migrations.jpg)
6. Sign up on OnMarket, here's an example and the password will be admin123
![Create database onmarket](https://alexandermontoya.github.io/onmarket/instalacion/crearUsuario.jpg)
7. Modify the first record of the users table in PHPmyadmin as an administrator
![Create database onmarket](https://alexandermontoya.github.io/onmarket/instalacion/modificarUsuario.jpg)
8. Now you will have access to the administrative panel of the project
![Create database onmarket](https://alexandermontoya.github.io/onmarket/instalacion/vistaAdmin.jpg)
9. You will be able to manage the users, categories, and products of the project through the administrative panel
![Create database onmarket](https://alexandermontoya.github.io/onmarket/instalacion/panelAdministrativo.jpg)
10. If you want to use the project without the default categories, you will need to modify some files
 - routes/web.php (Lines 35 to 46)
 - app/Http/Controllers/VistaVentaController.php (Delete all the functions starting from line 40 and modify them depending on the categories you want to add)
 - app/Http/Controllers/InicioController.php (Lines 20 to 22 and 24 to 26)
 - resources/views/layouts/app.blade.php (Lines 95 to 109)
 - resources/views/product/index.blade.php (Lines 23 to 37)
 - resources/views/inicio/index.blade.php (Starting from line 42, modify the divs with class "container_listProduct" that you want to be displayed on the homepage of the website)
11. But if you want to use the original OnMarket database, we left the images in a RAR file in the folder: onmarket/storage/app/public/uploads
![Create database onmarket](https://alexandermontoya.github.io/onmarket/instalacion/uploads-rar.jpg)
13. The database is located in the folder: onmarket/database
![Create database onmarket](https://alexandermontoya.github.io/onmarket/instalacion/database-sql.jpg)
## Credits
### Group OnMarket
- Montoya Bonifacio, Alexander Josué 
- Machaca Mayhuire, Jose Timoteo
-  Zarate Meza, Fiorella Cinthya
- Torres Oviedo, Luis Felipe
- Quispe Mejia, Diego
### Web Management Professor
- Julio Jauregui Sotelo
## Licencia  
- Información sobre la licencia del proyecto y cualquier otra información legal relevante.