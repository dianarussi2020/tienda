<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Tienda Virtual">
        <meta name="description" content="Tienda virtual desarrollada con php">
        <meta name="keywords" content="">
        <title>Tienda virtual</title>
        <?php
        $icono = ControladorPlantilla::ctrEstiloPlantilla();
        echo '<link rel="icon" href="../../BACKEND/'.$icono["icono"].'">';
        /** Mantener la ruta fija del proyecto */ 
        $url = Ruta::ctrRuta();
        ?>
        <!-- Hojas de estilo -->
        <!-- Bootstrap v3.3.7 -->
        <link rel="stylesheet" href=" <?php echo $url;?>vistas/css/plugins/bootstrap.min.css">
        <!--Font Awesome 4.6.1 -->
        <link rel="stylesheet" href=" <?php echo $url;?>vistas/css/plugins/font-awesome.min.css">
        <link rel="stylesheet" href=" <?php echo $url;?>vistas/css/plantilla.css">
        <link rel="stylesheet" href=" <?php echo $url;?>vistas/css/cabezote.css">
        <!--Font google APIS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed">

        <!-- JS -->
        <!-- jQuery v3.2.1 -->
        <script src=" <?php echo $url;?>vistas/js/plugins/jquery.min.js"></script>
        <!-- Bootstrap v3.3.7 -->
        <script src=" <?php echo $url;?>vistas/js/plugins/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        /** HEADER */ 
        include "modulos/header.php";
        /** Contenido dinamico */
        $rutas = array();
        $ruta=null;
        if(isset($_GET["ruta"])){ 
            //separar por / todo lo que este en get["ruta"]
            $rutas=explode("/",$_GET["ruta"]);
            
            /** urls amigables de categorias */
            $item="ruta"; //campo bd llamado ruta
            $valor=$rutas[0]; //1ra pos de array trae nom cat
            $rutaCategorias=ControladorProductos::ctrMostrarCategoria($item,$valor);
            if($rutas[0]==$rutaCategorias["ruta"]){
                $ruta=$rutas[0];
            }
            /** urls amigables de subcategorias */
            $rutaSubcategorias=ControladorProductos::ctrMostrarSubcategoria($item,$valor);
            foreach ($rutaSubcategorias as $key => $value) {
                if($rutas[0]==$value["ruta"]){
                    $ruta=$rutas[0];
                }
            }
            /** Lista blanca de urls amigables */
            if($ruta!=null){//si hay info
                include "modulos/productos.php";
            }else{
                include "modulos/error404.php";
            }
        }
        ?>
        <!-- js personalizado -->
        <script src=" <?php echo $url;?>vistas/js/cabezote.js"></script>
        <script src=" <?php echo $url;?>vistas/js/plantilla.js"></script>
    </body>
</html>