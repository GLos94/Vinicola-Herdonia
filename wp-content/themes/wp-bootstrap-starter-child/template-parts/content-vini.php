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


?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-12 header_vini text-center mb-5 p-0">
        <div class="centered">
            <h1>I Vini</h1>
            <small>Fragranze millenarie</small>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/vendemmia.jpg' ?>">
    </div>
  <!--  <div class="row justify-content-center text-center">
        <div class="col-12">
            <h2>Tris Degustazione</h2>
        </div>
        <div class="col-4">
            <img src="<?php /*echo get_stylesheet_directory_uri() . '/images/NeroDiTroia.jpg' */?>">
            <h2>Nero di Troia</h2>
            <p style="white-space: pre-line;">Vino rosso ottenuto da uva di Nero di Troia della zona.
                Colore rosso rubino intenso con un
                profumo particolarmente vinoso.
                Adatto ad un consumo quotidiano.</p>
        </div>
        <div class="col-4">
            <img src="<?php /*echo get_stylesheet_directory_uri() . '/images/falanghina.jpg' */?>">
            <h2>Falanghina IGP Daunia</h2>
            <button type="button" class="btn btn-dark">Scopri</button>
        </div>
        <div class="col-4">
            <img src="<?php /*echo get_stylesheet_directory_uri() . '/images/cabernet.jpg' */?>">
            <h2>Cabernet</h2>

        </div>

    </div>-->
    <div class="row text-center p-5">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-12 col-lg-4 my-5">
                <img src="<?php echo get_the_post_thumbnail_url() ?>">
                <h4><?php echo the_title(); ?></h4>
                <a class="btn btn-dark link_news mt-3" href="<?php echo the_permalink();  ?>">
                    Scopri di più
                </a>
            </div>
        <?php endwhile; ?>
    </div>


</div>