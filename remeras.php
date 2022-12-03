<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="tarea_8.css">
    <style>
    body {
        background-color: white;
    }

    .r {

        display: flex;
        justify-content: space-around;
    }

    .c {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .tipo {
        background-color: red;
        padding: 4px;
        color: white;
        border-radius: 7px;

    }

    .boton {
        text-align: center;
    }


    h1 {
        background-color: rgb(243, 197, 197);
        color: white;
        width: 60%;
        margin: 20px auto;
        padding: 10px;
        border-radius: 20px;
    }

    h2 {
        background-color: rgb(243, 197, 197);
        color: white;
        width: 40%;
        margin: 20px auto;
        border-radius: 20px;

        padding: 10px;
    }
    </style>
    <title>Potrero Digital</title>

</head>

<body>
    <h1>Podes cambiar el patron de busqueda cuando quieras</h1>
    <div class="boton">
        <button type="button" class="btn btn-primary"><a class="btn btn-primary" href="tarea_8.html">INICIO</a>
        </button>
        <button type="button" class="btn btn-secondary"><a class="btn btn-secondary" href="marcanike.php">Marca
                NIKE</a></button>
        <button type="button" class="btn btn-success"><a class="btn btn-success" href="menosde500.php">Precio < a $
                    500</a></button>
        <button type="button" class="btn btn-danger"><a class="btn btn-danger" href="remeras.php">REMERAS</a></button>
        <button type="button" class="btn btn-warning"><a class="btn btn-warning" href="buzos.php">BUZOS</a></button>
        <button type="button" class="btn btn-info"><a class="btn btn-info" href="todo.php">Todas las
                prendas</a></button>
    </div>
    <h2>Elegiste ver todas las remeras</h2>
    <div class="container">
        <div class="row">

            <?php
$servidor="localhost";
 $usuario="root";
 $contrasena="";
 $base="potrero";
 
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$base);







$datos="SELECT * FROM ropa WHERE tipoDePrenda = 'remera'";
$carga=mysqli_query($conexion,$datos);

while($fila=mysqli_fetch_array($carga)){
    ?>

            <div class="card " style="width: 24rem; margin:1.5rem; ">


                <img src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"])?>" class="card-img-top"
                    width="70px" height="370px">


                <div class="card-body r">
                    <div class="c tipo">
                        <h5 class="card-title ">TIPO </h5>
                        <h6> <?php echo strtoupper("$fila[tipoDePrenda] ") ?></h6>
                    </div>
                    <div class="c">
                        <h5 class="card-title c"> MARCA </h5>
                        <h6> <?php echo strtoupper(" $fila[marca]") ?></h6>

                    </div>
                </div>



                <div class="card-body r">
                    <div class="c">
                        <h5 class="card-title c"> PRECIO $</h5>
                        <h6> <?php echo strtoupper("  $fila[precio]") ?></h6>

                    </div>

                    <div class="c">

                        <h5 class="card-title c"> TALLE</h5>
                        <h6> <?php echo strtoupper("  $fila[talle]") ?></h6>

                    </div>
                </div>
                <div class="card-body r">

                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>-->
                    <a href="#" class="btn btn-primary">COMPRAR</a>

                </div>
            </div>
            <br>

            <?php
}
        
        ?>
        </div>
    </div>
</body>

</html>