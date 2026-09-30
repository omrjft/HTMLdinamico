<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>
        registro de calificaciones
    </h1>
 <form action="resultado.php" method="GET">

     <label for="nombre"> Nombre: </label>
     <input type="text" id="nombre" name="nombre" required>
     <br></br>

    <label for="materia"> Materia: </label>
    <input type="text" id="materia" name="materia" required>
    <br></br>

    <label for="calificacion"> Calificacion: </label>
    <input type="number" id="calificacion" name="calificacion" min="0" max="10" step="0.1" required>
    <br></br>

    <button type="submit">enviar</button>

 </form>



</body>
</html>