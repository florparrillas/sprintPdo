<?php

require_once('loader.php');
$consulta->borrarTablaSimple($bd,'marcas',$_GET['id']);
header('location:marcaConsulta.php');