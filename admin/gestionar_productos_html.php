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
    <title>Juegos</title>
</head>
<body>
    
    <?php include("menu.php"); ?>
    
    <h1 style="text-align:center;margin:1rem;">Juegos</h1>

    <div class="row row-cols-5 gx-0" style="justify-content:center;">
    <?php
        $estado = "";
        foreach($juegos as $juego){
            if($juego["alta"] == 1){
                $estado = "Alta";
            }else{
                $estado = "Baja";
            }
            include("gestionar_productos_elemento_html.php");
        }
    ?>
    </div>

    <div style="margin: 2rem; text-align:center;padding-bottom:7rem;">
	    <a href="nuevo_producto.php" class="btn btn-primary" style="height:40px;width:15%;font-weight:600;">REGISTRAR JUEGO</a>	
    </div>      

</body>
</html>