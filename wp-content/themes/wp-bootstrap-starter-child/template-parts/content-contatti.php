<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */


?>


<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-12 header_contatti text-center mb-5 p-0">
       <!-- <img src="<?php /*echo get_stylesheet_directory_uri() . '/images/uve.jpg' */?>">-->
        <div class="centered">
            <h1>Contatti</h1>
            <small>Vieni a trovarci</small>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/hero-home.jpg' ?>">
    </div>

    <div class="row row_form m-0 p-lg-5">
        <div class="col-lg-2 col-sm-12"></div>

        <div class="col-lg-3 col-sm-12 mt-4 p-5">
            <div class="col-12 vieni_in_agenzia">
                <h1>Vuoi passare a trovarci?</h1>
            </div>
            <div class="col-12 info_contatti p-0">
                <p><i class="fas fa-map-marked mx-3"></i> SP 110, Km 27 - 71040 Ordona (FG) </p>
                <p class="mx-3" style="white-space: pre-line";> <em>Lunedì - Venerdì</em>
                    08:00 - 12:30
                    15:00 - 18:30
                </p>
                <p class="mx-3" style="white-space: pre-line"><em>Sabato</em>
                    08:00 - 12:30
                </p>
            </div>
            <div class="col-12 vieni_in_agenzia mt-5">
                <h1>Hai bisogno di informazioni?</h1>
            </div>
            <div class="col-12 info_orari p-0">
                <p><i class="fas fa-phone-alt mx-3"></i> 0885 796165</p>
                <p><i class="fas fa-mobile ml-3 mr-4"></i> 339 3301227</p>
                <i class="far fa-envelope mx-3"></i><a href="mailto:saverio.losito@libero.it"> saverio.losito@libero.it</a>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 form_contatti pb-5">
            <div class="row m-0">
                <div class="col-lg-12 col-sm-12 p-0 google_map_contatti">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11986.338399673099!2d15.6464157!3d41.3178996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x684b55b0069ba94b!2sVinicola%20Herdonia%20Snc!5e0!3m2!1sit!2sit!4v1635155172585!5m2!1sit!2sit"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </iframe>
                </div>
            </div>
        </div>
    </div>


</div>




