<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/registrarse.css">
    <title>Document</title>
</head>
<body>
<div class="row justify-content-center">
            <div class="col-6">
                <form action="../scripts/guardarProducto.php" method="POST">
                    <!--Seccion1-->
                    <div class="border border-secondary rounded-2    contenedores_form">
                        <h5>Datos de producto</h5>
                        <!--Nombre-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="nombre" placeholder="Nombre" name="nombre" required> 
                            <label class="form-label"  for="nombre">Nombre</label>
                        </div>
                        <!--Apellidos-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="a_p" placeholder="Apellido Paterno" name="descripcion" required>
                            <label class="form-label" for="a_p">Descripcion</label>
                        </div>

                        
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="file" id="telefono" placeholder="Numero de Telefono" name="foto" required>
                            <label class="form-label" for="telefono">FOTO</label>
                        </div>

                        <!--Numero de Telefono-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono" name="cantidad_real" required>
                            <label class="form-label" for="telefono">Cantidad Real</label>
                        </div>

                        <!--Numero de Telefono-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono" name="cantidad_ideal" required>
                            <label class="form-label" for="placas">Cantidad Ideal</label>
                        </div>

                        <!--Numero de Telefono-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono" name="precio_venta" required>
                            <label class="form-label" for="telefono">Precio Venta</label>
                        </div>

                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono" name="precio_compra" required>
                            <label class="form-label" for="telefono">Precio Compra</label>
                        </div>

                        <div>
                            <label for="" class='control-label'> Medida</label> <br>
                            <select name="medida" id="">
                                <option value="Pieza" >Pieza</option>
                                <option value="Litro">Litro</option>
                                <option value="Lata">Lata</option>
                                <option value="Metro">Metro</option>
                                <option value="Kg">Kg</option>
                                <option value="M3">M3</option>
                                <option value="Gramo">Gramo</option>
                            </select>
                        </div>
                        <br>
                        <?php 
                use MyApp\Query\select;
                require_once("../../vendor/autoload.php");

                $query = new select();
                $cadena="SELECT ID_PROVEEDOR, COMPAÑIA FROM PROVEEDORES";
                $reg = $query->seleccionar($cadena);

                echo "<div class='mb-3'>
                <label class='control-label'>
                PROVEEDOR </label>
                <select name='proveedor' class='form-select'>";

                foreach ($reg as $value)
                {
                    echo "<option value='".$value->ID_PROVEEDOR."'>".$value->COMPAÑIA."</option>";
                }

                echo "</select>
                </div>";  

                $cadena2="SELECT ID_CATEGORIA, NOMBRE FROM CATEGORIAS";
                $reg1 = $query->seleccionar($cadena2);

                echo "<div class='mb-3'>
                <label class='control-label'>
                Categorias </label>
                <select name='categoria' class='form-select'>";

                foreach ($reg1 as $value1)
                {
                    echo "<option value='".$value1->ID_CATEGORIA."'>".$value1->NOMBRE."</option>";
                }

                echo "</select>
                </div>";
                ?>
                 <div>
                            <label for="" class='control-label'>Entrega a domicilio</label> <br>
                            <select name="entrega_domicilio" id="">
                                <option value="Si" >Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                </div>
    </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>