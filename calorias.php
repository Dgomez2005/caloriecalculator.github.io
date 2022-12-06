
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style type="text/css">
    body{
        text-align: center;
        background-color: burlywood;
        color: white;
    }
    html, body {
        height: 100%;
    }

    html {
        display: table;
        margin: auto;
    }

    body {
        display: table-cell;
        vertical-align: middle;
        background-image: url("dieta.jpg");
    }
</style>
<body>
<form action="add.php"method="POST">
    <p>Comida: <input  type="text" name="comida"></p>
    <p>Calorias: <input type="text" name="calorias"></p>
    <p><input class="btn btn-primary" type="submit" value="Enviar" name="agregar"></p>
</form>

</body>
</html>