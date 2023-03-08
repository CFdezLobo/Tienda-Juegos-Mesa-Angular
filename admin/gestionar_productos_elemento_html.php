
<div class="card col fichaJuego" style="margin: 1rem; border: none !important; border-radius: 0px !important;">
    <div class="enlace_detalles" style="display: flex; justify-content:center; margin-top: 2rem; z-index: 98;">
        <img src="../server/imagenes/<?= $juego["id"] ?>-1.jpg" height="150" alt="">
    </div>
    <div class="enlace_detalles card-body" style="text-align:center; z-index: 98;padding-bottom: 0rem; margin-top: 1rem;">
        <h4 class="card-title"><?= $juego["nombre"] ?> </h4>
    </div>
        <ul class="list-group list-group-flush" style="text-align: start; padding: 1rem;">
            <li class="list-group-item"> <span id="tituloEspecificacion"> Precio: </span> <?= $juego["precio"] ?> € </li>
            <li class="list-group-item"> <span id="tituloEspecificacion"> Jugadores: </span> <?= $juego["n_jugadores"] ?> jugadores </li>
            <li class="list-group-item"> <span id="tituloEspecificacion"> Duracion: </span> <?= $juego["duracion"] ?> min. </li>
            <li class="list-group-item"> <span id="tituloEspecificacion"> Dificultad: </span> <?= $juego["dificultad"] ?> </li>
            <li class="list-group-item"> <span id="tituloEspecificacion"> Idioma: </span> <?= $juego["idioma"] ?> </li>
            <li class="list-group-item"> <span id="tituloEspecificacion"> Categoria: </span>  <?= $juego["categoria"] ?> </li>
            <li class="list-group-item"> <span id="tituloEspecificacion"> Estado: </span>  <?= $estado ?> </li>
        </ul>
    <div id="contenedorBotonesGestionarJuegos" style="text-align:center; padding-bottom: 1.5rem;">
        <a href="editar_juego.php?idEditar=<?=$juego["id"]?>" class="btn btn-primary" onclick="return confirm('¿seguro?');">
            Editar
        </a>
        <a href="borrar_juego.php?idBorrar=<?=$juego["id"]?>" class="btn btn-primary" onclick="return confirm('¿seguro?');">
            Borrar
        </a>
    </div>
</div>

