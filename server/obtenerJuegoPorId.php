<?php

require("../librerias_php/setup_red_bean.php");

echo json_encode(R::getRow("select * from juegos where id = ? ",[ $_GET["id"] ] ));
