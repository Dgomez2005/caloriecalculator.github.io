<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Ajax -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    body{
        background-color: lightgray;
    }
</style>
<body>
    <br><br><br><br><br><br>
    <div align=center>
        <form action="" method="POST">
            <?php
                if(isset($errorLogin)){
                    echo $errorLogin;
                }
            ?>
            <h2>Iniciar sesión</h2>
            <p>Nombre de usuario: <br>
            <input type="text" name="username"></p>
            <p>Password: <br>
            <input type="password" name="password"></p>
            <p class="center"><input type="submit" class="btn btn-primary" value="Iniciar Sesión"></p>
        </form>
    </div>
</body>
</html>