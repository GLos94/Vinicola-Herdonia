<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
    </div><!-- .row -->
    </div><!-- .container -->
    </div><!-- #content -->
    <?php get_template_part('footer-widget'); ?>
    <footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container-fluid">
            <div class="row row_footer">
                <div class="col-12">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/home-2.png' ?>">
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5 pb-3">
            <div class="row align-items-center py-4">
                <div class="col-12 col-lg-2"></div>
                <div class="col-12 col-lg-2 col-md-6 mb-4 mb-lg-0 about-us">
                    <p style="white-space: pre-line;">Vinicola Herdonia è un'azienda specializzata nella vinificazione.
                        Possiede un laboratorio di produzione e una cantina per la conservazione e l'invecchiamento del vino.
                        Vi aspettiamo.
                    </p>
                </div>
                <div class="col-6 col-lg-4 mb-3 logo-footer">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/logotrasparente-2.png' ?>" alt=""
                         width="180" class="mb-3">
                </div>
                <div class="col-10 col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <p class="text-muted"><i class="fas fa-map-marker-alt mx-3"></i>SP 110, Km 27 - Ordona (FG)</p>
                    <p class="text-muted"><i class="fas fa-phone mx-3"></i>Tel/Fax: 0885 796165 - Cellulare: +39 339 3301227
                    <p class="text-muted mb-4"><a href="mailto:saverio.losito@libero.it"><i
                                    class="fas fa-envelope mx-3"></i>saverio.losito@libero.it</a>
                </div>
                <div class="col-10 ml-2 about-us-sm">
                    <p style="white-space: pre-line;">Vinicola Herdonia è un'azienda specializzata nella vinificazione.
                        Possiede un laboratorio di produzione e una cantina per la conservazione e l'invecchiamento del vino.
                        Vi aspettiamo.
                    </p>
                </div>

            </div>
        </div>

        <!-- Copyrights -->
        <div class="bg-light py-3" style="border-top: 1px solid lightgrey;">
            <div class="container text-center">
                <p class="text-muted mb-0 py-2">
                    © <?php echo date('Y'); ?> <?php echo '<a href="' . home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
                    - Tutti i diritti riservati</p>
            </div>
        </div>

    </footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>