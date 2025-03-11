<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le site de Novaneos, entreprise spécialisée dans la création de sites internet sur mesure, le développement web et l'accompagnement en stratégie digitale. Notre équipe de développeurs experts crée des solutions web performantes, adaptées à vos besoins. De la conception de sites vitrines à l'e-commerce, en passant par l'optimisation SEO et la gestion des réseaux sociaux, Novaneos vous aide à booster votre présence en ligne.">
    <meta name="keywords" content="création de site internet, développement web, développement de sites, conception de site sur mesure, stratégie digitale, SEO, réseaux sociaux, e-commerce, développement front-end, développement back-end, optimisation web, web design, responsive design, référencement SEO, développement WordPress, stratégie de communication digitale, marketing digital">
    <meta name="author" content="Neihos">
    <meta name="title" content="Novaneos - Création de Sites Internet & Développement Web | Stratégie Digitale et Réseaux Sociaux">
    <meta name="robots" content="index, follow">
    <!-- Open Graph -->
    <meta property="og:title" content="Novaneos - Création de Sites Internet & Développement Web">
    <meta property="og:description" content="Novaneos est spécialisée dans la création de sites internet sur mesure, le développement web et la stratégie digitale.">
    <meta property="og:image" content="https://www.novaneos.fr/wp-content/themes/novaneos/assets/images/logo-novaneos.png">
    <meta property="og:url" content="https://www.novaneos.fr">
    <meta property="og:type" content="website">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "WebDevelopmentCompany",
        "name": "Novaneos",
        "url": "https://www.novaneos.fr",
        "logo": "https://www.novaneos.fr/wp-content/themes/novaneos/assets/images/logo-novaneos.png",
        "description": "Novaneos est une agence spécialisée dans la création de sites internet sur mesure, le développement de logiciels web et la stratégie digitale. Nous accompagnons les entreprises dans leur transformation digitale en proposant des solutions performantes et innovantes.",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "116 rue Guillain",
          "addressLocality": "Hautmont",
          "postalCode": "59330",
          "addressCountry": "FR"
        },
        "contactPoint": [
          {
            "@type": "ContactPoint",
            "telephone": "+33-7-62-06-05-94",
            "contactType": "Service Client",
            "availableLanguage": ["Français", "Anglais"]
          },
          {
            "@type": "ContactPoint",
            "telephone": "+33-7-62-06-05-94",
            "contactType": "Service Commercial",
            "availableLanguage": ["Français", "Anglais"]
          }
        ],
        "sameAs": [
          "https://www.facebook.com/profile.php?id=61573610879121",
          "https://www.instagram.com/novaneos.fr/",
          "https://www.linkedin.com/company/novaneos"
        ],
        "foundingDate": "2025",
        "founders": [
          {
            "@type": "Person",
            "name": "DETOURBE"
          }
        ],
        "services": [
          {
            "@type": "Service",
            "name": "Création de sites internet",
            "description": "Développement de sites vitrines, e-commerce et plateformes sur mesure."
          },
          {
            "@type": "Service",
            "name": "Développement de logiciels web",
            "description": "Conception de logiciels SaaS et applications web adaptées aux besoins spécifiques des entreprises."
          },
          {
            "@type": "Service",
            "name": "Stratégie digitale et SEO",
            "description": "Optimisation du référencement naturel et accompagnement en marketing digital."
          }
        ],
        "slogan": "L'innovation au service du web",
        "taxID": "FR78940633951"
      }
    </script>
    <link rel="canonical" href="https://www.novaneos.fr/">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Novaneos - Création de Sites Internet & Développement Web | Stratégie Digitale et Réseaux Sociaux</title>
    <?php wp_head(); ?>
</head>
    
<header id="siteHeader">

  <div class="headerContainer">
    <figure class="logoSite">
      <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

        if ($logo_url) {
            echo '<a href="' . home_url( '/' ) . '" ><img class="imgLogo" src="' . esc_url($logo_url) . '" alt="Logo"></a>';
        }
      ?>
    </figure>
    <nav class="desktopNav">
      <?php
      // menu main déclaré dans functions.php
			wp_nav_menu(array('theme_location' => 'main')); 
		  ?>
    </nav>
    <a class="contactUsNav" href="<?php echo home_url( '/contact' ); ?>">
      <span><p>Contactez nous</p><i class="fa-solid fa-envelope"></i></span>
    </a>
  </div>

  <div class="mobileNavContainer">
    <figure class="logoSiteMobile">
      <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

        if ($logo_url) {
            echo '<a href="' . home_url( '/' ) . '" ><img class="imgLogo" src="' . esc_url($logo_url) . '" alt="Logo"></a>';
        }
      ?>
    </figure>
    <div class="burgerMenu">
      <svg class="burgerIcon" width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.856708 1.71342H26.5586C27.0315 1.71342 27.4153 1.32957 27.4153 0.856708C27.4153 0.383774 27.0314 0 26.5586 0H0.856708C0.383845 0 0 0.383774 0 0.856708C0 1.32964 0.383845 1.71342 0.856708 1.71342Z" fill="#0692e3"/>
        <path d="M26.5586 8.56738H0.856708C0.383774 8.56738 0 8.95123 0 9.42409C0 9.89695 0.383845 10.2808 0.856708 10.2808H26.5586C27.0315 10.2808 27.4153 9.89695 27.4153 9.42409C27.4153 8.95123 27.0315 8.56738 26.5586 8.56738Z" fill="#0692e3"/>
        <path d="M26.5586 17.1345H0.856708C0.383774 17.1345 0 17.5184 0 17.9912C0 18.4642 0.383845 18.8479 0.856708 18.8479H26.5586C27.0315 18.8479 27.4153 18.4641 27.4153 17.9912C27.4154 17.5183 27.0315 17.1345 26.5586 17.1345Z" fill="#0692e3"/>
      </svg>
      <svg class="crossIcon hiddenNow" width="28" height="20" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M23.1905 1.61607L3.86027 17.8361C3.50458 18.1345 3.45818 18.6654 3.7566 19.021C4.05506 19.3767 4.58594 19.4231 4.94157 19.1247L24.2718 2.90472C24.6275 2.60626 24.6739 2.07538 24.3755 1.71974C24.0771 1.36401 23.5462 1.31761 23.1905 1.61607Z" fill="#0692e3"/>
        <path d="M3.64474 2.82769L22.9778 19.0501C23.3336 19.3486 23.8642 19.3025 24.1622 18.9473C24.4602 18.5921 24.4134 18.0616 24.0577 17.7631L4.72462 1.54073C4.36893 1.24227 3.83833 1.28825 3.54026 1.64348C3.24219 1.9987 3.28905 2.52923 3.64474 2.82769Z" fill="#0692e3"/>
      </svg>
    </div>
  </div>

  <nav class="mobileNav close">
      <?php
      // menu main déclaré dans functions.php
			wp_nav_menu(array('theme_location' => 'main')); 
		  ?>
  </nav>

</header>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>