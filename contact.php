<?php
/*
 * Template Name: Contact
 * */
//include('form-processor.php');
?>
<!DOCTYPE html5>
    <html>
    <head><title>Colegio Madre Gabriela de San Martin</title>
        <meta charset="utf-8"/>
        <?php require_once('styles-loader.php'); ?>
        <?php wp_head(); ?>
    </head>
    <body>
    <div class="container">
        <header class="headerContacto">
            <figure id="mainLogo" class="pull-left"><img src="<?php stylesheetUri(); ?>imgs/logo_menu.png"/>
                <figcaption>Colegio Madre Gabriela</figcaption>
            </figure>
        </header>
    </div>

    <div class="container">
        <main id="contacto-section" class="micontainer"><p>Para cualquier tipo de consulta que desee realizarnos
                llame a los teléfonos o diligencie el formulario.</p>

            <p>Estamos a su disposición.
            </p>

            <div class="info col-lg-7">
                <ul class="col-lg-6">
                    <li class="titulo">Teléfonos:</li>
                    <li>(+57 5) 656 7874</li>
                    <li>(+57) 300 454 0036</li>
                    <li>(+57) 300 479 6132</li>
                </ul>
                <ul class="col-lg-6">
                    <li class="titulo">Email:</li>
                    <li>info@madregabriela.com</li>
                </ul>
                <div class="dir col-lg-12"><p class="titulo">Dirección:</p>

                    <p>Duis ut purus hendrerit, pulvinar tortor id, congue lacus. Integer ultricies
                        Cartagena - Colombia
                    </p></div>
            </div>
            <form name="htmlform" method="post" action="html_form_send.php" class="col-lg-5">
                <input type="text" placeholder="Nombre" name="name" required="required"/><span><br></span>
                <input type="tel" placeholder="Teléfono" name="phone" required="required"/><span><br></span>
                <input type="email" placeholder="E-mail" name="email" required="required"/><span><br></span>
                <textarea placeholder="Mensaje" name="message" required="required"></textarea><span><br></span>
                <input type="submit" value="Enviar"/>
            </form>
        </main>
    </div>
    <div class="fondo"></div>
</body>
</html>

<?php get_footer(); ?>