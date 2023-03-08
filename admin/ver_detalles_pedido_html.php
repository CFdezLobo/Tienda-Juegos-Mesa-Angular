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
    <title>Document</title>
</head>
<body>
    
    <?php include("menu.php"); ?>


    <h4 style="text-align:center;margin-top:3rem;">Detalles del pedido</h4>

<div style="display:flex;justify-content:center;margin-top:3rem;">
    <div class="row g-3" style="width:40%;text-align:start;">
        <div class="col-md-2">
            <label class="form-label">Pedido:</label>
            <label class="form-control"><?= $pedido["id"] ?></label>
        </div>
        <div class="col-md-4">
            <label class="form-label">Nombre</label> 
            <label class="form-control"> <?= $pedido["nombre"] ?> </label>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label> 
            <label class="form-control"> <?= $pedido["email"] ?></label>
        </div>
        <div class="col-md-5">
            <label class="form-label">Direccion</label> 
            <label class="form-control"><?= $pedido["direccion"] ?></label> 
        </div>
        <div class="col-md-4">
            <label class="form-label">Provincia</label> 
            <label class="form-control"><?= $pedido["provincia"] ?></label> 
        </div>
        <div class="col-md-3">
            <label class="form-label">Código Postal</label> 
            <label class="form-control"><?= $pedido["cp"] ?></label> 
        </div>
        <div class="col-md-6">
            <label class="form-label">Titular de la tarjeta</label> 
            <label class="form-control"><?= $pedido["nombre"] ?></label> 
        </div>
        <div class="col-md-6">
            <label class="form-label">Nº de la tarjeta</label> 
            <label class="form-control"><?= $pedido["tarjeta"] ?></label> 
        </div>
        <label class="form-label" style="font-weight:600;">Productos:</label> 
        <?php
        foreach($productos as $p){
        ?>
            <div class="col-md-4">
                <label class="form-label">Nombre</label> 
                <label class="form-control"><?= $p["nombre"] ?></label> 
            </div>
            <div class="col-md-4">
                <label class="form-label">Categoria</label> 
                <label class="form-control"><?= $p["categoria"] ?></label> 
            </div>
            <div class="col-md-2">
                <label class="form-label">Precio/unidad </label> 
                <label class="form-control"><?= $p["precio"] ?> €</label> 
            </div>
            <div class="col-md-2">
                <label class="form-label">Cantidad</label> 
                <label class="form-control"><?= $p["cantidad"] ?></label> 
            </div>
        <?php    
        }
        ?>
        <div class="col-md-8">
            
        </div>
        <div class="col-md-4">
            <label class="form-label">Precio Total</label> 
            <label class="form-control" style="text-align:center;"><?= $precioTotal ?> €</label> 
        </div>		
    </div>
</div>

<div style="display:flex;justify-content:center;padding:4rem;">
    <a href="http://localhost/tienda_angular/admin/gestionar_pedidos.php" class="btn btn-primary" style="width: 10%;">VOLVER</a>
</div>

</body>
</html>