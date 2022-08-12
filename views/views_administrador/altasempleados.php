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
                <a href="altasproductos.php" class="btn btn-outline-danger " aria-current="page">PRODUCTOS</a>
                <a href="altasempleados.php" class="btn btn-danger active" aria-current="page">EMPLEADOS</a>
            </div>
            <form action="" method="post">
                <div class="m-5  ">
                    <label for="exampleFormControlInput1" class="form-label">NOMBRRE  </label>
                    <input type="email" class="form-control w-75" id="exampleFormControlInput1" name="nobre_producto">
                </div>
                <div class="m-5  ">
                    <label for="exampleFormControlInput1" class="form-label">APELLIDO </label>
                    <input type="text" class="form-control w-75" id="exampleFormControlInput1" name="id_producto">
                </div>
                <div class="m-5  ">
                    <label for="exampleFormControlInput1" class="form-label">CORREO </label>
                    <input type="text" class="form-control w-75" id="exampleFormControlInput1" name="id_producto">
                </div>
                <div class="m-5  ">
                    <label for="exampleFormControlInput1" class="form-label">TELEFONO </label>
                    <input type="text" class="form-control w-75" id="exampleFormControlInput1" name="id_producto">
                </div>
                <div class="m-5 row">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">SEXO</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>FEMENINO</option>
                            <option value="">MASCULINO</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">ROL</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>VENDEDOR</option>
                            <option valuer>EMPLEADO</option>
                            <option valuer>ADMNISTRADOR</option>
                        </select>
                    </div>
                </div>
                <span class=" text-bg-danger">ESTOS DOS SOLO APARECENS SI EL SELECT ES DE REAPARTIDOR</span>
                <div class="m-5 row">
                    <div class="col-5">
                        <label for="exampleFormControlInput1" class="form-label">PLACAS</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="cantidad_real" value=1>
                    </div>
                    <div class="col-5">
                        <label for="exampleFormControlInput1" class="form-label">NUMERO DE LICENCIA</label>
                        <input type="text" class="form-control " id="exampleFormControlInput1" name="cantidad_ideal" value=1>
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