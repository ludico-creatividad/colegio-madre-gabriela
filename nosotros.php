<?php
/*
 * Template Name: Nosotros
 */
get_header(); ?>
<div class="container">
  <?php include_once('slider.php'); ?>
  <main id="nosotros-section" class="micontainer">
    <ul id="nosotros-pestanas">
        <li id="pestana1" class="active"><a href="#">¿Quienes somos?</a></li>
        <li id="pestana2"><a href="#">Objetivos y políticas</a></li>
        <li id="pestana3"><a href="#">Perfiles</a></li>
    </ul>
    <div id="quienesSomos" class="cpestana1">
        <div class="descripcion"><!--h2.title ¿QUIENES SOMOS?--><p class="text">Para el año 2016: La Institución
                Educativa Madre Gabriela
                de San Martín de la localidad Nº 2 liderará en el
                Distrito Turístico y Cultural de Cartagena de Indias
                una educación integral con énfasis en la práctica de los
                valores humano-cristianos, para que estos trasciendan,
                permitiendo así al talento humano transformar
                positivamente su entorno.
            </p></div>
        <div id="mision-vision">
            <div class="mision col-md-6"><h3 class="title">MISIÓN</h3>

                <p class="text">La Institución Educativa Madre Gabriela de
                    San Martín ofrece en el Distrito Turístico y
                    Cultural de Cartagena de Indias; una educación
                    integral de calidad, promoviendo la superación
                    personal, la práctica de los valores
                    humano - Cristianos y el mejoramiento de la
                    convivencia social.</p></div>
            <div class="vision col-md-6"><h3 class="title">VISIÓN</h3>

                <p class="text">Para el año 2016: La Institución Educativa Madre Gabriela
                    de San Martín de la localidad Nº 2 liderará en el
                    Distrito Turístico y Cultural de Cartagena de Indias
                    una educación integral con énfasis en la práctica de los
                    valores humano-cristianos, para que estos trasciendan,
                    permitiendo así al talento humano transformar
                    positivamente su entorno.</p></div>
        </div>
        <div id="valores"><h3 class="title">VALORES</h3>
            <ul class="pull-left">
                <li>Honestidad</li>
                <li>Respeto</li>
                <li>Justicia</li>
            </ul>
            <ul class="pull-left">
                <li>Tolerancia</li>
                <li>Humildad</li>
                <li>Amor</li>
            </ul>
            <ul class="pull-left">
                <li>Solidaridad</li>
                <li>Sentido de pertenencia</li>
                <li>Responsabilidad</li>
            </ul>
            <ul class="pull-left">
                <li>Orden</li>
                <li>Trabajo</li>
                <li>Ciencia</li>
            </ul>
            <figure class="pull-left"><img src="<?php stylesheetUri(); ?>imgs/EscudoSiglas.png"/></figure>
        </div>
        <div class="section-footer"><!--pestSim para identificarlo-->
            <!--pestana2-link para enviar hacia la segunda pestana que es objetivos y politicas-->
            <div class="pull-right pestSim pestana2-link">
                <div class="pull-right">
                    <div><span>></span></div>
                </div>
                <p class="pull-right">Objetivos y políticas</p></div>
        </div>
    </div>
    <div id="objPol" class="cpestana2"><!--h2.title OBJETIVOS Y POLÍTICAS-->
        <div id="objCalidad"><h3 class="title">OBJETIVOS DE CALIDAD</h3>
            <ul>
                <li>Mantener el Sistema de Gestión de la Calidad que garantice
                    el mejoramiento continuo y la eficacia de los procesos Institucionales.
                </li>
                <li>Aumentar la satisfacción de nuestra comunidad asegurando la
                    atención oportuna de sus necesidades y expectativas.
                </li>
                <li>Fortalecer los procesos pedagógicos para mejorar el desempeño
                    escolar y la convivencia de los estudiantes.
                </li>
            </ul>
        </div>
        <div id="polCalidad"><h3 class="title">POLÍTICA DE CALIDAD</h3>

            <p class="text">En la comunidad de la Institución Educativa Madre Gabriela de San Martín,
                estamos comprometidos con:
            </p>
            <ul>
                <li>La formación integral de la niñez y juventud de la localidad N°2,
                    como gestores de cambio para su comunidad.
                </li>
                <li>La cultura del buen trato, atención oportuna y vivencia de los
                    valores institucionales.
                </li>
                <li>El cumplimiento de requisitos, la mejora continua y la satisfacción
                    de la comunidad.
                </li>
            </ul>
        </div>
        <div class="section-footer"><!--pestSim para identificarlo-->
            <!--pestana1-link para enviar hacia la primera pestana que es quienes somos-->
            <div class="pull-left pestSim pestana1-link">
                <div class="pull-left">
                    <div><span><</span></div>
                </div>
                <p class="pull-left">¿Quienes somos?</p></div>
            <!--pestSim para identificarlo-->
            <!--pestana3-link para enviar hacia la tercera pestana que es perfiles-->
            <div class="pull-right pestSim pestana3-link">
                <div class="pull-right">
                    <div><span>></span></div>
                </div>
                <p class="pull-right">Perfiles</p></div>
        </div>
    </div>
    <div id="perfiles" class="cpestana3"><!--h2.title PERFILES-->
        <div id="estudiante"><h3 class="title">PERFIL DEL ESTUDIANTE</h3>

            <p class="text">Un alumno capaz de asumir un compromiso humano cristiano,
                que se sienta libre de expresar y manifestar sus inquietudes,
                que tenga el valor de pensar y practicar sus ideas. Un alumno
                que sienta la actividad de estudiar, de actualizarse, de capacitarse
                y de formarse como una tarea digna de vivirse, con emoción y pasión.
                Que alcance la plena socialización como base de su desempeño en la sociedad,
                integrándose a la comunidad donde se desarrolla a través de la solidaridad
                para dar y recibir ayuda.
            </p></div>
        <div id="docente"><h3 class="title">PERFIL DEL DOCENTE</h3>

            <p class="text">Un docente que se identifique con la pedagogía Gabrielina “suaves en el modo,
                firmes en el objeto” que inspire a la libertad mental y uso de la inteligencia
                humana en plenitud, que promueva la creatividad y la innovación en el
                comportamiento humano. Reconozca con optimismo y humildad sus fortalezas y
                debilidades y las de sus estudiantes y que sea un testimonio de sana convivencia;
                que sepa relacionarse consigo mismo, con los demás, con la naturaleza y con Dios.
            </p></div>
        <div id="directivo"><h3 class="title">PERFIL DEL DIRECTIVO</h3>

            <p class="text">Un directivo con Misión, Visión, Estrategias de largo plazo,
                Metas y Objetivos claros que lo impulsen a ejercer un liderazgo,
                constructor, integrador y administrador, que invite a sus seguidores
                a la participación entusiasta y vigorosa para el mejoramiento de los
                Procesos Institucionales.
            </p></div>
        <div id="administrativo"><h3 class="title">PERFIL DEL ADMINISTRATIVO</h3>

            <p class="text">Un administrativo que atienda y entienda a los estudiantes y
                personal externo de la Institución como la razón de ser de su servicio,
                protegiendo los derechos fundamentales de los estudiantes.
            </p></div>
        <div id="egresado"><h3 class="title">PERFIL DEL EGRESADO</h3>

            <p class="text">Que se sienta orgulloso de la institución que lo formó,
                que sea ejemplo gestor de cambio para su comunidad. Con los
                perfiles competitivos necesarios para desempeñarse en una sociedad
                de constantes cambios tecnológicos y en las estructuras sociales.
            </p></div>
        <div class="section-footer"><!--pestSim para identificarlo-->
            <!--pestana2-link para enviar hacia la segunda pestana que es objetivos y politicas-->
            <div class="pull-left pestSim pestana2-link">
                <div class="pull-left">
                    <div><span><</span></div>
                </div>
                <p class="pull-left">Objetivos y políticas</p></div>
        </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>