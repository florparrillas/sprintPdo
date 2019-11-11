<?php
require_once('loader.php');
$consulta->borrarTablaSimple($bd,'productos',$_GET['id']);
header('location:productoConsulta.php');