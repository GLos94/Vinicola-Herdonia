<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="container-fluid container_single_pacchetti">

        <div class="row row_single_content justify-content-center align-items-center my-5 pb-5">
            <div class="col-lg-5">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <div class="col-lg-7 col-sm-12">

                <div class="col-12 head_descrizione mt-4 mb-3">
                    <h1><?php echo the_title(); ?></h1>
                    <h3>Scheda Tecnica</h3>
                    <?php $taxonomies = get_taxonomies(['object_type' => ['vini']]); ?>
                    <?php foreach ($taxonomies as $taxonomy) : ?>
                    <p><span>Categoria: </span>
                        <?php $terms = get_the_terms($post->ID, $taxonomy);
                        foreach ($terms as $term) : ?>
                            <span class="font-weight-bold"> <?php echo $term->name; ?></span>
                        <?php endforeach; ?>
                        </span>
                        <?php endforeach; ?>
                    </p>
                </div>
                <div class="line"></div>
                <div class="col-12 pacchetto_descrizione">
                    <?php echo the_content(); ?>
                </div>

                <div class="col-12 info_aggiuntive">
                    <p><i class="fas fa-seedling"></i> <span
                                class="agg"> Vitigno: </span> <?php echo $vitigno = get_post_meta($post->ID, 'vitigno', true); ?>
                    </p>
                    <p><i class="fas fa-map-marker-alt"></i><span
                                class="agg"> Zona di Produzione: </span> <?php echo $zona = get_post_meta($post->ID, 'zona', true); ?>
                    </p>
                    <p><i class="fas fa-ruler-combined"></i><span
                                class="agg"> Resa per Ettaro: </span> <?php echo $superficie = get_post_meta($post->ID, 'superficie', true); ?>
                    </p>
                    <p><i class="fas fa-history"></i><span
                                class="agg"> Vinificazione: </span> <?php echo $vinificazione = get_post_meta($post->ID, 'vinificazione', true); ?>
                    </p>
                    <p><i class="fas fa-list-ul"></i><span
                                class="agg"> Caratteristiche Organolettiche: </span> <?php echo $caratteristiche = get_post_meta($post->ID, 'caratteristiche', true); ?>
                    </p>
                    <p><i class="fas fa-temperature-low"></i><span
                                class="agg"> Gradazione Alcolica: </span> <?php echo $gradazione = get_post_meta($post->ID, 'gradazione', true); ?>
                    </p>
                    <p><i class="fas fa-wine-bottle"></i><span
                                class="agg"> Formato: </span> <?php echo $formato = get_post_meta($post->ID, 'formato', true); ?>
                    </p>
                    <p><i class="fas fa-star"></i><span
                                class="agg"> Perfetto con: </span> <?php echo $abbinamenti = get_post_meta($post->ID, 'abbinamenti', true); ?>
                    </p>

                </div>


            </div>
        </div>


    </div>


    </div>

</article><!-- #post-## -->
