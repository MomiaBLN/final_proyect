<?php
require_once("modelo/cliente.php");
require_once("controlador/base-de-datos.php");

if (isset($_POST["nombre_de_cliente"])
    && isset($_POST["telefono_del_cliente"]))
{
    $nombreDelCliente = $_POST["nombre_de_cliente"];
    $telefonoDelCliente = $_POST["telefono_del_cliente"];

    $cliente = new Cliente($nombreDelCliente, $telefonoDelCliente);
    InsertarCliente($cliente, "clientes", $pdo);
}
?>

<form method="POST" action="index.php">
Nombre del cliente: <input type="text" name="nombre_de_cliente"/>
Número de teléfono: <input type="text" name="telefono_del_cliente"/>
<button type="submit"> Añadir cliente </button>
</form>