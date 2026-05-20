<?php
function ConectarBaseDeDatos(string $ubicacion,
                                string $nombreDeLaBaseDeDatos,
                                string $usuario,
                                string $contrasenha) : PDO
{
    //dirección completa de la base de datos
    $dsn = "mysql:host=$ubicacion;dbname=$nombreDeLaBaseDeDatos;charset=utf8mb4";

    //PHP data object, objeto que usamos para conectar con la BD
    $pdo = new PDO($dsn, $usuario, $contrasenha, [
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    return $pdo;
}

//Conectar con base de datos
$ubicacion = "localhost";
$nombreDeLaBaseDeDatos = "cartera_clientes"; //si usamos guión, que sea bajo "_"
$usuario = "root";
$contrasenha = "";

$pdo = ConectarBaseDeDatos($ubicacion, $nombreDeLaBaseDeDatos, $usuario, $contrasenha);

function ConsultarTablaCompleta(PDO $pdo, string $nombreDeLaTabla)
{
    $sql = "SELECT * FROM $nombreDeLaTabla";
    return $pdo->query($sql)->fetchAll();
}

function InsertarCliente(Cliente $cliente,
                            string $nombreDeLaTabla,
                            PDO $pdo)
{
    $sql = "INSERT INTO $nombreDeLaTabla (nombre, telefono) "
    ."VALUES (\"$cliente->nombre\", \"$cliente->telefono\")";

    echo $sql;
    $pdo->exec($sql);
}
?>