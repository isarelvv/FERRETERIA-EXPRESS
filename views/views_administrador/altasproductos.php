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
    <div class= "row">
        <div class="col-2"></div>
        <div class="container col-8">
            <div class="btn-group container pt-5 " role="group" aria-label="Basic outlined example">
                <a href="altasproductos.php" class="btn btn-danger active" aria-current="page">PRODUCTOS</a>
                <a href="altasempleados.php" class="btn btn-outline-danger">EMPLEADOS</a>
            </div>
            <form action="" method="post">
                <div class="m-5  ">
                    <label for="exampleFormControlInput1" class="form-label">NOMBRRE DEL PRODUCTO </label>
                    <input type="email" class="form-control w-75" id="exampleFormControlInput1" name="nobre_producto">
                </div>
                <div class="m-5  ">
                    <label for="exampleFormControlInput1" class="form-label">ID DEL PRODUCTO </label>
                    <input type="text" class="form-control w-75" id="exampleFormControlInput1" name="id_producto">
                </div>
                <div class="m-5  ">
                    <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detalle"></textarea>
                </div>
                <div class="m-5   row">
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">CANTIDAD REAL</label>
                        <input type="number" class="form-control w-75" id="exampleFormControlInput1" name="cantidad_real" value=1>
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">CANTIDAD IDEAL</label>
                        <input type="number" class="form-control w-75" id="exampleFormControlInput1" name="cantidad_ideal" value=1>
                    </div>
                    <div class="col-3 ">
                        <label for="exampleFormControlInput1" class="form-label">PRECIO VENTA</label>
                        <div class="input-group w-75">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control " id="exampleFormControlInput1" name="venta" value=1>
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">PRECIO COMPRA</label>
                        <div class="input-group w-75">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control " id="exampleFormControlInput1" name="compra" value=1>
                        </div>
                    </div>
                </div>
                <div class="m-5   row">
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">MEDIDA</label>
                        <input type="text" class="form-control " id="exampleFormControlInput1" name="cantidad_real" value=PZ>
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">REPARTIDOR</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>$REPARTIDORES</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">CATEGORIA</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>$CATEGORIAS</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label">ENTREGA A DOMICILIO</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>SI</option>
                            <option value="1">NO</option>
                        </select>
                    </div> 
                </div>
                <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="sumit" class="btn btn-danger btn-lg">GURARDAR</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>