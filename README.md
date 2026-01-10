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
* **XAMPP** (Recomendado para Windows)
* **MAMP** (Mac)
* **LAMP** Stack (Linux)

## 🔧 Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto:

### 1. Clonar o Descargar
Descarga este repositorio en tu carpeta de servidor web (por ejemplo, `C:\xampp\htdocs\gestion-alumnos`).

### 2. Base de Datos
1.  Abre tu gestor de base de datos (phpMyAdmin, Workbench, etc.).
2.  Importa el archivo **`login-php.sql` **que se incluye en este proyecto.

### 3. Configuración de Conexión
Verifica que las credenciales de tu base de datos coincidan en el archivo `config/Database.php`. Por defecto está configurado para XAMPP:

```php
private $host = "localhost";
private $db_name = "login-php";
private $username = "root";
private $password = "";
