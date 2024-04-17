<?php

require('../models/productoModel.php');
class productosController extends productoModel
{



    public function seeProducto()
    {
        $idProd = "";
        $nomProd = "";
        $preProd = "";
        $uniProd = "";
        $id = $_POST['id'];
        $rows = parent::getProducto($id);
        if ($rows == null) {
            $msj = "Producto no existe en la BD!";
            header("Location: http://localhost/CRUDPHP/src/views/crud.php?msj=" . $msj);
        } else {
            $idProd = $rows[0]['id'];
            $nomProd = $rows[0]['nombre'];
            $preProd = $rows[0]['precio'];
            $uniProd = $rows[0]['unidades'];
            header("Location: http://localhost/CRUDPHP/src/views/crud.php?idProd=" . $idProd .
                "&nomProd=" . $nomProd . "&preProd=" . $preProd . "&uniProd=" . $uniProd);
        }
    }

    public function insertProducto()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $unidades = $_POST['unidades'];

        if ($this->validarCampos($precio, $unidades)) {
            parent::setId($id);
            parent::setNombre($nombre);
            parent::setPrecio($precio);
            parent::setUnidades($unidades);
            parent::almacenarProducto();
            $msj = "El producto ".$nombre." fue almacenado exitosamente!";
            header("Location: http://localhost/CRUDPHP/src/views/crud.php?msj=" . $msj);
        } else {
            $msj = "Datos Inválidos!";
            header("Location: http://localhost/CRUDPHP/src/views/crud.php?msj=" . $msj);
        }
    }


    public function actProducto()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $unidades = $_POST['unidades'];
        parent::updateProducto($id, $nombre, $precio, $unidades);
        $msj = "El producto con id: ".$id." fue actualizado exitosamente!";
        header("Location: http://localhost/CRUDPHP/src/views/crud.php?msj=" . $msj);
    }

    public function deleteProducto()
    {
        $id = $_POST['id'];
        parent::eliminarProducto($id);
        $msj = "Producto con id: " . $id . " fue eliminado de la base de datos";
        header("Location: http://localhost/CRUDPHP/src/views/crud.php?msj=" . $msj);
    }
    private function validarCampos($precio, $unidades)
    {
        if (is_numeric($precio) && is_numeric($unidades)) {
            return true;
        } else {
            return false;
        }
    }
}


$controller = new productosController();
if (isset($_POST['insertar'])) {
    $controller->insertProducto();
} else if (isset($_POST['consultar'])) {
    $controller->seeProducto();
} else if (isset($_POST['actualizar'])) {
    $controller->actProducto();
} else if (isset($_POST['eliminar'])) {
    $controller->deleteProducto();
}
