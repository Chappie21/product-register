<?php
require_once __DIR__ . "/src/models/product.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['product_id'])) {
        $productId = $_POST['product_id'];

        foreach ($_SESSION['inventory'] as $index => $product) {
            if ($product->getId() === $productId) {
                unset($_SESSION['inventory'][$index]);
                break;
            }
        }
    }
}

header("Location: index.php");
exit();
?>