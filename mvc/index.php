<?php
require_once "./config/app.php";
require_once "./Autoload.php";
require_once "./app/views/inc/session_start.php";


if(isset($_GET['view'])){
    $url = explode("/", $_GET['view']);
}else{
    $url = ["login"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "./app/views/inc/head.php";?>
</head>
<body>
    <?php

    use app\controller\viewsController;
    $viewsController = new viewsController;

    $vista=$viewsController->obtenerVistaControlador($url[0]);
    if ($vista == "login" || $vista = "404"){
        require_once "./app/views/content/". $vista."_view.php";
    }
    else{
        require_once $vista;
    }
    require_once "./app/views/inc/script.php";

    ?>

</body>
</html>

