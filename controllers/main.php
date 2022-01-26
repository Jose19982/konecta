<?php
if (isset($_GET['url'])) {
    if (
        $_GET['url'] == "crearProductos" ||
        $_GET['url'] == "verProductos"
    ) {
        include "views/" . $_GET['url'] . ".php";
    }
    if (
        $_GET['url'] == "index"){
            include "views/verProductos.php";
        }
}
