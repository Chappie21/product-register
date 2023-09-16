<?php
require_once __DIR__ . "/src/models/product.php";

session_start();

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado los campos requeridos
    if (!isset($_POST["name"]) || !isset($_POST["price"])) {
        echo "Error: Debes completar todos los campos del formulario.";
        exit();
    }

    // Obtener los valores del formulario
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    // Crear una instancia de Product
    $product = new Product($name, $price, $description);

    // Validar el precio del producto
    if ($product->getPrice() > 3500) {
        echo "Error: El precio del producto no puede ser mayor a 3500 Bs.";
        exit();
    }

    // Obtener el precio total de los productos registrados
    $totalPrice = 0;
    foreach ($_SESSION["inventory"] as $productInInventory) {
        $totalPrice += $productInInventory->getPrice();
    }

    // Validar el precio total de los productos
    if (($totalPrice + $product->getPrice()) > 50000) {
        echo "Error: La suma total de los productos no puede ser mayor a 50000 Bs.";
        exit();
    }

    // Agregar el producto al inventario
    $_SESSION["inventory"][] = $product;

    // Redireccionar al index.php después de registrar el producto
    header("Location: index.php");
    exit();
}
?>