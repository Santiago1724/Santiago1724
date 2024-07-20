<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

</style>

<body>
<h1>
<?php session_start(); print_r($_SESSION['id']) ?>
  Bienvenido  </h1>
    <p>
      <form action="/logaout" method="get">
        <button type="submit">
          Cerrar sesion
        </button>
      </form>
      <button type ="sumbit" formaction="/logout">Cerrar Sesion</button>
    </p>
</body>
</html>