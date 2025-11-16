<?php $titulo = "Sobre Mi"; ?>
<?php $pagina = "about"; ?>

<?php include 'layouts/header.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<body>
    <div class="contenedor">
        <p>Bienvenido a mi página de presentación</p>
    </div>
    <div class="autor">
        <div class="estudiante">IVAN FIRESTONE</div>
        <img class="foto" src="./img/ifirestone-bearded.png" alt="">
    </div>

    <div class="titulo">Mis Datos Personales</div>
    <div class="datos-personales">
        <div class="personales">Nombre: Ivan Firestone</div>
        <div class="personales">Edad: 30 años</div>
        <div class="personales">Ocupación: Desarrollador Web</div>
        <div class="personales">Intereses: Tecnología, Programación, Música</div>
    </div>

    <div class="titulo">Mis Datos Academicos</div>
    <div class="datos-academicos">
        <div class="academicos">Grado: Licenciatura en Ciencias de la Computación</div>
        <div class="academicos">Universidad: Universidad de la Tecnología</div>
        <div class="academicos">Año de Graduación: 2018</div>
        <div class="academicos">Certificaciones: Certificado en Desarrollo Web Full Stack</div>
    </div>
</body>

<?php include 'layouts/footer.php'; ?>