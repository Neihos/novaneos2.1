<?php
/*
Template Name: Conception
*/
/**
 * The Template for displaying conception page
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

// Inclure le fichier avec les données des médias photos
include('template_parts/home_parts.php');

get_header(); 
?>
<div id="conception-container">
    <div class="titleContact">
        <p class="littleTitle">Les étapes</p>
        <h2>La Conception de Votre Site Web avec Notre Agence de Création :</h2>
    </div>
    <div class="explicationTop">
        <div class="imgExplication">
            <?php echo get_image_html(11); ?>
        </div>
        <div class="explicationText">
            <div class="blockExplication">
                <i class="fa-regular fa-handshake"></i>
                <div class="textExplication">
                    <h3>Réunion Initiale pour Votre Projet</h3>
                    <p>Lors de cette première rencontre, nous nous concentrons sur la compréhension de vos besoins spécifiques. Notre objectif est de personnaliser notre approche pour garantir une expérience optimale pour vous. Nous discuterons de vos préférences, explorerons la possibilité d'attribuer un membre de votre équipe à notre collaboration, et passerons en revue les étapes à venir, répondant ainsi à vos questions et définissant un calendrier de production clair et précis.</p>
                </div>
            </div>
            <div class="blockExplication">
                <i class="fa-regular fa-window-restore"></i>
                <div class="textExplication">
                    <h3>Élaboration du Contenu de Votre Site Web</h3>
                    <p>Nous prendrons en charge la création du contenu de vos pages en utilisant soit le matériel que vous nous fournirez à l'avance, soit en produisant du contenu pour vous et en vous le soumettant pour validation jusqu'à ce que vous soyez pleinement satisfait. Notre objectif est de respecter les normes pour garantir un site web performant tant du point de vue du référencement que de l'expérience utilisateur. Nous veillerons à ce que votre site contienne les informations essentielles présentées de manière claire, minimisant ainsi le nombre de clics nécessaires pour l'utilisateur.</p>
                </div>
            </div>
            <div class="blockExplication">
                <i class="fa-solid fa-hammer"></i>
                <div class="textExplication">
                    <h3>Conception du Design de Votre Site Web</h3>
                    <p>Nous concevrons un site web qui répondra visuellement à vos attentes, en tenant compte de nos discussions préliminaires. Nous créerons une maquette incluant le texte et les images du site, que nous vous présenterons pour recueillir vos commentaires et demandes de modifications avant de passer à la prochaine étape.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="explicationBottom">
        <div class="imgExplication">
            <?php echo get_image_html(12); ?>
        </div>
        <div class="explicationText">
            <div class="blockExplication">
                <i class="fa-regular fa-handshake"></i>
                <div class="textExplication">
                    <h3>Réunion Initiale pour Votre Projet</h3>
                    <p>Lors de cette première rencontre, nous nous concentrons sur la compréhension de vos besoins spécifiques. Notre objectif est de personnaliser notre approche pour garantir une expérience optimale pour vous. Nous discuterons de vos préférences, explorerons la possibilité d'attribuer un membre de votre équipe à notre collaboration, et passerons en revue les étapes à venir, répondant ainsi à vos questions et définissant un calendrier de production clair et précis.</p>
                </div>
            </div>
            <div class="blockExplication">
                <i class="fa-regular fa-window-restore"></i>
                <div class="textExplication">
                    <h3>Élaboration du Contenu de Votre Site Web</h3>
                    <p>Nous prendrons en charge la création du contenu de vos pages en utilisant soit le matériel que vous nous fournirez à l'avance, soit en produisant du contenu pour vous et en vous le soumettant pour validation jusqu'à ce que vous soyez pleinement satisfait. Notre objectif est de respecter les normes pour garantir un site web performant tant du point de vue du référencement que de l'expérience utilisateur. Nous veillerons à ce que votre site contienne les informations essentielles présentées de manière claire, minimisant ainsi le nombre de clics nécessaires pour l'utilisateur.</p>
                </div>
            </div>
            <div class="blockExplication">
                <i class="fa-solid fa-hammer"></i>
                <div class="textExplication">
                    <h3>Conception du Design de Votre Site Web</h3>
                    <p>Nous concevrons un site web qui répondra visuellement à vos attentes, en tenant compte de nos discussions préliminaires. Nous créerons une maquette incluant le texte et les images du site, que nous vous présenterons pour recueillir vos commentaires et demandes de modifications avant de passer à la prochaine étape.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php
get_footer();
?>