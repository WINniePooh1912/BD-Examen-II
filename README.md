# Proyecto de Login y Signup - Conexión a Base de Datos

## Descripción

Este proyecto es una implementación básica de un sistema de **Login** (inicio de sesión) y **Signup** (registro) utilizando PHP, HTML, y CSS, con una conexión a una base de datos MySQL a través de localhost. Este fue mi examen del segundo parcial de la materia de **Bases de Datos**, donde se evaluaron las habilidades para trabajar con bases de datos y crear una interfaz web simple para la autenticación de usuarios.

## Funcionalidades

1. **Registro (Signup)**: Permite a los usuarios crear una cuenta ingresando su nombre de usuario y contraseña.
2. **Inicio de sesión (Login)**: Permite a los usuarios registrados ingresar al sistema utilizando su nombre de usuario y contraseña.
3. **Validación básica**: Se validan las entradas para evitar registros duplicados y entradas vacías.
4. **Conexión con MySQL**: Utiliza PHP para establecer la conexión con la base de datos y realizar las consultas necesarias para registrar y autenticar a los usuarios.

## Tecnologías Utilizadas

- **PHP**: Para la lógica de conexión a la base de datos y la validación de usuarios.
- **MySQL**: Para almacenar la información de los usuarios.
- **HTML**: Para la estructura de las páginas web.
- **CSS**: Para el estilo básico de las páginas.
- **Localhost**: Para ejecutar el proyecto en un entorno local.

## Instrucciones del Examen

### Base de datos:
Los datos que debe tener la base de datos son:
- usuario
- correo
- edad
- sexo
- estado civil
- contraseña

### Temática:
Cuando el usuario ingrese debe mostrar una vista con información X de un sitio web para una floreria.

### Requisitos:
- Formulario de inicio de sesión.
- Formulario de registro.
- Usar html, css y php.
- Cuando inicie sesión tiene que mostrar el nombre del usuario

## Instrucciones de Uso

### Requisitos Previos

Asegúrate de tener lo siguiente instalado:

- **Servidor Local (XAMPP)**: Para poder ejecutar PHP y MySQL.
- **Editor de Texto/IDE**: Visual Studio Code.

### Pasos para Ejecutar el Proyecto

1. **Descargar el proyecto**: Clona o descarga este repositorio a tu máquina local.

2. **Configurar el servidor local**: Asegúrate de tener tu servidor local (XAMPP) funcionando y habilita Apache y MySQL.

3. **Configurar la base de datos**:
   - Abre **phpMyAdmin** en tu localhost.
   - Crea una nueva base de datos llamada `examen`.
   - Crea una tabla `usuarios` con las siguientes columnas:
     - `id` (INT(11), AUTO_INCREMENT, PRIMARY KEY)
     - `usuario` (VARCHAR(255))
     - `correo` (VARCHAR(255))
     - `edad` (INT(11))
     - `sexo` (VARCHAR(255))
     - `estado_civil` (VARCHAR(255))
     - `contrasena` (VARCHAR(255))

4. **Configuración de PHP**:
   - En el archivo `conn.php`, configura las credenciales de tu base de datos (usuario, contraseña, nombre de la base de datos).
   
5. **Ejecutar el proyecto**:
   - Coloca los archivos del proyecto en la carpeta `htdocs` de tu instalación de XAMPP.
   - Abre tu navegador y accede a `http://localhost/nombre_de_tu_proyecto`.

6. **Interacción**:
   - Accede a la página `index.php` para probar el sistema.

## Ejemplo de Uso

1. **Página de Registro**: El usuario ingresa un nombre de usuario, correo, edad, sexo, estado civil y contraseña para crear una nueva cuenta.
2. **Página de Login**: El usuario ingresa sus credenciales (nombre de usuario y contraseña) para acceder al sistema.

## Estructura del Proyecto

El proyecto contiene los siguientes archivos:

- **index.php**: Página principal donde el usuario puede elegir entre iniciar sesión o registrarse.
- **login.php** y **login.html**: Página de inicio de sesión.
- **registro.php** y **registro.html**: Página de registro.
- **logout.php**: Archivo para cerrar sesión.
- **conn.php**: Configuración de la conexión a la base de datos.
- **style.css**: Estilos básicos para el diseño de las páginas.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.

