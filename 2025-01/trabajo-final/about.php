<!-- Variable Nombre de Pagina     -->
<?php $titulo = "Mi Biografia"; ?>
<!-- Variable Nombre de Pagina     -->

<!-- Variable Numero Menú    -->
<?php $pagina = "3"; ?>
<!-- Variable Numero Menú    -->

<!-- Componente de Header     -->
<?php include 'layout/header.php'; ?>
<!-- Componente de Header     -->

<!-- Componente de Navegación     -->
<?php include 'layout/navbar.php'; ?>
<!-- Componente de Navegación     -->

<body>
    <div class="container-fluid">
        <section>

            <div class="presentacion">
                <div class="info-estudiante">Ivan Firestone SC-00-00000</div>
                <img class="imagen-perfil" src="/images/Profile6.jpeg" alt="Imagen de perfil">
            </div>

        </section>

        <section>
            <h2>Mis Datos Personales</h2>
            <div class="info-personal">
                <div class="info-p-interno">
                    Nombre: Ivan Firestone
                </div>
                <div class="info-p-interno">
                    Correo: ivan.firestone@icloud.com
                </div>
                <div class="info-p-interno">
                    Telefono: 809-555-5555
                </div>
                <div class="info-p-interno">
                    Instagram: @ifirestone
                </div>
            </div>
        </section>
        <section>
            <h2>Mis Datos Academicos</h2>
            <div class="info-academica">
                <div class="info-a-interno">
                    Matricula: SC-00-00000
                </div>
                <div class="info-a-interno">
                    Universidad: Universidad Eugenio Maria de Hostos (UNIREMHOS)
                </div>
                <div class="info-a-interno">
                    Carrera: Ingenieria en Sistemas
                </div>
                <div class="info-a-interno">
                    Semestre: 8vo
                </div>
            </div>
        </section>
    </div>
</body>

<!-- Componente de Footer     -->
<?php include 'layout/footer.php'; ?>
<!-- Componente de Footer     -->