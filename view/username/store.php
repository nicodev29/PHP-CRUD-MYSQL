<?php
    require_once("c://xampp/htdocs/proyecto2/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);
?>