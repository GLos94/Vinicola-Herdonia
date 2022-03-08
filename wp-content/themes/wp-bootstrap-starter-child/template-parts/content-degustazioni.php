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
    <div class="col-12 header_degustazioni text-center mb-5 p-0">
        <!--<img src="<?php /*echo get_stylesheet_directory_uri() . '/images/uve.jpg' */?>">-->
        <div class="centered">
            <h1>Degustazioni</h1>
            <small>Abbina Herdonia</small>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/tappi.jpg' ?>">
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-10 mt-5">
            <div class="row justify-content-center row-storia">
                <div class="col-12 col-lg-5 mx-3 my-5">
                    <div class="row">
                        <div class="col-12">
                            <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/mascitelli.jpg' ?>">
                        </div>
                        <div class="col-12">
                            <h1>Wine Tour</h1>
                            <h4>Visita Vigna e Cantina</h4>
                            <p style="white-space: pre-line; letter-spacing: 0.8px;">Passeggiata nella nostra vigna nello splendido contesto panoramico del <em>Tavoliere delle Puglie</em> e visita in cantina: sarà possibile interagire con l'agronomo e apprendere le tecniche di coltivazione della vite ed i processi di vinificazione
                                ed invecchiamento del vino.
                                Infine avrà luogo la degustazione, con l'aiuto del nostro enologo.
                            </p>
                            <a class="btn btn-secondary link_news mt-3 ml-3" href="<?php echo site_url('/contatti');  ?>">
                                Info & Prenotazioni
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 mx-3 my-5">
                    <div class="row">
                        <div class="col-12">
                            <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/mascitelli-2.jpg' ?>">
                        </div>
                        <div class="col-12">
                            <h1>Wine Tasting</h1>
                            <h4>Degustazione completa con pranzo o cena</h4>
                            <p style="white-space: pre-line; letter-spacing: 0.8px;">Pranzo o cena completi a base dei sapori tipici della nostra tradizione territoriale,
                                dove la maestria nell’uso delle materie prime a <em>km 0</em>, si coniuga sapientemente
                                con la degustazione dei nostri vini, scelti ad hoc in base alle pietanze
                                dal nostro enologo.
                                Vi aspettiamo presso il nostro <a href="https://masseriamascitelli.com/" target="_blank">Agriturismo Masseria Mascitelli</a> per un'esperienza enogastronomica avvolgente e a conduzione familiare.
                            </p>
                            <a class="btn btn-secondary link_news mt-3 ml-3" href="<?php echo site_url('/contatti');  ?>">
                                Info & Prenotazioni
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>





    </div>

</div>