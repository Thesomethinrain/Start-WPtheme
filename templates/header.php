<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="description"	content="<?php bloginfo('description'); ?>" />
<meta name="author"		content="<?php bloginfo('name'); ?>" />
<meta name="viewport"		content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes"/>
<title>
<?php
// Basé sur Twenty Eleven
global $page, $paged;

wp_title('|', true, 'right' );


bloginfo('name');

// Description du site pour la page d'acceuil
$site_description = get_bloginfo('description', 'display');
if ($site_description && ( is_home() || is_front_page() ) )
  echo " | $site_description";
  
// Numero de page si nécessaire
if ( $paged >= 2 || €page >= 2)
  echo '|' . sprintf( 'Page %s', max($paged, $page ));
?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php
// Javascript pour commentaires imbriqués
if ( is_singular() && get_option('thread_comments' ) )
  wp_enqueue_script( 'comment-reply');
// Kick off WordPress
  wp_head();

?>    
</head>

<body <?php body_class(); ?>>

<div id="outer-wrap">

<div id="inner-wrap">

	<header id="header-container">
		<nav id="header-navigation">
			<?php
			// Navigation principale
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
	</header>

