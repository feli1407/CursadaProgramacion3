<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba con forms</title>
</head>
<body>
    <form action="./test.php" method="post">

    <input type="text" placeholder="Nombre" name="nombre">
    <br>

    <input type="radio" value="hola" name="radio">valor radio
    <br>

    <select name="combo" id="">
        <option value="uno">1</option>
        <option value="dos">2</option>
    </select>
    <br>
    <input type="submit" value="Enviar">
    </form>    



</body>
</html>