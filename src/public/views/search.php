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

    <h1>CONSULTAR</h1>
    
    <form action="/crud-php/products-managment-search" method="POST">
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
                    <input type="text" name="id" required placeholder="<?php if(isset($_GET['id'])){
                        echo($_GET['id']);
                    }?>">
                    
                    </th>
                    <th>
                    <input type="text" name="nombre" placeholder="<?php if(isset($_GET['nom'])){
                        echo($_GET['nom']);
                    }?>">
                    
                    </th>
                    <th><input type="text" name="precio" placeholder="<?php if(isset($_GET['pre'])){
                        echo($_GET['pre']);
                    }?>">
                    </th>

                    <th><input type="text" name="unidades" placeholder="<?php if(isset($_GET['uni'])){
                        echo($_GET['uni']);
                    }?>">
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán los registros -->
            </tbody>
        </table>
        
        <div class="btn-action">
          
            <button type="submit" name="consultar" class="btn">Consultar</button>
            
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