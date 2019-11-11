<?php
require_once('clases/BaseMySql.php');
require_once('clases/Consulta.php');
require_once('clases/Categoria.php');
require_once('clases/Marca.php');
require_once('clases/Producto.php');
require_once('clases/Validador.php');

$bd = BaseMySql::conexion();
$consulta = new Consulta();
$validar = new Validador();