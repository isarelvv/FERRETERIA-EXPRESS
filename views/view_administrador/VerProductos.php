<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
            use MyApp\query\select;
            require_once("../../vendor/autoload.php");

    ?>
    <div class="container">
        <h1 align="center">Productos</h1>
        <div class="container">
        <!--Mensajes Barra-->
        <div class="row">
            <!--Barra-->
            <div class="col-2   titulos">
                <b>Categorias</b>
                <hr class="hrs">
            </div>

            <div class="col-6 text-center">
                <form action="" method="POST">
                <div class="input-group mb-3 border border-1 border-dark rounded rounded-3  buscar">
                    <!--Barra-->
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar productos" name="buscar" >

                    <!--Boton Buscar-->
                    <button class="btn border-0 border-start  b-buscar" type="submit" id="button-addon1">Buscar</button>
                    </form>
                </div>
            </div>

            <?php
            if(isset($_POST['buscar']))
            {
                extract($_POST);
                $barra = new select();
                $consulta = "SELECT productos.CODIGO, categorias.NOMBRE as CATEGORIA, productos.NOMBRE, productos.DESCRIPCION, productos.CANTIDAD_REAL,productos.CANTIDAD_IDEAL,productos.PRECIO_VENTA,productos.PRECIO_COMPRA, 
                productos.MEDIDA, PROVEEDORES.COMPAÑIA ,productos.FOTO FROM productos join categorias on categorias.ID_CATEGORIA=productos.CATEGORIA
                JOIN PROVEEDORES on PROVEEDORES.ID_PROVEEDOR=productos.PROVEEDOR
                where productos.nombre like '%$buscar%'";
                $resultado = $barra->seleccionar($consulta);
            }
            ?>

            <!--Cantidad de Productos y Filtros-->
            <div class="row col-10">
                <div class="col-4   titulos"><b>Productos:</b></div>
                <div class="col-2   titulos"><b>Ordenar por:</b></div>
                <div class="col-3">
                    <form action="" method="POST">
                        <select name="filtros_de_busqueda" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                            <option value="1">Todos los productos</option>
                            <option value="2">Solo productos en stock</option>
                            <option value="3">Ordenar de la A a la Z</option>
                            <option value="4">Ordenar de la Z a la A</option>
                            <option value="5">De precio Mayor a Menor</option>
                            <option value="6">De precio Menor a Mayor</option>
                        </select>
                </div>
                <hr class="hrs">
            </div>
        </div>

        <!--Categorias y Productos-->
        <div class="row" style="margin-top: 10px;">
            <!--Categorias-->
            <div class="col-2">

            <select name="categorias" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                            <option value="Herramientas" name="categorias">Herramientas</option>
                            <option value="adiciones" name="categorias">Union</option>
                            <option value="medicion" name="categorias">Medicion</option>
                            <option value="construccion" name="categorias">Construccion</option>
                            <option value="tuberia" name="categorias">Tuberias</option>
                            <option value="iluminacion" name="categorias">Alumbrado</option>
                            <option value="seguridad" name="categorias">Proteccion</option>
                            <option value="limpieza" name="categorias">Limpieza</option>
                            <option value="pintura" name="categorias">Pintura</option>
                            <option value="otros" name="categorias">Otros</option>
                        </select>
            

                    <div class="text-center">
                        <button class="btn  agregar_carrito" type="submit" name='filtrar'>
                            <b>Filtrar Resulados</b>
                        </button>
                    </div>
                </form>
            </div>
            <?php
            if($_POST)
            {
                 $cadena= "CALL PPC_ADMIN('herramientas');";
                 if (isset($_POST)) 
                 {
                    $filtros_de_busqueda ="";
                    extract($_POST);    
                    if (isset($categorias))   
                    {  
                        switch ($filtros_de_busqueda) 
                        {
                            case 1:
                                $cadena= "CALL PPC_ADMIN('$categorias');";
                                break;
                            case 2:
                                $cadena= "CALL PRODUCTOS_STOCK_ADMIN('$categorias');";
                                break;
                            case 3:
                                $cadena= "CALL ORDEN_PPC_AZ_ADMIN('$categorias');";
                                break;
                            case 4:
                                $cadena= "CALL ORDEN_PPC_ZA_ADMIN('$categorias');";
                                break;
                            case 5:
                                $cadena= "CALL PPC_PRECIO_MAYOR_ADMIN('$categorias');";
                                break;
                            case 6:
                                $cadena= "CALL PPC_PRECIO_MENOR_ADMIN('$categorias');";
                                break; 
                        }
                    }
               }
             ?>
        <?php
        if (isset($_POST['buscar']))
        
        {

            echo "<a href='AltaProducto.php'>Dar de Alta</a>";


            echo "<table class='table table-hover'>
            <thead class='table-dark'>
            <tr>
            <th>Categoria</th><th>Nombre</th><th>Descripcion</th>
            <th>Cantidad Real</th><th>Cantidad Ideal</th><th>Precio Venta</th><th>Precio Compra</th>
            <th>Medida</th><th>COMPAÑIA</th><th>Foto</th>
            <th>Edicion</th>
            </tr>
            </thead>
            </tbody>";
    
            foreach($resultado as $registro)
            {
                echo "<tr>";
                echo "<td> $registro->CATEGORIA </td>";
                echo "<td> $registro->NOMBRE </td>";
                echo "<td> $registro->DESCRIPCION </td>";
                echo "<td> $registro->CANTIDAD_REAL </td>";
                echo "<td> $registro->CANTIDAD_IDEAL </td>";
                echo "<td> $registro->PRECIO_VENTA </td>";
                echo "<td> $registro->PRECIO_COMPRA </td>";
                echo "<td> $registro->MEDIDA </td>";
                echo "<td> $registro->COMPAÑIA </td";
                echo "<td> <img src='$registro->FOTO' alt=''></td>";
                echo "<td><a href='ActualizarProducto.php?id=$registro->CODIGO'>EDITAR</a></td>";
                echo "</tr>";
            }
    
            echo "</tbody>
            </table>";
        }
        else
        {

        
        $query=new Select();
        $tabla =$query ->seleccionar($cadena);

       echo "<a href='AltaProducto.php'>Dar de Alta</a>";


        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Categoria</th><th>Nombre</th><th>Descripcion</th>
        <th>Cantidad Real</th><th>Cantidad Ideal</th><th>Precio Venta</th><th>Precio Compra</th>
        <th>Medida</th><th>COMPAÑIA</th><th>Foto</th>
        <th>Edicion</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->CATEGORIA </td>";
            echo "<td> $registro->NOMBRE </td>";
            echo "<td> $registro->DESCRIPCION </td>";
            echo "<td> $registro->CANTIDAD_REAL </td>";
            echo "<td> $registro->CANTIDAD_IDEAL </td>";
            echo "<td> $registro->PRECIO_VENTA </td>";
            echo "<td> $registro->PRECIO_COMPRA </td>";
            echo "<td> $registro->MEDIDA </td>";
            echo "<td> $registro->COMPAÑIA </td";
            echo "<td> <img src='$registro->FOTO' alt=''></td>";
            echo "<td><a href='ActualizarProducto.php?id=$registro->CODIGO'>EDITAR</a></td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";
        }
    }
    else
     {

    }
        ?>

    </div>
</body>
</html>