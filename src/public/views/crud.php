<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>CRUD PRODUCTOS</h1>
    <form action="../controllers/productoController.php" method="POST">
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
                    <input type="text" name="id" placeholder="
                    <?php if(isset($_GET['idProd'])){
                        echo($_GET['idProd']);
                    }else{
                        echo("ID");
                    }?>"
                    required>
                    </th>
                    <th>
                    <input type="text" name="nombre" placeholder="
                    <?php if(isset($_GET['nomProd'])){
                        echo($_GET['nomProd']);
                    }else{
                        echo("Nombre");
                    }?>"
                    >
                    </th>
                    <th><input type="text" name="precio" placeholder="
                    <?php if(isset($_GET['preProd'])){
                        echo($_GET['preProd']);
                    }else{
                        echo("Precio");
                    }?>
                    ">
                    </th>

                    <th><input type="text" name="unidades" placeholder="
                    <?php if(isset($_GET['uniProd'])){
                        echo($_GET['uniProd']);
                    }else{
                        echo("Unidades");
                    }?>
                    ">
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán los registros -->
            </tbody>
        </table>
        
        <div class="btn-action">
            <button type="submit" name="consultar" class="btn">Consultar</button>
            <button type="submit" name="insertar" class="btn">Insertar</button>
            <button type="submit" name="actualizar" class="btn">Actualizar</button>
            <button type="submit" name="eliminar" class="btn">Eliminar</button>
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