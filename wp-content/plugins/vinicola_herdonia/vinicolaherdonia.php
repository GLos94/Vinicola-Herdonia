<?php

/**
* Plugin Name: Vinicola Herdonia Plugin
* Plugin URI:  https://studiocasaimmobiliare.com/
* Description: Vinicola Herdonia Plugin
* Author:      Giulia Losito
* Author URI:
* Version:     1.0.0
* Text Domain: vinicola_herdonia
* Domain Path: /languages/
*/

wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css', true);

// ------ creazione post-type VINO

add_action( 'init', 'ad_register_post_type' );
function ad_register_post_type() {
$labels = array(
'name' => __( 'Vini', '' ),
'singular_name' => __( 'Vino', '' ),
'add_new' => __( 'New Vino', '' ),
'add_new_item' => __( 'Add New Vino', '' ),
'edit_item' => __( 'Edit Vino', '' ),
'new_item' => __( 'New Vino', '' ),
'view_item' => __( 'View Vini', '' ),
'search_items' => __( 'Search Vini', '' ),
'not_found' =>  __( 'No Vini Found', '' ),
'not_found_in_trash' => __( 'No Vini found in Trash', '' ),
);
$args = array(
'labels' => $labels,
'has_archive' => true,
'public' => true,
'hierarchical' => true,
'description' => true,
'supports' => array(
'title',
'editor',
'thumbnail',
'page-attributes'
),
'rewrite'   => array( 'slug' => 'vini' ),
'show_in_rest' => true
);

register_post_type( 'vini', $args );
}


// ------ creazione tassonomie per Vino
add_action( 'init', 'vini_taxonomy');
function vini_taxonomy() {
    register_taxonomy(
        'categorie_vino',  // The name of the taxonomy
        'vini',             // post type name
        array(
            'has_archive' => true,
            'hierarchical' => true,
            'label' => 'Categorie Vino', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'categorie_vino',
                'with_front' => true
            )
        )
    );

}

add_action( 'add_meta_boxes', 'vino_info_metabox' );
function vino_info_metabox (){

    add_meta_box(
        'vino-info',
        'Scheda Tecnica',
        'vino_info_metabox_callback',
        'vini',
        'normal',
        'default'
    );

}




// callback info vino
function vino_info_metabox_callback($post){

    $vitigno = get_post_meta($post->ID, 'vitigno', true);
    $zona = get_post_meta($post->ID, 'zona', true);
    $superficie = get_post_meta($post->ID, 'superficie', true);
    $vinificazione = get_post_meta($post->ID, 'vinificazione', true);
    $caratteristiche = get_post_meta($post->ID, 'caratteristiche', true);
    $gradazione = get_post_meta($post->ID, 'gradazione', true);
    $acidita = get_post_meta($post->ID, 'acidita', true);
    $residuo = get_post_meta($post->ID, 'residuo', true);
    $formato = get_post_meta($post->ID, 'formato', true);
    $abbinamenti = get_post_meta($post->ID, 'abbinamenti', true);
    


    ?>



    <div class="form-group info_vino">
        <label for="vitigno"><i class="fas fa-seedling"></i> Vitigno</label>
        <input id="vitigno" class="form-control" type="text" name="vitigno" value="<?php echo $vitigno; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="zona"><i class="fas fa-map-marker-alt"></i> Zona di Produzione</label>
        <input id="zona" class="form-control" type="text" name="zona" value="<?php echo $zona; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="superficie"><i class="fas fa-ruler-combined"></i> Resa per Ettaro</label>
        <input id="superficie" class="form-control" type="text" name="superficie" value="<?php echo $superficie; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="vinificazione"><i class="fas fa-history"></i> Vinificazione</label>
        <input id="vinificazione" class="form-control" type="text" name="vinificazione" value="<?php echo $vinificazione; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="caratteristiche"><i class="fas fa-list-ul"></i> Caratteristiche Organolettiche</label>
        <input id="caratteristiche" class="form-control" type="text" name="caratteristiche" value="<?php echo $caratteristiche; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="gradazione"><i class="fas fa-temperature-low"></i> Gradazione Alcolica</label>
        <input id="gradazione" class="form-control" type="text" name="gradazione" value="<?php echo $gradazione; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="acidita"><i class="fas fa-thermometer"></i> Acidità</label>
        <input id="acidita" class="form-control" type="text" name="acidita" value="<?php echo $acidita; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="residuo"><i class="fas fa-arrow-down"></i> Residuo Zuccherino</label>
        <input id="residuo" class="form-control" type="text" name="residuo" value="<?php echo $residuo; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="formato"><i class="fas fa-wine-bottle"></i> Formato</label>
        <input id="formato" class="form-control" type="text" name="formato" value="<?php echo $formato; ?>">
    </div>
    <div class="form-group info_vino">
        <label for="abbinamenti"><i class="fas fa-star"></i> Abbinamenti, perfetto con </label>
        <input id="abbinamenti" class="form-control" type="text"  name="abbinamenti" value="<?php echo $abbinamenti; ?>">
    </div>


    <?php

}


// save info vino
add_action( 'save_post', 'vino_info_save_meta' );
function vino_info_save_meta($post_id) {

    if ( !current_user_can( 'edit_post', $post_id ))
        return;

    if( isset( $_POST[ 'vitigno' ] ) ) {
        update_post_meta( $post_id, 'vitigno', sanitize_text_field( $_POST[ 'vitigno' ] ) );
    }

    if( isset( $_POST[ 'zona' ] ) ) {
        update_post_meta( $post_id, 'zona', sanitize_text_field( $_POST[ 'zona' ] ) );
    }

    if( isset( $_POST[ 'superficie' ] ) ) {
        update_post_meta( $post_id, 'superficie', sanitize_text_field( $_POST[ 'superficie' ] ) );
    }

    if( isset( $_POST[ 'caratteristiche' ] ) ) {
        update_post_meta( $post_id, 'caratteristiche', sanitize_text_field( $_POST[ 'caratteristiche' ] ) );
    }

    if( isset( $_POST[ 'vinificazione' ] ) ) {
        update_post_meta( $post_id, 'vinificazione', sanitize_text_field( $_POST[ 'vinificazione' ] ) );
    }

    if( isset( $_POST[ 'gradazione' ] ) ) {
        update_post_meta( $post_id, 'gradazione', sanitize_text_field( $_POST[ 'gradazione' ] ) );
    }

    if( isset( $_POST[ 'acidita' ] ) ) {
        update_post_meta( $post_id, 'acidita', sanitize_text_field( $_POST[ 'acidita' ] ) );
    }


    if( isset( $_POST[ 'residuo' ] ) ) {
        update_post_meta( $post_id, 'residuo', sanitize_text_field( $_POST[ 'residuo' ] ) );
    }

    if( isset( $_POST[ 'formato' ] ) ) {
        update_post_meta( $post_id, 'formato', sanitize_text_field( $_POST[ 'formato' ] ) );
    }

    if( isset( $_POST[ 'abbinamenti' ] ) ) {
        update_post_meta( $post_id, 'abbinamenti', sanitize_text_field( $_POST[ 'abbinamenti' ] ) );
    }



}


// ------ SEZIONE GALLERIA

add_action( 'admin_enqueue_scripts', 'misha_scripts_for_gallery' );
function misha_scripts_for_gallery(){
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-widget');
    wp_enqueue_script('jquery-ui-sortable');

    if ( ! did_action( 'wp_enqueue_media' ) )
        wp_enqueue_media();

    wp_enqueue_script('my_scripts', plugins_url('/studio_casa/js/custom-gallery.js'), array('jquery','jquery-ui-sortable') );
}


function misha_gallery_field( $name, $value = '' ) {

    $html = '<div class="container"><div class="row misha_gallery_mtb gallery_row_pacchetti">';
    /* array with image IDs for hidden field */
    $hidden = array();


    if( $images = get_posts( array(
        'post_type' => 'attachment',
        'orderby' => 'post__in', /* we have to save the order */
        'order' => 'ASC',
        'post__in' => explode(',',$value), /* $value is the image IDs comma separated */
        'numberposts' => -1,
        'post_mime_type' => 'image'
    ) ) ) {

        foreach( $images as $image ) {
            $hidden[] = $image->ID;
            $image_src = wp_get_attachment_image_src( $image->ID, array( 80, 80 ) );
            $html .= '<div class="col-3 gallery_pacchetti_item" style="background-image:url(' . $image_src[0] . ');width: 100%;height: 200px;background-repeat: no-repeat;display: inline-block" data-id="' . $image->ID .  '"><a href="#" class="misha_gallery_remove"><i class="fas fa-trash"></i></a></div>';
        }

    }

    $html .= '</div></div>';
    $html .= '<input type="hidden" name="'.$name.'" value="' . join(',',$hidden) . '" /><a href="#" class="button misha_upload_gallery_button mt-2"><i class="fas fa-plus-circle"></i> Aggiungi immagini</a>';

    return $html;
}


/*
 * Add a meta box
 */
add_action( 'add_meta_boxes', 'misha_meta_box_add' );

function misha_meta_box_add() {
    add_meta_box('mishadiv', // meta box ID
        'Galleria', // meta box title
        'misha_print_box', // callback function that prints the meta box HTML
        'annunci', // post type where to add it
        'normal',// priority
        'default' );

}

/*
 * Meta Box HTML
 */
function misha_print_box( $post ) {
    $meta_key = 'some_custom_gallery';
    echo misha_gallery_field( $meta_key, get_post_meta($post->ID, $meta_key, true) );
}

/*
 * Save Meta Box data
 */
add_action('save_post', 'misha_save');

function misha_save( $post_id ) {
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return $post_id;

    $meta_key = 'some_custom_gallery';

    update_post_meta( $post_id, $meta_key, $_POST[$meta_key] );

    return $post_id;
}

// ------ FINE GALLERIA
