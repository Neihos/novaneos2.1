</body>
<footer class="footer">
    <div class="footerContent">
        <?php 
        $image_id = 21;
        $image_url = wp_get_attachment_image_url($image_id, 'full'); 
        $srcset = wp_get_attachment_image_srcset($image_id, 'full');
        $sizes = '(max-width: 2560px) 100vw, 1200px';
        $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

        if ($image_url): ?>
            <img src="<?php echo esc_url($image_url); ?>" 
            srcset="<?php echo esc_attr($srcset); ?>" 
            sizes="<?php echo esc_attr($sizes); ?>" 
            alt="<?php echo esc_attr($alt_text); ?>">
        <?php endif; ?>
        <p>La satisfaction de nos clients : Notre priorité !</p>
        <div class="reseau">
            <a href="https://www.facebook.com/profile.php?id=61573610879121" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/company/novaneos" aria-label="Linkedin"><i class="fa-brands fa-linkedin-in"></i></i></a>
            <a href="https://www.instagram.com/novaneos.fr/" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
         </div>
    </div>
    <div class="mentions">
        <a href="/mentions-legales">Mentions légales</a>
        <p>&copy; <?php echo date("Y"); ?> Novaneos -Tous droits réservés-</p>
        <a href="/politique-confidentialite">Politique de confidentialité</a>
    </div>
</footer>
<?php wp_footer(); ?>

</html>