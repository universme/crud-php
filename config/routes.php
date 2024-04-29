<?php
return[
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-index-insert',
        'controller'=>'productoController:insertProducto'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-index-insert',
        'controller'=>'productoController:viewInsertProduct'
    ],
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-index-search',
        'controller'=>'productoController:seeProduct'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-index-search',
        'controller'=>'productoController:viewSearchProduct'
    ],
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-index-update',
        'controller'=>'productoController:updtProduct'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-index-update',
        'controller'=>'productoController:viewUpdateProduct'
    ],
    [
    	'method' => 'POST',
        'path'=>'/crud-php/products-index-delete',
        'controller'=>'productoController:deleteProduct'
    ],
    [
    	'method' => 'GET',
        'path'=>'/crud-php/products-index-delete',
        'controller'=>'productoController:viewDeleteProduct'
    ]
]
?>