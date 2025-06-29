<!-- VARIABLES DE ENTORNO -->
<?php $titulo = "Acerca de Mi"; ?>
<?php $pagina = "about"; ?>
<!-- VARIABLES DE ENTORNO -->

<!-- Componente del Header -->
<?php include 'layouts/header.php' ?>
<!-- Componente del Header -->

<!-- Componente Navegación -->
<?php include 'layouts/navbar.php' ?>
<!-- Componente Navegación -->

<body>
    <div class="container-fluid">
        <div class="author">
            <div class="persona">Ivan Firestone SC-00-00000</div>
            <img src="./images/profile.jpeg" alt="Foto de Perfil" class="imagen">
        </div>

        <div class="titulo">Mis Datos Personales</div>
        <div class="info-personal">
            <div class="ip-interno">Nombre: Ivan Firestone</div>
            <div class="ip-interno">Edad: 25 años</div>
            <div class="ip-interno">Fecha de nacimiento: 1998-05-15</div>
            <div class="ip-interno">Ciudad: Ciudad de México</div>
            <div class="ip-interno">Lenguaje de programación favorito: Python</div>
            <div class="ip-interno">Lenguaje de programación que menos te gusta: JavaScript</div>
        </div>

        <div class="titulo">Mis Datos Academicos</div>
        <div class="info-academicos">
            <div class="ia-interno">Carrera: Licenciatura Sistemas Computacionales</div>
            <div class="ia-interno">Universidad: Universidad Eugenio Maria de Hostos</div>
            <div class="ia-interno">Fecha de Inicio: 2020-01-01</div>
            <div class="ia-interno">Fecha de Finalizacion: 2024-04-01</div>
        </div>
    </div>

</body>

</html>

<!-- Componente Navegación -->
<?php include 'layouts/footer.php' ?>
<!-- Componente Navegación -->