<?php
require_once('loader.php');
$consulta->borrarTablaSimple($bd,'categorias',$_GET['id']);
header('location:categoriaConsulta.php');