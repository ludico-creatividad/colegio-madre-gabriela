<?php
/*
 * Template Name: Contact
 * */

get_header();
include('form-processor.php');
?>

    <div class="container contentBlock">
        <?php if(isset($alert)) echo $alert; ?>
        <div class="row">
            <div class="col-md-4">
                <h2>Nuestros Datos</h2>
                <ul>
                    <li>Madre Gabriela Bogota</li>
                    <li>Calle 70 # 23 - 45</li>
                    <li>Tel: 656543456</li>
                </ul>
            </div>
            <div class="col-md-7">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                    <input id="name" name="nombre" type="text" placeholder="Tu nombre" class="form-control">
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                    <input id="email" name="email" type="text" placeholder="Tu email" class="form-control">
                            </div>

                            <!-- Subject input-->
                            <div class="form-group">
                                <input id="tema" name="asunto" type="text" placeholder="Asunto" class="form-control">
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escribenos tu mensaje..." rows="5"></textarea>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </fieldset>
                    </form>
            </div>
        </div>
    </div>


<?php get_footer(); ?>