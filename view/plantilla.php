<?php

require_once "inc/headerAdmin.php";


  // contenido
if (isset($_GET["ruta"])) {
    if ($_GET["ruta"] == "inicio" ||
      $_GET["ruta"] == "servicios" ||
      $_GET["ruta"] == "nosotros" ||
      $_GET["ruta"] == "ofertas-laborales" ||
      $_GET["ruta"] == "salir") {

      include "view/".$_GET["ruta"].".php";

    }else{

      include "view/404.php";

    }

}else{

    include "view/inicio.php";

}



require_once "inc/footerAdmin.php";
