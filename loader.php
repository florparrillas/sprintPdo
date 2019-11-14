<?php
require_once('clases/BaseMySql.php');
require_once('clases/Consulta.php');
require_once('clases/Categoria.php');
require_once('clases/Marca.php');
require_once('clases/Producto.php');
require_once('clases/Validador.php');
require_once('clases/Usuario.php');
require_once('clases/Armador.php');
require_once('clases/Encriptador.php');
require_once('clases/Autenticador.php');

require_once("controladores/funciones.php");
require_once("helpers.php");


$bd = BaseMySql::conexion();
$consulta = new Consulta();
$validar = new Validador();
$armarRegistro = new Armador();