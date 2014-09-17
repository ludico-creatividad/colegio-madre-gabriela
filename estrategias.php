<?php
/*
 * Template Name: Estrategias
 */
get_header();
?>

<div class="container">
<?php include_once('slider.php'); ?>
    <main class="micontainer">
        <section id="estrategias-section" class="col-lg-12"><h4>Estrategias pedagógicas</h4>
            <figure class="col-lg-4"><img src="<?php stylesheetUri(); ?>imgs/estrategias1.png"/></figure>
            <figure class="col-lg-4"><img src="<?php stylesheetUri(); ?>imgs/estrategias2.png"/></figure>
            <figure class="col-lg-4"><img src="<?php stylesheetUri(); ?>imgs/estrategias3.png"/></figure>
            <div class="col-lg-12">
                <div class="col-lg-4"><h2 class="titulo">BARRILETE GABRIELINO</h2>

                    <p class="cuerpo">Estrechar lazos de comunicación y buena convivencia entre la familia
                        y la escuela a partir de la reflexión.</p></div>
                <div class="col-lg-4"><h2 class="titulo">DIRECCIÓN DE GRUPO</h2>

                    <p class="cuerpo">Establecer espacios de orientación, reflexión y formación a través
                        de actividades dirigidas.</p></div>
                <div class="col-lg-4"><h2 class="titulo">ME DIVIERTO LEYENDO</h2>

                    <p class="cuerpo">Generar el gusto por la lectura a partir de la escogencia espontánea
                        de textos.</p></div>
            </div>
            <div class="col-lg-12 gotMargin">
                <div class="col-lg-4"><h2 class="titulo">ESCUELA PARA PADRES</h2>

                    <p class="cuerpo">Sensibilizar a los padres para que comprendan que en la educación
                        de los hijos su apoyo es fundamental, ya que es tarea básica
                        de la familia fomentar la convivencia familiar.</p></div>
                <div class="col-lg-4"><h2 class="titulo">PROYECTO DE VIDA</h2>

                    <p class="cuerpo">Generar interés por identificar las aptitudes que cada
                        uno posee y a través del fortalecimiento de ellas,
                        desarrollar procesos de crecimiento personal
                    </p></div>
            </div>
        </section>
    </main>

<?php
get_footer();
?>