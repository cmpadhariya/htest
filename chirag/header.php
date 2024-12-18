<?php
/**
 * Header
 *
 * Header file for the theme.
 *
 * @package WordPress
 *
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<!-- Header section start -->
	<div class="header-wrapper">
		<header class="header">
			<div class="container p-0">
				<div class="header__inner">
                    <?php
                    // Display the header menu if it exists.
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header_menu',
                            'container'      => '',
                            'menu_class'     => '',
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
			    </div>
		    </div>
	</header>
</div>
<!-- Header section end -->