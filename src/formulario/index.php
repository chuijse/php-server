
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta chartset="utf-8" />
        <title>formulario</title>
    </head>
    <body>
        <h1>formulario</h1>
        <form method="GET" action="http://localhost:8080/formulario/recibir/">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" />
            </p>
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" />
            </p>
            <input type="submit" value="enviar datos" />
        </form>
    </body>
</html>