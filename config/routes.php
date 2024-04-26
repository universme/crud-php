<?php
return[
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-managment-insert',
        'controller'=>'productoController:insertProducto'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-managment-insert',
        'controller'=>'productoController:viewInsertProduct'
    ],
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-managment-search',
        'controller'=>'productoController:seeProduct'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-managment-search',
        'controller'=>'productoController:viewSearchProduct'
    ],
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-managment-update',
        'controller'=>'productoController:updtProduct'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-managment-update',
        'controller'=>'productoController:viewUpdateProduct'
    ],
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-managment-delete',
        'controller'=>'productoController:deleteProduct'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-managment-delete',
        'controller'=>'productoController:viewDeleteProduct'
    ]
]
?>