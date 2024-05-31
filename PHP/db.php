<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Informe General de Clientes</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ClienteNombre</th>
                    <th>ClienteApellido</th>
                    <th>ClienteCorreo</th>
                    <th>PedidoID</th>
                    <th>PedidoFecha</th>
                    <th>PedidoEstado</th>
                    <th>ProductoNombre</th>
                    <th>ProductoMarca</th>
                    <th>ProductoPrecioVenta</th>
                    <th>ProductoCantidad</th>
                    <th>PedidoValorTotal</th>
                    <th>EmpleadoNombre</th>
                    <th>EmpleadoApellido</th>
                    <th>TiendaNombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "basededatos";

                // Crear conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $sql = "SELECT SELECT 
                cliente.nombre AS ClienteNombre, 
                cliente.apellido AS ClienteApellido, 
                cliente.correo AS ClienteCorreo, 
                pedido.id_pedido AS PedidoID, 
                pedido.fecha AS PedidoFecha, 
                pedido.estado AS PedidoEstado, 
                producto.nombre AS ProductoNombre, 
                producto.marca AS ProductoMarca, 
                producto.precio_venta AS ProductoPrecioVenta, 
                pedido.cantidad AS ProductoCantidad, 
                pedido.valor_total AS PedidoValorTotal, 
                empleado.nombre AS EmpleadoNombre,
                empleado.apellido AS EmpleadoApellido,
                tienda.nombre AS TiendaNombre
            FROM 
                cliente
            INNER JOIN 
                pedido ON cliente.id_cliente = pedido.cliente_id_cliente
            INNER JOIN 
                producto ON pedido.producto_id_producto = producto.id_producto
            LEFT JOIN 
                venta ON pedido.id_pedido = venta.pedido_id_pedido
            LEFT JOIN 
                empleado ON venta.empleado_id_empleado = empleado.id_empleado
            LEFT JOIN 
                tienda ON empleado.tienda_id_tienda = tienda.id_tienda
            ORDER BY 
                cliente.nombre, pedido.fecha;
            ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar datos de cada fila
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["ClienteNombre"]. "</td>
                                <td>" . $row["ClienteApellido"]. "</td>
                                <td>" . $row["ClienteCorreo"]. "</td>
                                <td>" . $row["PedidoID"]. "</td>
                                <td>" . $row["PedidoFecha"]. "</td>
                                <td>" . $row["PedidoEstado"]. "</td>
                                <td>" . $row["ProductoNombre"]. "</td>
                                <td>" . $row["ProductoMarca"]. "</td>
                                <td>" . $row["ProductoPrecioVenta"]. "</td>
                                <td>" . $row["ProductoCantidad"]. "</td>
                                <td>" . $row["PedidoValorTotal"]. "</td>
                                <td>" . $row["EmpleadoNombre"]. "</td>
                                <td>" . $row["EmpleadoApellido"]. "</td>
                                <td>" . $row["TiendaNombre"]. "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No hay resultados</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

