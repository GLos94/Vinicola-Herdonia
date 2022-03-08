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
            <h1>Esperienze</h1>
            <small>Cosa vedere nei dintorni</small>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/vigneti-3.jpg' ?>">
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-10 mt-5">
            <div class="row justify-content-center row-storia">
                <div class="col-12 col-lg-10 mx-3 my-5">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/scavi-ordona.jpg' ?>">
                        </div>
                        <div class="col-12 col-lg-6">
                            <h1>Parco Archeologico Herdonia</h1>
                            <h4>la Pompei della Puglia</h4>
                            <p style="white-space: pre-line; letter-spacing: 0.8px;">Nelle immediate vicinanze di <em>Vinicola Herdonia</em>, a pochi chilometri da Ordona, sorge l’antica città romana di Herdonia, scoperta nel 1962 dall’archeologo Joseph Mertens, anche nota come “la Pompei della Puglia”.
                                Gli scavi archeologici hanno portato alla luce elementi significativi dell’antico insediamento di Federico II di Svevia. Nella zona centrale si possono ammirare i resti di due templi, di una basilica, del foro, di un mercato circolare e delle terme,
                                mentre a nord-est troviamo i resti di un piccolo anfiteatro. All’esterno delle mura si estende una vasta necropoli in cui sono stati rinvenuti diversi esempi di ceramica dauna conservati nei musei di Foggia, Bari e Taranto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-3 my-5">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/incoronata.jpg' ?>">
                        </div>
                        <div class="col-12 col-lg-6">
                            <h1>Santuario dell'Incoronata</h1>
                            <h4>Settimo Santuario Mariano d'Europa</h4>
                            <p style="white-space: pre-line; letter-spacing: 0.8px;">A 10 km <em>Vinicola Herdonia</em> sorge il Santuario dell’Incoronata, luogo di culto e meta di pellegrinaggi, dove secondo la leggenda, nell’anno 1001, apparve la Madonna.
                                Il vecchio Santuario ha lasciato il posto ad una struttura moderna e imponente avvolta dal bosco omonimo che le conferisce un'atmosfera di raccoglimento e di spiritualità.
                                All'interno del Santuario, si possono ammirare l'imponente corona bronzea di 10 metri di diametro e la statua della Madonna nera, a cui ogni anno milioni di pellegrini affidano le loro preghiere.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>





    </div>

</div>