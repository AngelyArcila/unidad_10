<!--punto tres method_get.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <title>Punto tres</title>
</head>

<body>
    <a href="index.html#section-respuestas">
    <img class="home" src="img/home2.png" alt="HOME">
    </a>
    <!--Método GET -->
    <div class="main-frame-cal">
        <form action="" method="GET"> <!--cambio POST por GET -->
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Por Favor Digite Su Nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Por Favor Digite Su Apellido">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cédula</label>
                <input type="text" name="cedula" class="form-control" id="exampleFormControlInput1" placeholder="Por Favor Digite Su Cédula">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
        </form>

        <?php

        $edad = 0;

        if (isset($_GET['verificar'])) {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];  //cambio POST por GET 
            $cedula = $_GET['cedula'];

            echo "Su Nombre Es : " . $nombre . "<br>";
            echo "Su Apellido Es: " . $apellido . "<br>";
            echo "Su Cédula Es : " . $cedula . "<br>";
        }

        ?>   
</body>
</html>