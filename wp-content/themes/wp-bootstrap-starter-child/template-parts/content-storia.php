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
    <div class="col-12 header_storia text-center mb-5 p-0">
        <!--<img src="<?php /*echo get_stylesheet_directory_uri() . '/images/uve.jpg' */?>">-->
        <div class="centered">
            <h1>Chi Siamo</h1>
            <small>Famiglia Losito</small>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/kyathos.png' ?>">
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-10 col-lg-8 mt-5">
            <div class="row align-items-center row-storia">
                <div class="col-12 col-lg-4">
                    <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/storia-4.jpg' ?>">
                </div>
                <div class="col-12 col-lg-2">
                    <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/storia-5.jpg' ?>">
                </div>
                <div class="col-12 col-lg-6">
                    <h1>Storia</h1>
                    <p style="white-space: pre-line; letter-spacing: 0.8px;">La storia di Vinicola Herdonia inizia nel 1970 grazie all’impegno della famiglia Losito e allo spirito di imprenditorialità di <em>Papà Pinuccio</em>, pioniere nel settore vinicolo
                        “nell’agro di Orta”.
                        Le sue intuizioni si trasformano in importanti innovazioni nel settore e l’azienda cresce nel rispetto di una tradizione secolare e con lo sguardo rivolto al futuro.
                        Oggi, come allora, Vinicola Herdonia coniuga sapientemente <strong>tradizione</strong> e <strong>innovazione</strong>, mantenendo vivo l’amore per la terra di Puglia e per i suoi prodotti, lavorando con impegno e dedizione nel rispetto della vigna e delle sue tradizioni.
                        Tre generazioni, una storia di oltre 50 anni e un’unica grande passione: il <em>vino</em>.
                        Perché Herdonia? Vinicola Herdonia sorge nei pressi del Parco Archeologico Herdonia e il suo logo prende vita ispirandosi ad uno dei cocci secolari rinvenuti duranti gli scavi.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-10 col-lg-8 mt-5">
            <div class="row align-items-center row-vigneti">
                <div class="col-12 col-lg-6">
                    <h1>Vigneti</h1>
                    <p style="white-space: pre-line; letter-spacing: 0.8px;">Vinicola Herdonia sorge in provincia di Foggia, nel cuore del Tavoliere delle Puglie.
                        Nei vigneti si utilizza il sistema di <strong>allevamento a tendone</strong>, più adatto al clima della regione prevalentemente caldo umido e soggetto a forte insolazione.
                        I terreni <strong>calcareo-argillosi</strong> consentono una qualità di uve con eccellente maturazione e vini ricchi, intensi, strutturati, con un ottimo grado alcolico e tendenzialmente longevi.
                        L’irrigazione è studiata per dare il necessario apporto di sostanze nutritive in particolare durante la stagione estiva, e per bilanciare le componenti essenziali del terreno dal punto di vista agronomico.
                        Particolare attenzione è riservata per ridurre al minimo l’utilizzo di trattamenti chimici e
                        fitosanitari.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/vigneti-4.jpeg' ?>">
                </div>
            </div>
        </div>

        <div class="col-10 col-lg-8 my-5">
            <div class="row align-items-center row-produzione">
                <div class="col-12 col-lg-2">
                    <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/rosa.jpeg' ?>">
                </div>
                <div class="col-12 col-lg-4">
                    <img class="mb-4" src="<?php echo get_stylesheet_directory_uri() . '/images/produzione-4.jpg' ?>">
                </div>
                <div class="col-12 col-lg-6">
                    <h1>Produzione</h1>
                    <p style="white-space: pre-line; letter-spacing: 0.8px;">La produzione avviene interamente in loco, dalla <strong>raccolta delle uve</strong> fino all’imbottigliamento.
                        La raccolta delle uve viene fatta manualmente selezionando i grappoli migliori e garantendo un maggior rispetto per la pianta che in questo modo non viene danneggiata.
                        La fase successiva alla raccolta è la <strong>pigiatura</strong> durante la quale l’uva viene posta in un macchinario chiamato <em>pigiadiraspatrice</em>, che consente la separazione del mosto (il prodotto finale) dalle scorie quali bucce, raspi e vinaccioli.
                        La <strong>vinificazione</strong> avviene secondo le più moderne tecnologie attualmente esistenti: il mosto viene sottoposto a fermentazione alcolica in silos di acciaio inox a temperatura opportunamente controllata da impianti frigorifero per il tempo necessario ad ottenere il prodotto finale desiderato/con i parametri desiderati. Una volta terminata la fermentazione alcolica segue un periodo di decantazione e affinamento in silos di acciaio. L’ultima fase è l’<strong>imbottigliamento</strong>.
                    </p>
                </div>
            </div>
        </div>


    </div>

</div>