<?php
// Include header.php
get_template_part('templates/header');
?>
<section id="content-container">
<?php
// Page 404
if ( !have_posts() ) : ?>
<article id="post-0" class="post error404not-found">
<h1 class="entry-title">Not Found</h1>
<div class="entry-content">
<p>Désolé, il n'y a rien sur cette page. Essayez de trouver ce que vous vouliez grâce à ce formulaire.</p>
<?php get_search_form(); ?>
</div>
</article>
<?php
endif;

// Boucle de base
while ( have_posts() ) : the_post();

// Charge le template de contenu adapté
get_template_part( 'templates/content', 'index' );

// Fin de la boucle
endwhile;

// Haut de la navigation
//get_template_part( 'templates/nav', 'bottom' );
?>
</section>

<?php
// Include sidebar.php
get_template_part( 'templates/sidebar', 'index' );
?>

<?php
// Include footer.php
get_template_part('templates/footer');
?>

