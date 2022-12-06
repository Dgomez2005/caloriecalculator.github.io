<?php
include_once 'conn.php';
$usuarios ="SELECT * FROM dieta";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Ajax -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <style>
        body{
            text-align: center;
            font: fantasy;
            background-color: beige;
            background-image: url("dieta2.jpg");
        }
        head{

        }
    </style>
</head>
<body>
    <div id="menu">
        <div class="col" style="background-color:lightgrey;">
            Home
        </div>
    </div>

    <section>
        <h1>Bienvenido</h1>
        <h2><a href="calorias.php">Agregar alimentos</h2>
        <h2><a href="meta.php">Establece una meta de calorias</h2>
          
    </section>
    <div class = "container-table">
        <div class = "table__title">Datos de la dieta</div>
        <div class = "table__header">Alimento</div>
        <div class = "table__header">Calorias</div>
        <div class = "table__header">Total</div>
        <?php $resultado = mysqli_query($conn, $usuarios); 
        while($row = mysqli_fetch_assoc($resultado)){ ?>
        <div class = "table__item"><?php echo $row["alimento"];?></div>
        <div class = "table__item"><?php echo $row["calorias"];?></div>
        <div class = "table__item"><?php echo $row["total"];?></div>

        <?php } mysqli_free_result($resultado)?>
    </div>
    
    <div id="menu">
        <div class="fixed-bottom">
            <div class="col" style="background-color:lightgrey;">
                <div class="cerrar-sesion"><a href="logout.php"><h5>Cerrar sesión</h5></a></div>
            </div>
        </div>
    </div>


    
</body>
</html>