## Sabores Y Delicias

[![300973517-377599127879895-6134836393572719577-n.jpg](https://i.postimg.cc/vmhRG7XL/300973517-377599127879895-6134836393572719577-n.jpg)](https://postimg.cc/hJXZrdkf)

**Este proyecto es un Panel interactivo para la administración y generación de informes de la empresa Sabores y Delicias. Utiliza tecnologías web modernas para proporcionar una interfaz de usuario amigable y funcional.**

Este proyecto permite a los usuarios gestionar y visualizar datos relacionados con clientes, pedidos, productos, empleados y tiendas. Además, incluye funcionalidades para generar informes detallados y visualizaciones gráficas de los datos.

[![imagen-2024-05-31-143638226.png](https://i.postimg.cc/vTk79j87/imagen-2024-05-31-143638226.png)](https://postimg.cc/7J1TrK2b)

## Instalación

1. Clona el repositorio:
    ```sh
    git clone https://github.com/tu-usuario/sabores-y-delicias-dashboard.git
    ```

2. Navega hasta el directorio del proyecto:
    ```sh
    cd sb-admin-template
    ```

3. Instala las dependencias:
    ```sh
    npm install
    ```

4. Asegúrate de tener un servidor web configurado para ejecutar PHP.

## Configuración de la Base de Datos

1. Crea una base de datos en tu servidor MySQL y ejecuta el script SQL incluido para crear las tablas necesarias:
    ```sql
    CREATE DATABASE basededatos;
    USE basededatos;
    -- Ejecuta aquí el script SQL proporcionado anteriormente
    ```

2. Configura la conexión a la base de datos en `PHP/db.php`:
    ```php
    <?php
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "basededatos";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    ?>
    ```

## Uso

1. Abre `index.html` en tu navegador web.
2. Usa el dashboard para navegar y visualizar diferentes secciones, incluyendo clientes, pedidos, productos, etc.
3. Presiona el botón "Generar Informe" para ver el informe detallado de los clientes.

## Personalización

- Puedes personalizar el estilo y los componentes del dashboard editando los archivos en las carpetas `css`, `js` y `scss`.
- Para agregar nuevas funcionalidades o modificar las existentes, edita los archivos HTML y PHP según sea necesario.

## Contribución

Si deseas contribuir al proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -am 'Agregar nueva funcionalidad'`).
4. Sube tu rama (`git push origin feature/nueva-funcionalidad`).
5. Crea un nuevo Pull Request.


¡Gracias por usar el dashboard de Sabores y Delicias!
