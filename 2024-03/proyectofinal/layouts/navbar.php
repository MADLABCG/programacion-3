<?php
$pagina1 = "";
$pagina2 = "";
$pagina3 = "";
$pagina4 = "";
$pagina5 = "";

if ($pagina == "1") {
    $pagina1 = "active";
}
if ($pagina == "2") {
    $pagina2 = "active";
}
if ($pagina == "3") {
    $pagina3 = "active";
}
if ($pagina == "4") {
    $pagina4 = "active";
}
if ($pagina == "5") {
    $pagina5 = "active";
}
?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="index.php">Ivan Firestone</a>
            <ul class="nav">
                <li class="<?php echo $pagina1 ?>">
                    <a href="index.php">Home</a>
                </li>
                <li class="<?php echo $pagina2 ?>">
                    <a href="intereses.php">Intereses</a>
                </li>
                <li class="<?php echo $pagina3 ?>">
                    <a href="contactos.php">Contacto</a>
                </li>
                <li class="<?php echo $pagina4 ?>">
                    <a href="noticias.php">Noticias</a>
                </li>
                <li class="<?php echo $pagina5 ?>">
                    <a href="about.php">Quien Soy</a>
                </li>
            </ul>
        </div>
    </div>
</div>