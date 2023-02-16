<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría de Estudiantes</title>
</head>
<body>

    <h2 style="text-align: center;">Formulario de consulta</h2>

    <form action="Consulta.php" method="post" style="text-align: center;">
        
        <h3>Cedula</h3>
        <label for="">C.I. </label>
        <input type="number" name="cedula"><br>   

        <h3>Nombre</h3>
        <input type="text" name="nombre"><br>

        <h3>Nota de Matemáticas</h3>
        <label for="">Corte 1:</label><br>
        <input type="number" name="notam1" min="1" max="20"><br><br>
        <label for="">Corte 2:</label><br>
        <input type="number" name="notam2" min="1" max="20"><br><br>
        <label for="">Corte 3:</label><br>
        <input type="number" name="notam3" min="1" max="20"><br>

        <h3>Nota de Física</h3>
        <label for="">Corte 1:</label><br>
        <input type="number" name="notaf1" min="1" max="20"><br><br>
        <label for="">Corte 2:</label><br>
        <input type="number" name="notaf2" min="1" max="20"><br><br>
        <label for="">Corte 3:</label><br>
        <input type="number" name="notaf3" min="1" max="20"><br>

        <h3>Nota de Programación</h3>
        <label for="">Corte 1:</label><br>
        <input type="number" name="notap1" min="1" max="20"><br><br>
        <label for="">Corte 2:</label><br>
        <input type="number" name="notap2" min="1" max="20"><br><br>
        <label for="">Corte 3:</label><br>
        <input type="number" name="notap3" min="1" max="20"><br><br><br>

        <input type="submit" name="btn" value="Consultar" onclick=reload()><br><br>

    </form>

</body>
</html>