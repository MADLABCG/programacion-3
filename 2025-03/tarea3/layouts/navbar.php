<?php
$pagina = $pagina ?? '';
function esActivo($menu)
{
    global $pagina;
    if ($pagina === $menu) {
        return "active";
    } else {
        return " ";
    }
}
?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="./index.php">
                Ivan Firestone
            </a>
            <ul class="nav">
                <li class="<?php echo esActivo("index"); ?>">
                    <a href="./index.php">Home</a>
                </li>
                <li class="<?php echo esActivo("about"); ?>">
                    <a href="./about.php">Acerca de Mi</a>
                </li>
                <li class="<?php echo esActivo("noticias"); ?>">
                    <a href="./noticias.php">Noticias</a>
                </li>
                <li class="<?php echo esActivo("biografias"); ?>">
                    <a href="./biografias.php">Biografías</a>
                </li>
            </ul>

        </div>
    </div>
</div>
<div class="espacio-navbar">
    <!-- Espacio para el navbar -->
</div>