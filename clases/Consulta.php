<?php
class Consulta{
    //Este método muestra el el contenido de una tabla simple (Marca, Categoria)
    public function listarTablaSimple($bd,$tabla){
        $sql = "select * from $tabla";
        $query = $bd->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    //Este es el método que controla la busqueda de una tabla simple (Marca, Categoria)
    public function buscarTablaSimple($bd,$tabla,$busqueda){
        $sql = "select * from $tabla where nombre like :busqueda";
        $query = $bd->prepare($sql);
        $query->bindValue(':busqueda',"%".$busqueda."%");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    

    //Este método muestra el listatdo de todas las Productos
    public function listarProductos($bd,$productosTabla){
        $sql = "select * from $productosTabla";
        $query = $bd->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }

    //Este es el método que controla la busqueda de Productos
    public function buscarProducto($bd,$tabla,$busqueda){
        $sql = "select * from $tabla where title like :busqueda";
        $query = $bd->prepare($sql);
        $query->bindValue(':busqueda',"%".$busqueda."%");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function guardarMarca($bd,$tabla,$marca){
        $sql = "insert into $tabla (nombre) values (:nombre)";
        $query = $bd->prepare($sql);
        $query->bindValue(':nombre',$marca->getNombre());
        $query->execute();
        header('location:marcaConsulta.php');
    }

    public function actualizarMarca($bd,$tabla,$marca,$id){
        $sql = "update $tabla set nombre=:nombre where $tabla.id=$id";
        $query = $bd->prepare($sql);
        $query->bindValue(':nombre',$marca->getNombre());
        $query->execute();
        header('location:marcaConsulta.php');
      }

      public function guardarCategoria($bd,$tabla,$categoria){
        $sql = "insert into $tabla (nombre) values (:nombre)";
        $query = $bd->prepare($sql);
        $query->bindValue(':nombre',$categoria->getNombre());
        $query->execute();
        header('location:categoriaConsulta.php');
    }

    public function actualizarCategoria($bd,$tabla,$categoria,$id){
        $sql = "update $tabla set nombre=:nombre where $tabla.id=$id";
        $query = $bd->prepare($sql);
        $query->bindValue(':nombre',$categoria->getNombre());
        $query->execute();
        header('location:categoriaConsulta.php');
      }





    // Me sirve para borrar Cualquier Tabla Simple
      public function borrarTablaSimple($bd,$tabla,$id){
        $sql = "delete from $tabla where id = :id";
        $query = $bd->prepare($sql);
        $query->bindvalue(':id',$id);
        $query->execute();
    }


    public function detalleTablaSimple($bd,$tabla,$id){
        $sql = "select * from $tabla where  $tabla.id = $id";        
        $query = $bd->prepare($sql);
        $query->execute();
        $resultado = $query->fetch(PDO::FETCH_ASSOC);        
        return $resultado;
    }



    public function guardarProducto($bd,$tabla,$producto){
        $sql = "insert into $tabla (nombre,categoria_id,marca_id,precio,modelo,imagen) values (:nombre,:categoria_id,:marca_id,:precio,:modelo,:imagen)";
        $query = $bd->prepare($sql);
        $query->bindValue(':nombre',$producto->getNombre());
        $query->bindValue(':categoria_id',$producto->getCategoria_id());
        $query->bindValue(':marca_id',$producto->getMarca_id());
        $query->bindValue(':precio',$producto->getPrecio());
        $query->bindValue(':modelo',$producto->getModelo());
        $query->bindValue(':imagen',$producto->getImagen());
        $query->execute();        
        header('location:productoConsulta.php');
    }    

    public function actualizarProducto($bd,$tabla,$producto,$id){
        $sql = "update $tabla set nombre=:nombre,categoria_id=:categoria_id,marca_id=:marca_id,precio=:precio, modelo=:modelo,imagen=:imagen where $tabla.id=$id";
        $query = $bd->prepare($sql);
        $query->bindValue(':nombre',$producto->getNombre());
        $query->bindValue(':categoria_id',$producto->getCategoria_id());
        $query->bindValue(':marca_id',$producto->getMarca_id());
        $query->bindValue(':precio',$producto->getPrecio());
        $query->bindValue(':modelo',$producto->getModelo());
        $query->bindValue(':imagen',$producto->getImagen());
        $query->execute();        
        header('location:productoConsulta.php');
      }    

      public function detalleProducto($bd,$productos,$categorias, $marcas, $id){
        $sql = "select $productos.*,$categorias.nombre as 'cate', $marcas.nombre as 'marc' from $productos,$categorias,$marcas where $productos.categoria_id =$categorias.id and $productos.marca_id =$marcas.id and $productos.id = $id";
        $query = $bd->prepare($sql);
        $query->execute();
        $producto = $query->fetch(PDO::FETCH_ASSOC);
        
        return $producto;
    }      

/*

    //Método para agregar una nueva película
    public function guardarPelicula($bd,$movies,$pelicula){
        $sql = "insert into $movies (title,rating,awards,release_date,length,genre_id) values (:title,:rating,:awards,:release_date,:length,:genre_id)";
        $query = $bd->prepare($sql);
        $query->bindValue(':title',$pelicula->getTitle());
        $query->bindValue(':rating',$pelicula->getRating());
        $query->bindValue(':awards',$pelicula->getAwards());
        $query->bindValue(':release_date',$pelicula->getReleaseDate());
        $query->bindValue(':length',$pelicula->getLength());
        $query->bindValue(':genre_id',$pelicula->getGenre());
        $query->execute();
        header('location:index.php');

    }
    //Este método muestra el detalle de una película selecciona de la lista por parte del usuario
    public function detallePelicula($bd,$movies,$genres,$id){
        $sql = "select $movies.*,$genres.name from $movies,$genres where $movies.genre_id =$genres.id and $movies.id = $id";
        $query = $bd->prepare($sql);
        $query->execute();
        $pelicula = $query->fetch(PDO::FETCH_ASSOC);
        
        return $pelicula;
    }
    //Este es el método que controla la busqueda de las películas
    public function buscarPelicula($bd,$tabla,$busqueda){
        $sql = "select * from $tabla where title like :busqueda";
        $query = $bd->prepare($sql);
        $query->bindValue(':busqueda',"%".$busqueda."%");
        $query->execute();
        $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
        return $peliculas;
    }
    //Este método controla el borrado de la película que el usuario selecione
    public function borrarpelicula($bd,$movies,$id){
        $sql = "delete from $movies where id = :id";
        $query = $bd->prepare($sql);
        $query->bindvalue(':id',$id);
        $query->execute();
    }
    //Método para realizar la edición o modificación de los datos de alguna película
    public function actualizarPelicula($bd,$movies,$pelicula,$id){
        $sql = "update $movies set title=:title,rating=:rating,awards=:awards,release_date=:release_date, length=:length,genre_id=:genre_id where $movies.id=$id";
        $query = $bd->prepare($sql);
        $query->bindValue(':title',$pelicula->getTitle());
        $query->bindValue(':rating',$pelicula->getRating());
        $query->bindValue(':awards',$pelicula->getAwards());
        $query->bindValue(':release_date',$pelicula->getReleaseDate());
        $query->bindValue(':length',$pelicula->getLength());
        $query->bindValue(':genre_id',$pelicula->getGenre());
        $query->execute();
        header('location:index.php');
      }
 */ 
}
