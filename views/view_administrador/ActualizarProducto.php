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
    <div class="container">
        <h1 align="center">Edicion Repartidores</h1>
        <?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $id=$_GET["id"];
        $cadena="select CODIGO,NOMBRE, DESCRIPCION, CANTIDAD_REAL, CANTIDAD_IDEAL, PRECIO_VENTA, PRECIO_COMPRA,
        MEDIDA,PROVEEDOR, CATEGORIA,ENTREGA_DOMICILIO FROM productos WHERE CODIGO='$id'";
        $tabla =$query ->seleccionar($cadena);

        $cadena2="SELECT ID_PROVEEDOR, COMPAÑIA FROM PROVEEDORES";
        $reg1 = $query->seleccionar($cadena2);

        $cadena3="SELECT ID_CATEGORIA, NOMBRE FROM CATEGORIAS";
        $reg2 = $query->seleccionar($cadena3);
        
        echo "
        <form class='container-table' action='../scripts/ActualizarProducto.php' method='post'>
        <table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th></th><th>Nombre</th>
        <th>Descripcion</th><th>Cantidad real</th>
        <th>Cantidad ideal</th><th>Precio Venta</th><th>Precio Compra</th><th>Medida</th>
        <th>Proveedor</th>
        <th>Categoria</th><th>Entrega a domicilio</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> <input type='hidden' value='$registro->CODIGO' name='id'></td>";
            echo "<td> <input type='text' value='$registro->NOMBRE' name='nombre'></td>";
            echo "<td> <input type='text' value='$registro->DESCRIPCION' name='descripcion'></td>";
            echo "<td> <input type='text' value='$registro->CANTIDAD_REAL' name='cantidad_real'></td>";
            echo "<td> <input type='text' value='$registro->CANTIDAD_IDEAL' name='cantidad_ideal'> </td>";
            echo "<td> <input type='text' value='$registro->PRECIO_VENTA' name='precio_venta'> </td>";
            echo "<td> <input type='text' value='$registro->PRECIO_COMPRA' name='precio_compra'> </td>";
        }
    echo " <td>
        <select name='medida'>
        <option value='Pieza'>Pieza</option>
        <option value='Litro'>Litro</option>
        <option value='Lata'>Lata</option>
        <option value='Metro'>Metro</option>
        <option value='Kg'>Kg</option>
        <option value='M3'>M3</option>
        <option value='Gramo'>Gramo</option>
    </select>
    </td>";
        echo "  <td> 
        <select name='proveedor' >";
            foreach ($reg1 as $value1)
            {
                echo "<option value='".$value1->ID_PROVEEDOR."'>".$value1->COMPAÑIA."</option>";
            }
            echo "</select> </td> ";  
            echo "  <td> 
            <select name='categoria' value='$ID_CATEGORIA'>";
            foreach ($reg2 as $value2)
            {
                echo "<option value='".$value2->ID_CATEGORIA."'>".$value2->NOMBRE."</option>";
            }
            echo "</select> </td> "; 
            echo " <td>
            <select name='entrega_domicilio' id='' value='$registro->ENTREGA_DOMICILIO'>
            <option value='Si'>Si</option>
            <option value='No'>No</option>
        </select> </td>";

            echo "</tr>";
        echo "</tbody>
        </table>
        <input type='submit' value='Actualizar'>
    </form>";
        ?>
    </div>
</body>
</html>