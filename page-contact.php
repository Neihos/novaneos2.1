<?php
/*
Template Name: Contact
*/
/**
 * The Template for displaying contact page
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

// Inclure le fichier avec les données des médias photos
include('template_parts/home_parts.php');

get_header(); 
?>
<div id="contact-container">
    <div class="illustrationContact">
        <?php echo get_image_html(10); ?>
    </div>
    <div class="moyenDeContact">
        <div class="formulaire">
            <?php 
                // Affiche le formulaire Contact Form 7 avec l'ID ou le titre
                echo do_shortcode('[contact-form-7 id="5c0f83f" title="Formulaire de contact 1"]'); 
            ?>
        </div>
        <div class="infoEntreprise">
            <?php echo get_image_html(13); ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>