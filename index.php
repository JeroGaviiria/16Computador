<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style1.css">
    <title>Home</title>
</head>
<body>
    <div class="container-fluid"> 
    <div class="row">
    <div class="col-sm-11">
    <h1 class="text text-center text-light">Product Table</h1>
    </div>
  <div class="col-sm-1">
  <a class="btn  mt-2 btn-warning" href="./login.php" role="button">Log out</a>
  </div>
</div>  
        <div class="row">
            <div class="col">
                <form class="row g-3 text-light">
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Referencia:</label>
                    <input type="text" name="referencia" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label fs-4">Nombre:</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Procesador:</label>
                    <input type="text" name="procesador" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label fs-4">RAM:</label>
                        <input type="text" name="ram" class="form-control">
                    </div>
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Unidad de Almacenamiento:</label>
                    <input type="text" name="almacenamiento" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label fs-4">Fabricante:</label>
                        <input type="text" name="fabricante" class="form-control">
                    </div>
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Color:</label>
                    <input type="text" name="color" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label fs-4">VRAM:</label>
                        <input type="text" name="vram" class="form-control">
                    </div>
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Monitor:</label>
                    <input type="text" name="monitor" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label fs-4">Lugar de fabricación:</label>
                        <input type="text" name="lugar" class="form-control">
                    </div>
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Tarjeta Gráfica:</label>
                    <input type="text" name="grafica" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label fs-4">Mouse:</label>
                        <input type="text" name="mouse" class="form-control">
                    </div>
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Teclado:</label>
                    <input type="text" name="teclado" class="form-control">
                    </div>
                    <div class="col-sm-4">  
                        <label class="form-label fs-4">Año de fabricación:</label>
                        <input type="text" name="ano" class="form-control">
                    </div>
                    <div class="col-sm-4">
                     <label class="form-label fs-4">Precio:</label>
                    <input type="number" name="precio" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label fs-4">Descripción adicional:</label>
                        <textarea class="form-control" name="descripcion" placeholder="Añade la descripción del producto:" ></textarea>
                    </div>
                        <div class="d-grid col-sm-10 mx-auto mb-3">
                            <button type="submit" class="btn btn-info">Enviar Datos</button>
                        </div>                   
                </form>
            </div>
        </div>
    </div>
</body>

</html>