<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="../index.php">
                PROYECTO P3
            </a>
            <ul class="nav">
                <li class="<?php echo isset($pagina) ? ($pagina == 'index' ? 'active' : '') : ''; ?> ">
                    <a href="../index.php">Home</a>
                </li>
                <li class="<?php echo isset($pagina) ? ($pagina == 'noticias' ? 'active' : '') : ''; ?> ">
                    <a href="../noticias.php">Noticias</a>
                </li>
                <li class="<?php echo isset($pagina) ? ($pagina == 'biografia' ? 'active' : '') : ''; ?> ">
                    <a href="../biografia.php">Biografía</a>
                </li>
                <li class="<?php echo isset($pagina) ? ($pagina == 'about' ? 'active' : '') : ''; ?> "><a
                        href="../about.php">Acerca de Mi</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="espacio-navbar">
    <!-- Espacio para el navbar -->
</div>