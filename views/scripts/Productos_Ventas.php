
<?php
use MyApp\query\select;
require_once("../../vendor/autoload.php");
session_start();

    if (isset($_POST['agregar'])) 
    {
    $producto=$_POST['agregar']; 
    $cantidad_llevada=$_POST['cantidad_llevada'];
    $seleccionar=new select();
    $qry="SELECT PRODUCTOS.CODIGO, PRODUCTOS.NOMBRE, PRODUCTOS.DESCRIPCION, PRODUCTOS.CANTIDAD_REAL, PRODUCTOS.CANTIDAD_IDEAL,PRODUCTOS.PRECIO_VENTA, PRODUCTOS.PRECIO_COMPRA, PRODUCTOS.MEDIDA, PROVEEDORES.COMPAÑIA, CATEGORIAS.NOMBRE, PRODUCTOS.ENTREGA_DOMICILIO, PRODUCTOS.FOTO FROM PRODUCTOS
	INNER JOIN PROVEEDORES ON PROVEEDORES.ID_PROVEEDOR = PRODUCTOS.PROVEEDOR
	INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CATEGORIA = PRODUCTOS.CATEGORIA
	WHERE PRODUCTOS.CODIGO = '$productos'";   
    $consulta=$seleccionar->seleccionar($qry);
    foreach ($consulta as $dato) {
        $_SESSION['venta'][$producto]['nombre']=$dato->NOMBRE;
        $_SESSION['venta'][$producto]['id']=$dato->CODIGO;
        $_SESSION['venta'][$producto]['cantidad']=$cantidad_llevada;
        $_SESSION['venta'][$producto]['total']=($cantidad_llevada*$dato->PRECIO_VENTA);
        $_SESSION['venta'][$producto]['foto']=$dato->FOTO;
    }
    }
    
    if(isset($_POST['eliminar']))
    {
        $producto=$_POST['eliminar']; 
        unset($_SESSION["venta"][$producto]);
        
    }
    header("refresh:0;../views_vendedor/vVentas.php");