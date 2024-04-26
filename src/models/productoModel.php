<?php
require_once './config/connection.php';
class productoModel extends conection{
    protected $id;
    protected $nombre;
    protected $precio;
    protected $unidades;

    protected function setId($id){
        $this->id=$id;
    }
    protected function setNombre($nombre){
        $this->nombre=$nombre;
    }
    protected function setPrecio($precio){
        $this->precio=$precio;
    }
    protected function setUnidades($unidades){
        $this->unidades=$unidades;
    }


    protected function almacenarProducto(){
       try{
        $conn=parent::connect();
        $sql = 'INSERT INTO productos (id,nombre,precio,unidades) VALUES (:id,:nombre,:precio,:unid)';
        $stm = $conn->prepare($sql);
        $stm->execute([
            ":id" => $this->id,
            ":nombre" => $this->nombre,
            ":precio" => $this->precio,
            ":unid" => $this->unidades
        ]);
        parent::closeConnection($conn);
       }catch(PDOException $e){
            die($e->getMessage());
       }

    }

    protected function getProducto($id){
        $conn=parent::connect();
        $sql = 'SELECT * FROM productos WHERE id='.$id;
        $stm=$conn->query($sql);
        $rows = $stm->fetchAll();
        return $rows;

    }

    protected function updateProducto($id,$nombre,$precio,$unidades){
        try{
            $conn = parent::connect();
            $sql = "UPDATE productos SET nombre=:nombre, precio=:precio, unidades=:unid WHERE id=:id";
            $stm=$conn->prepare($sql);
            $stm->execute([
                ":id" => $id,
                ":nombre" => $nombre,
                ":precio" => $precio,
                ":unid" => $unidades
            ]);
           
            parent::closeConnection($conn);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    protected function eliminarProducto($id){
        try
        {
            $conn=parent::connect();
            $sql ='DELETE FROM productos WHERE id=:id';
            $stm = $conn->prepare($sql);
            $stm->execute([
                ':id'=>$id
            ]);
            parent::closeConnection($conn);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}



?>