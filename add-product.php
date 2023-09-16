<?php
spl_autoload_register(function ($className) {
    $classPath = './src/models/' . strtolower($className) . '.php';
    if (file_exists($classPath)) {
        require_once $classPath;
    }
});

session_start();

// Verificar si el inventario existe en la sesión
if (!isset($_SESSION["inventory"])) {
    $_SESSION["inventory"] = array();
}

?>

<?php include "./src/templates/header.php" ?>

<div class="container flex flex-col items-center justify-center w-full h-screen">
    <div class="max-w-md w-full px-5 lg:px-0">
        <?php include_once "./src/templates/productsView.php" ?>
    </div>
</div>

<?php include "./src/templates/footer.php" ?>