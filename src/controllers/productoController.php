<?php


require_once './src/models/productoModel.php';
class productoController extends productoModel
{


    public function seeProduct()
    {
        
        $id = $_POST['id'];
        $rows = parent::getProducto($id);
        if ($rows == null) {
            $msj = "Producto no existe en la BD!";
            header("Location: /crud-php/products-index-search?msj=" . $msj);
        } else {
            $id = $rows[0]['id'];
            $nom = $rows[0]['nombre'];
            $pre = $rows[0]['precio'];
            $uni = $rows[0]['unidades'];
            header("Location: /crud-php/products-index-search?id=" . $id .
                "&nom=" . $nom . "&pre=" . $pre . "&uni=" . $uni);
        }
    }

    public function insertProducto()
    {
        $id = $_POST['id'];
        if(parent::getProducto($id)==null){
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
                header("Location: /crud-php/products-index-insert?msj=" . $msj);
            } else {
                $msj = "-Datos inválidos-";
                header("Location: /crud-php/products-index-insert?msj=" . $msj);
            }
        }else{
            $msj = "ID existente en la base de datos";
            header("Location: /crud-php/products-index-insert?msj=" . $msj);
        }
       
    }


    public function updtProduct()
    {
        $id = $_POST['id'];
        if(parent::getProducto($id)==null){
            $msj = "Producto no existe en la base de datos";
            header("Location: /crud-php/products-index-update?msj=" . $msj);
        }else{
            
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $unidades = $_POST['unidades'];
            parent::updateProducto($id, $nombre, $precio, $unidades);
            $msj = "El producto con id: ".$id." fue actualizado exitosamente!";
            header("Location: /crud-php/products-index-update?msj=" . $msj);
        }
    }

    public function deleteProduct()
    {
        $id = $_POST['id'];
        if(parent::getProducto($id)==null){
            $msj = "Producto no existe en la base de datos";
            header("Location: /crud-php/products-index-delete?msj=" . $msj);
        }else{
            parent::eliminarProducto($id);
            $msj = "Producto con id: " . $id . " fue eliminado de la base de datos";
            header("Location: /crud-php/products-index-delete?msj=" . $msj);
        }
        
       
    }

    public function viewInsertProduct(){
        
        require_once './src/public/views/insert.php';

    }
    
    public function viewSearchProduct(){
        
        require_once './src/public/views/search.php';

    }

    public function viewUpdateProduct(){
        
        require_once './src/public/views/update.php';

    }
    public function viewDeleteProduct(){
        
        require_once './src/public/views/delete.php';

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



