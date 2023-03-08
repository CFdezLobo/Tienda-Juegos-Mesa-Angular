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
    <title>Editar juego</title>
</head>
<body style="margin-bottom: 3rem;">
    
    <?php include("menu.php"); ?>

    <h4 style="text-align:center;margin-top:3rem;">Introduce los datos:</h4>

    <div style="display:flex;justify-content:center;margin-top:3rem;">
        <form action="guardar_producto.php?idEditar=<?=$juego['id']?>" method="post" enctype="multipart/form-data" class="row g-3" style="width:40%;text-align:start;"> 
            <div class="col-md-1 contenedorCheckBox">
                <label class="form-label">Alta</label>
                <input type="checkbox" name="alta" id="alta" class="form-check-input" <?= $checkBox?> />	
            </div>
            <div class="col-md-6">
                <label class="form-label">Nombre</label> 
                <input type="text" name="nombre" class="form-control" value= "<?= $juego['nombre']?>" />
            </div>
            <div class="col-md-5">
                <label class="form-label">Idioma</label>
                <input type="text" name="idioma" class="form-control" value= "<?= $juego['idioma']?>" />
            </div>
            <div class="col-md-4">
                <label class="form-label">Precio</label> 
                <input type="number" name="precio" class="form-control" step="any" value= "<?= $juego['precio']?>" />
            </div>
            <div class="col-md-4">
                <label class="form-label">Dificultad</label> 
                <input type="text" name="dificultad" class="form-control" value= "<?= $juego['dificultad']?>" />
            </div>
            <div class="col-md-4">
                <label class="form-label">Nº de jugadores</label> 
                <input type="text" name="n_jugadores" class="form-control" value= "<?= $juego['n_jugadores']?>" />
            </div>
            <div class="col-md-4">
                <label class="form-label">Duracion</label> 
                <input type="text" name="duracion" class="form-control" value= "<?= $juego['duracion']?>" />
            </div>
            <div class="col-md-8">
                <label for="inputProvincia" class="form-label">Categoria</label> 
                <select name="categoria" class="form-select" value="<?= $juego['categoria']?>" >
                    <option selected>Seleccione una opción</option>
                    <option <?php if("Cooperativo" == $juego['categoria'] ){ echo "selected";} ?> value="Cooperativo">Cooperativo</option>
                    <option <?php if("Familiar" == $juego['categoria'] ){ echo "selected";} ?> value="Familiar">Familiar</option>
                    <option <?php if("Fiesta" == $juego['categoria'] ){ echo "selected";} ?> value="Fiesta">Fiesta</option>
                    <option <?php if("Eurogame" == $juego['categoria'] ){ echo "selected";} ?>  value="Eurogame">Eurogame</option>
                    <option <?php if("Para 2" == $juego['categoria'] ){ echo "selected";} ?> value="Para 2">Para 2</option>
                 </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Imagen 1</label> 
                <input type="file" name="imagen1" class="form-control"/>
            </div>
            <div class="col-md-6">
                <label class="form-label">Imagen 2</label> 
                <input type="file" name="imagen2" class="form-control"/>
            </div>
            <div class="col-md-6">
                <label class="form-label">Imagen 3</label> 
                <input type="file" name="imagen3" class="form-control"/>
            </div>
            <div class="col-md-6">
                <label class="form-label">Imagen 4</label> 
                <input type="file" name="imagen4" class="form-control"/>
            </div>
            <div class="col-md-12">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="10" rows="8" class="form-control"><?= $juego['descripcion']?></textarea>
            </div>
            <div class="col-12" style="display: flex;justify-content: space-around;margin-top: 3rem;">
                <a href="http://localhost/tienda_angular/admin/gestionar_productos.php" class="btn btn-primary" style="width: 30%;">VOLVER</a>
                <input type="submit" class="btn btn-primary" value="GUARDAR CAMBIOS" onclick="return confirm('¿seguro?');" style="width: 30%;"/>
            </div>
        </form>
    </div>

</body>


</html>