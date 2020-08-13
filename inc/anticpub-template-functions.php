<?php
/**
 * AnticPub functions.
 * @package anticpub
 */

    /**
	 * tob_bar_info
     * 
     * @since 1.0.0
	 */
	function anticpub_top_info() {
		?>
			<div class="top__info">
				<div class="livr">
					<!-- withget livraison -->
					<i class="fas fa-check"></i>
					Livraison gratuite au Maroc
				</div>
				<div class="devis">
					<!-- withget devis -->
					<i class="fas fa-check"></i>
					Création de devis
				</div>
				<div class="secure">
					<!-- withget devis -->
					<i class="fas fa-check"></i>
					Paiement sécurisé
				</div>
				<div class="tel">
					<!-- withget tel -->
					<a href="tel:05 66 66 66 66"><i class="fas fa-phone"></i>05 66 66 66 66</a>
				</div>
				<div class="date">
					<span> Lundi-Samedi 08h30-19h</span>
				</div>
			</div>
		<?php
    }
    
    /**
	 * top_bar_menu
     * 
     * @since 1.0.0
	 */

	function anticpub_top_sidebar() {
		?>
		
			<div class="top__bar">
				<div class="logo">
					<?php
						// storefront_site_title_or_logo();
						echo get_custom_logo( );
					?>
				</div>
				<div class="search">
					<?php
						// get_product_search_form();
						storefront_product_search();
					?>
				</div>
				<div class="icons__bar">
					<?php
						storefront_secondary_navigation();
					?>
				</div>
			</div>
		
		<?php
    }
    
    
	/**
	 * Customize background-color
     * 
     * @since  1.0.0
	 * @param array $wp_customize 
	 */
	function anticpub_customize_register( $wp_customize ) {
		//All our sections, settings, and controls will be added here
		$wp_customize->add_setting('header_topbar_bg', array(
			'default' => '#000000',
			'transport' => 'refresh',
		));
		$wp_customize->add_section( 'header_background' , array(
			'title'      => __( 'Header_Topbar', 'storefront' ),
			'priority'   => 30,
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
			'label'      => __( 'Header Color', 'storefront' ),
			'section'    => 'header_background',
			'settings'   => 'header_topbar_bg',
		) ) );
	}


	/**
	 * Generating Live CSS
     * 
     * @since  1.0.0
	 */
	function anticpub_customize_css() {
		?>
			<style type="text/css">
				.top__bar, .top__info { background-color: <?php echo get_theme_mod('header_topbar_bg', '#000000'); ?>; }
			</style>
		<?php
	}
	