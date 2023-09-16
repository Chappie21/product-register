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

<div class="container flex flex-col sm:flex-row lg:justify-between w-full h-full lg:h-auto lg:w-2/3 mx-auto py-8 px-5 lg:px-0">
    <div class="hidden lg:block lg:w-2/6">
        <?php include_once "./src/templates/productsView.php" ?>
    </div>
    <div class="w-full lg:w-3/6">
        <?php include_once "./src/templates/productsList.php" ?>
    </div>
</div>

<?php include "./src/templates/footer.php" ?>

<a href="add-product.php" class="fixed bottom-8 right-8 lg:hidden">
    <button class="bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full shadow-lg">
        Agregar producto
    </button>
</a>