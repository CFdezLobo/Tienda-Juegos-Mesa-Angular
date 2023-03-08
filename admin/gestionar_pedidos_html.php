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
    <title>Pedidos</title>
</head>
<body>
    
    <?php include("menu.php"); ?>

    <h1 style="text-align:center;margin:1rem;">Pedidos realizados:</h1>
	
	<div class="row row-cols-5 gx-0" style="justify-content:center;padding:3rem;">
        <?php
        foreach($pedidos as $pedido){
            ?>
			<div class="card col fichaPedido" style="margin: 1rem; border: none !important;">
				<div class="enlace_detalles card-body" style="text-align:center; z-index: 98;padding-bottom: 0rem; margin-top: 1rem;">
					<h4 class="card-title">Pedido: <?= $pedido["id"] ?> </h4>
				</div>
					<ul class="list-group list-group-flush" style="text-align: start; padding: 1rem;">
						<li class="list-group-item"> <span id="tituloEspecificacion"> Nombre: </span> <?= $pedido["nombreCompleto"] ?> </li>
						<li class="list-group-item"> <span id="tituloEspecificacion"> Email: </span> <?= $pedido["email"] ?> </li>
                        <li class="list-group-item"> <span id="tituloEspecificacion"> DNI: </span>  <?= $pedido["dni"] ?> </li>
                        <li class="list-group-item"> <span id="tituloEspecificacion"> Nº Tarjeta: </span> <?= $pedido["tarjeta"] ?> </li>
						<li class="list-group-item"> <span id="tituloEspecificacion"> Dirección: </span> <?= $pedido["direccion"] ?> </li>
						<li class="list-group-item"> <span id="tituloEspecificacion"> Provincia: </span> <?= $pedido["provincia"] ?> </li>
						<li class="list-group-item"> <span id="tituloEspecificacion"> Código Postal: </span> <?= $pedido["cp"] ?> </li>
					</ul>
				<div id="contenedorBotonesGestionarPedidos" style="text-align:center; padding-bottom: 1.5rem;">
					<a href="ver_detalles_pedido.php?id_pedido=<?= $pedido["id"] ?>" class="btn btn-primary"> Detalles </a>
                    <!-- <a href="borrar_pedido.php?id_pedido=<?= $pedido["id"] ?>" class="btn btn-primary" onclick="return confirm('¿seguro?');"> Borrar </a> -->
				</div>
			</div>
            <?php
        }
    ?>
	</div>

</body>
</html>