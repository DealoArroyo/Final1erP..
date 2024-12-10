<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Gestión de Productos</title>

</head>
<body>


    <div class="container">

    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    <form>
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>

        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="mail" class="form-control" name="Correo" required>
        </div>

        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="telefono" required>
        </div>

        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>

    <a href="/"> Regresar Home </a>
    <a href="listado"> Ir a Listado</a>


</body>
</html>
