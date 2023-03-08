<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="css/admin.css">
    <title>Administración</title>
</head>
<body>
    
<?php include("menu.php"); ?>

<div class="container py-5">
  <div class="row">
    <div class="col-lg-12 p-5" style="padding:0!important;">
      <h1> <i class="fa fa-tachometer" aria-hidden="true"></i> Zona de administración</h1>
      <hr />
    </div>
  </div>
  <div class="row contenedorAdministracion">

    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a href="gestionar_productos.php" class="text-decoration-none">
        <div class="p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
            <i class="bi bi-dice-6-fill icono"></i>
            <hr />
            <p class="card-title lead">Juegos</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
      <a href="gestionar_pedidos.php" class="text-decoration-none">
        <div class="p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
            <i class="bi bi-truck icono"></i>
            <hr />
            <p class="card-title lead">Pedidos</p>
          </div>
        </div>
      </a>
    </div>
</div>

</body>
</html>