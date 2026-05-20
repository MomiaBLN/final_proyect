<?php
function ConectarBaseDeDatos(string $ubicacion, string $nombreDeLaBaseDeDatos, string $usuario, string $contrasenha): PDO
{
//dirrección completa de la base de datos
$dsn = "mysql:host=$ubicacion;dbname=$nobreDeLaBaseDeDatos;charset=utf8mb4";

//PHP data object, objeto que usamos para conectar con la BD
$pdo = new PDO($dns, $usuario, $contrasenha, [
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]
);
return $pdo;
}

//Conectar ocon base de datos
$ubicacion = "localhost";
$nombreDeLaBaseDeDatos = "pelicula"; //si usamos guión, que sea bajo "_"
$usuario = "root";
$contrasenha = "";

$pdo1 = ConectarBaseDeDatos($ubicacion, $nombreDeLaBaseDeDatos, $usuario, $contrasenha);

function ConsultarTablaCompleta(PDO $pdo, string $nombreDeLaTabla)
{
    $sql = "SELECT * FROM $nombreDeLaTabla";
    return $pdo->query($sql)->fetchAll();
}

$respuesta = ConsultarTablaCompleta("pelicula");
foreach ($respuesta as $entrada)
{
    echo $entrada["fecha_de_estreno"];
}
?>