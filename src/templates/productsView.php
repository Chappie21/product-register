<div class="w-full">
    <h1 class="text-3xl font-bold mb-4">Registro de Productos</h1>
    <form action="register.php" method="post">
        <div class="mb-4">
            <label for="name" class="block mb-2">Nombre del Producto:</label>
            <input type="text" name="name" required
                class="w-full px-4 py-2 rounded-lg bg-emerald-700 text-white focus:outline-none focus:ring focus:ring-emerald-300" />
        </div>
        <div class="mb-4">
            <label for="price" class="block mb-2">Monto del Producto (Bs):</label>
            <input type="number" name="price" min="0" max="3500" required
                class="w-full px-4 py-2 rounded-lg bg-emerald-700 text-white focus:outline-none focus:ring focus:ring-emerald-300" />
        </div>
        <div class="mb-4">
                <label for="description" class="block mb-2">Descripción del Producto:</label>
                <textarea name="description" class="w-full px-4 py-2 rounded-lg bg-emerald-700 text-white focus:outline-none focus:ring focus:ring-emerald-300"></textarea>
        </div>
        <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg w-full sm:w-auto">Registrar
            Producto
        </button>
    </form>
</div>