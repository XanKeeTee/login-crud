# Sistema de Gestión de Alumnos (PHP MVC)

Este es un sistema web sencillo para la gestión académica de alumnos, desarrollado en **PHP** nativo utilizando el patrón de diseño **MVC (Modelo-Vista-Controlador)**. Permite realizar operaciones CRUD (Crear, Leer, Actualizar, Borrar) y cuenta con un sistema de autenticación de usuarios.

## 🚀 Características

* **Arquitectura MVC:** Separación lógica entre Modelos, Vistas y Controladores.
* **Gestión de Alumnos:**
    * Listado general.
    * Creación de nuevos alumnos.
    * Edición de datos.
    * Eliminación de registros.
* **Autenticación:** Login y Logout de usuarios administradores.
* **Interfaz Gráfica:** Diseño responsivo y moderno utilizando **Bootstrap 5**.
* **Base de Datos:** Conexión segura mediante **PDO**.

## 🛠️ Tecnologías Utilizadas

* PHP 7.4 / 8.x
* MySQL / MariaDB
* HTML5 & CSS3
* Bootstrap 5.3
* JavaScript (para validaciones básicas de Bootstrap)

## 📋 Requisitos Previos

Para ejecutar este proyecto necesitas un entorno de servidor local como:
* **XAMPP**

## 🔧 Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto:

### 1. Clonar o Descargar
Descarga este repositorio en tu carpeta de servidor web (por ejemplo, `C:\xampp\htdocs\`).

### 2. Base de Datos
1.  Abre tu gestor de base de datos (phpMyAdmin, Workbench, etc.).
2.  Crea una base de datos con el nombre 'login-php-gambero'
3.  Importa el archivo **`login-php-gambero.sql` **que se incluye en este proyecto.

### 3. Configuración de Conexión
Verifica que las credenciales de tu base de datos coincidan en el archivo `config/Database.php`. Por defecto está configurado para XAMPP:

### 4.Usuario y contraseña
El usuario y contraseña para poder acceder son:
<br>Usuario: admin
<br>Contraseña: 1234
```php
private $host = "localhost";
private $db_name = "login-php-gambero";
private $username = "root";
private $password = "";
```

## 5. Capturas de pantalla 📸

| 🔐 1. Login | 🎓 2. Gestión de Alumnos (CRUD) |
|:---:|:---:|
| <img src="/screenshoots/image1.png" width="100%"> | <img src="/screenshoots/image2.png" width="100%"> |

| ✏️ 3. Editar Perfil | ➕ 4. Crear Alumno |
|:---:|:---:|
| <img src="/screenshoots/image3.png" width="100%"> | <img src="/screenshoots/image4.png" width="100%"> |
