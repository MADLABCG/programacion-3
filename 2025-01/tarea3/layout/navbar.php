<?php

$pagina1 = "";
$pagina2 = "";
$pagina3 = "";
$pagina4 = "";
$pagina5 = "";
$pagina6 = "";
$pagina =  isset($pagina) ? $pagina : "";

if ($pagina == "1") {
    $pagina1 = "active";
} else if ($pagina == "2") {
    $pagina2 = "active";
} else if ($pagina == "3") {
    $pagina3 = "active";
} else if ($pagina == "4") {
    $pagina4 = "active";
} else if ($pagina == "5") {
    $pagina5 = "active";
} else if ($pagina == "6") {
    $pagina6 = "active";
}

?>


<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/index.php">
                Ivan Firestone
            </a>
            <ul class="nav">
                <li class="<?php echo $pagina1; ?>">
                    <a href="/index.php">Home</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="<?php echo $pagina2; ?>">
                    <a href="/biografia.php">Biografía</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="<?php echo $pagina3; ?>">
                    <a href="/about.php">Mi Biografía</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="<?php echo $pagina4; ?>">
                    <a href="/universidad.php">Universidad</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="<?php echo $pagina5; ?>">
                    <a href="/noticias.php">Noticias</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="<?php echo $pagina6; ?>">
                    <a href="/ventas.php">Ventas</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="espacio-navbar">

</div>