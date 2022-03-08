<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */


$the_query = new WP_Query(array(
    'post_type' => 'vini',
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => -1


));


while ($the_query->have_posts()) : $the_query->the_post();

endwhile;


wp_reset_postdata();


$the_category_query = new WP_Query(array(
    'post_type' => 'vini',
    'tax_query' => array(
        array(
            'taxonomy' => 'categorie_vino',
            'field' => 'slug',
            'terms' => 'bianco'

        )
    )


));


while ($the_category_query->have_posts()) : $the_category_query->the_post();

endwhile;


wp_reset_postdata();

$the_rossi_query = new WP_Query(array(
    'post_type' => 'vini',
    'tax_query' => array(
        array(
            'taxonomy' => 'categorie_vino',
            'field' => 'slug',
            'terms' => 'rosso'

        )
    )


));


while ($the_rossi_query->have_posts()) : $the_rossi_query->the_post();

endwhile;


wp_reset_postdata();


$the_rosati_query = new WP_Query(array(
    'post_type' => 'vini',
    'tax_query' => array(
        array(
            'taxonomy' => 'categorie_vino',
            'field' => 'slug',
            'terms' => 'rosato'

        )
    )


));


while ($the_rosati_query->have_posts()) : $the_rosati_query->the_post();

endwhile;


wp_reset_postdata();


?>


<div class="container-fluid p-0">

    <!--  <div class="row">
        <div class="col-12 header_home mb-5 p-0">
            <div class="top-centered">
                <h1>Scopri la nostra <br> selezione di vini</h1>
                <h2>dal Tavoliere delle Puglie</h2>
                <a class="btn btn-dark link_news mt-3 px-5" href="<?php /*echo site_url('/i-nostri-vini'); */ ?>"
                   style="letter-spacing: 0.5px;">
                    Scopri di più
                </a>
            </div>
            <img src="<?php /*echo get_stylesheet_directory_uri() . '/images/ndp.png' */ ?>">
        </div>
    </div>-->
    <div class="row row_introduction">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="top-centered">
                            <h1>Scopri la nostra <br> selezione di vini</h1>
                            <h2>dal Tavoliere delle Puglie</h2>
                            <a class="btn btn-dark link_news mt-3 px-5" href="<?php echo site_url('/i-nostri-vini'); ?>"
                               style="letter-spacing: 0.5px;">
                                Scopri di più
                            </a>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <video id="video" style="height: 600px; width: 100%; background-color: black;"
                               class="img-fluid d-block" autoplay loop muted>
                            <source src="<?php echo get_stylesheet_directory_uri() . '/images/herdonia.mp4' ?>"
                                    type="video/mp4"/>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row_scopri justify-content-center text-center p-5">
        <div class="col-12">
            <h4 class="text-uppercase p-3">Esplora il mondo Herdonia</h4>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>

    <div class="row row_summary">
        <a class="col-12 col-lg-6 bg-storia" href="<?= site_url('/chi-siamo'); ?>">
            <div class="centered"><h2 class="text-uppercase">Storia</h2></div>
        </a>
        <a class="col-12 col-lg-6 bg-produzione" href="<?= site_url('/i-nostri-vini'); ?>">
            <div class="centered"><h2 class="text-uppercase">Vini</h2></div>
        </a>
        <a class="col-12 col-lg-6 bg-vini" href="<?= site_url('/degustazioni'); ?>">
            <div class="centered"><h2 class="text-uppercase">Degustazioni</h2></div>
        </a>
        <a class="col-12 col-lg-6 bg-vigneti" href="<?= site_url('/esperienze'); ?>">
            <div class="centered"><h2 class="text-uppercase">Esperienze</h2></div>
        </a>
    </div>


    <div class="container my-5 py-5">
        <div class="row row_lista-vini mt-5 pb-5">
            <div class="col-12 col-lg-8 vini-rossi">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/NeroDiTroia_1.jpg' ?>">
            </div>
            <div class="col-10 col-lg-4 vini-rossi">
                <h4 class="text-uppercase">Rossi</h4>
                <ul>
                    <li>Nero di Troia IGP Puglia</li>
                    <li>Cabernet Daunia</li>
                    <li>Luna Rossa</li>
                    <li>Traiano</li>
                </ul>
            </div>
        </div>

        <div class="row row_lista-vini row-bianchi my-5 py-5">
            <div class="col-10 col-lg-4 vini-bianchi">
                <h4 class="text-uppercase">Bianchi</h4>
                <ul>
                    <li>Falanghina IGP Daunia</li>
                    <li>Luna Piena</li>
                </ul>
            </div>

            <div class="col-12 col-lg-8 vini-bianchi">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/Falanghina_1.jpg' ?>">
            </div>
        </div>

        <div class="row row_lista-vini mt-5 pb-5">
            <div class="col-12 col-lg-8 vini-rosati">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/Cabernet_1.jpg' ?>">
            </div>
            <div class="col-10 col-lg-4 vini-rosati">
                <h4 class="text-uppercase">Rosati</h4>
                <ul>
                    <li>Cerasello</li>
                </ul>
            </div>
        </div>

        <div class="row justify-content-center text-center mt-3 mb-5">
            <div class="col-12">
                <a class="btn btn-dark link_news mt-3 px-5" href="<?php echo site_url('/i-nostri-vini'); ?>"
                   style="letter-spacing: 0.5px;">
                    Tutti i vini
                </a>
            </div>

        </div>
    </div>

    <div class="row row_wines justify-content-center text-center my-5">
        <div class="col-12 col-lg-4">
            <a href="<?php echo site_url('/degustazioni'); ?>">
                <div class="bg-degustazioni">
                    <img class="img-circle mb-3"
                         src="<?php echo get_stylesheet_directory_uri() . '/images/scritta.png' ?>">
                </div>
            </a>
        </div>
        <div class="col-12 col-lg-4">
            <a href="<?php echo site_url('/wp-content/uploads/2021/11/vinicola-herdonia.pdf'); ?>"  target="_blank">
            <div class="bg-packaging">
                <img class="img-circle mb-3"
                                      src="<?php echo get_stylesheet_directory_uri() . '/images/scritta-5.png' ?>">

            </div>
            </a>
        </div>
        <div class="col-12 col-lg-4">
            <a href="<?php echo site_url('/esperienze'); ?>">
                <div class="bg-vendita">
                    <img class="img-circle mb-3"
                         src="<?php echo get_stylesheet_directory_uri() . '/images/scritta-3.png' ?>"
                         style="object-position: right;">
                </div>
            </a>
        </div>
    </div>


</div>


