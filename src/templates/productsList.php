<div class="w-full">
    <h1 class="text-3xl font-bold mb-4">Productos registrados: <?php echo count($_SESSION["inventory"]); ?></h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-4">
        <?php
        if (empty($_SESSION["inventory"])) {
            echo '<p>No hay productos disponibles.</p>';
        } else {
            foreach ($_SESSION["inventory"] as $product) {
                echo '
                    <div class="bg-emerald-700 rounded-lg p-4">
                        <h2 class="text-xl font-bold break-words mb-2">' . $product->getName() . '</h2>
                        <p class="text-lg mb-2">Precio: ' . $product->getPrice() . ' Bs</p>
                        <p class="text-gray-300">' . $product->getDescription() . '</p>
                        <form method="post" action="delete.php">
                            <input type="hidden" name="product_id" value="' . $product->getId() . '">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-4">Eliminar</button>
                        </form>
                    </div>';
            }
        }
        ?>
    </div>
</div>