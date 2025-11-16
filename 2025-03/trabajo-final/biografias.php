<?php $titulo = "Biografías"; ?>
<?php $pagina = "biografias"; ?>

<?PHP include 'layouts/header.php'; ?>
<?PHP include 'layouts/navbar.php'; ?>


<body>
    <div class="hero-unit">
        <h1>Biografías</h1>
        <p>Biografías personajes de la computación</p>
        <p>
            <a href="https://uniremhos.edu.do/" target="_blank" class="btn btn-primary btn-large">
                Conocer más
            </a>
        </p>
    </div>


    <div class="container">
        <div class="hero-unit">
            <div class="row-fluid">
                <div class="span3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Albert_Einstein_Head.jpg"
                        alt="Albert Einstein" class="img-polaroid" style="width:100%;">
                </div>
                <div class="span9">
                    <h1>Albert Einstein</h1>
                    <p class="lead">Físico teórico nacido el 14 de marzo de 1879 en Ulm, Alemania. Revolucionó la
                        física del siglo XX con teorías que cambiaron nuestra comprensión del espacio, el tiempo y
                        la energía.</p>
                    <p>
                        <span class="label label-info tag">Relatividad</span>
                        <span class="label label-success tag">Física Teórica</span>
                        <span class="label label-warning tag">Nobel 1921</span>
                        <span class="label tag">Pensador Público</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Sección: Biografía -->
        <section id="bio">
            <div class="page-header">
                <h2>Biografía <small>Resumen</small></h2>
            </div>
            <div class="row-fluid">
                <div class="span8">
                    <p><strong>Albert Einstein</strong> nació en 1879 en Ulm y creció en Múnich. Desde joven mostró
                        curiosidad por la naturaleza y las matemáticas. Después de formarse en el Politécnico de
                        Zúrich (ETH), trabajó en la Oficina de Patentes en Berna, donde en 1905 —su "annus
                        mirabilis"— publicó artículos fundamentales sobre el efecto fotoeléctrico, el movimiento
                        browniano y la relatividad especial.</p>

                    <p>En 1915 presentó la <strong>teoría general de la relatividad</strong>, que describió la
                        gravedad como curvatura del espacio-tiempo. Su trabajo confirmó predicciones observables
                        (como la desviación de la luz por el Sol) y transformó la cosmología y la física
                        fundamental. En 1921 recibió el Premio Nobel de Física por su explicación del efecto
                        fotoeléctrico, no por la relatividad (por ser entonces todavía controvertida).</p>

                    <p>Con la llegada del nazismo, Einstein emigró a Estados Unidos en 1933 y se estableció en el
                        Institute for Advanced Study de Princeton. Durante sus últimos años trabajó en la búsqueda
                        de una teoría unificada. Falleció el 18 de abril de 1955 en Princeton, dejando un legado
                        científico y humanista muy perdurable.</p>
                </div>

                <div class="span4">
                    <div class="well">
                        <h4>Datos rápidos</h4>
                        <ul class="unstyled">
                            <li><strong>Nacimiento:</strong> 14 marzo 1879</li>
                            <li><strong>Fallecimiento:</strong> 18 abril 1955</li>
                            <li><strong>Nacionalidad:</strong> Alemán, luego Suizo y Estadounidense</li>
                            <li><strong>Campo:</strong> Física teórica</li>
                            <li><strong>Premio:</strong> Nobel de Física, 1921</li>
                        </ul>
                    </div>

                    <div class="well">
                        <h5>Citas famosas</h5>
                        <blockquote>
                            "La imaginación es más importante que el conocimiento."
                            <small>— Albert Einstein</small>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección: Logros -->
        <section id="logros">
            <div class="page-header">
                <h2>Logros Destacados</h2>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <ul class="unstyled">
                        <li><strong>1905:</strong> Artículos sobre efecto fotoeléctrico, movimiento browniano y
                            relatividad especial.</li>
                        <li><strong>1915:</strong> Formulación completa de la teoría general de la relatividad.</li>
                        <li><strong>1921:</strong> Premio Nobel de Física (efecto fotoeléctrico).</li>
                        <li><strong>1933 en adelante:</strong> Activismo contra el nazismo y trabajo en Princeton.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sección: Cronología -->
        <section id="cronologia" class="timeline">
            <div class="page-header">
                <h2>Cronología</h2>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <h4>1879</h4>
                                <p>Nace en Ulm, Alemania.</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <h4>1905</h4>
                                <p>Publica artículos del "annus mirabilis".</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <h4>1915</h4>
                                <p>Teoría general de la relatividad.</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <h4>1921</h4>
                                <p>Premio Nobel de Física.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sección: Legado -->
        <section id="legado">
            <div class="page-header">
                <h2>Legado</h2>
            </div>
            <p>Einstein dejó una huella indeleble en la ciencia y la cultura: su trabajo impulsó el desarrollo de la
                física moderna, influyó en la cosmología, la tecnología (p. ej. fotónica y física cuántica) y se
                convirtió en símbolo público de pensamiento crítico y humanismo. Sus reflexiones sobre la paz y la
                responsabilidad científica continúan vigentes.</p>
        </section>

        <footer style="margin-top:40px;">
            <hr>
            <p class="muted">&copy; 2025 — Página de ejemplo: Biografía de Albert Einstein</p>
        </footer>
    </div>

</body>

<?PHP include 'layouts/footer.php'; ?>