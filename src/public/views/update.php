<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="src\public\assets\style.css">
</head>

<body>
    <?php   
    include_once './src/public/views/navbar.php';
    ?>
    <h1>Actualizar</h1>
    <form action="/crud-php/products-managment-update" method="POST">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                </tr>
                <tr>
                    <th>
                    <input type="text" name="id" required placeholder="ID">
                    
                    </th>
                    <th>
                    <input type="text" name="nombre" required placeholder="Nombre del producto">
                    
                    </th>
                    <th><input type="text" name="precio" placeholder="Valor del producto">
                    </th>

                    <th><input type="text" name="unidades" placeholder="Cantidad">
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán los registros -->
            </tbody>
        </table>
        
        <div class="btn-action">
          
            <button type="submit" name="actualizar" class="btn">Actualizar</button>
            
        </div>
    </form>

    <div class="msj">
        <?php
        if (isset($_GET['msj'])) {
            echo ($_GET['msj']);
        }
        ?>
    </div>

</body>

</html>