<?php 
	/**
	 * tob_bar_info css beging
	 */
	function storfronte_top_info() {
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
	 * tob_bar_info end
	 */



	/**
	 * top_bar beging
	 */

	function storfronte_top_sidebar() {
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
	 * top_bar end
	 */


	/**
	 * Display the theme credit beging
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_credit() {
		$links_output = '';

		if ( apply_filters( 'storefront_credit_link', true ) ) {
			if ( storefront_is_woocommerce_activated() ) {
				$links_output .= '<a href="https://anticpub.com" target="_blank" title="' . esc_attr__( 'AnticPub - The Best eCommerce Platform for WordPress', 'storefront' ) . '" rel="noreferrer">' . esc_html__( 'Built with AnticPub &amp; WooCommerce', 'storefront' ) . '</a>.';
			} else {
				$links_output .= '<a href="https://anticpub.com/storefront/" target="_blank" title="' . esc_attr__( 'Storefront -  The perfect platform for your next WooCommerce project.', 'storefront' ) . '" rel="noreferrer">' . esc_html__( 'Built with AnticPub', 'AnticPub' ) . '</a>.';
			}
		}

		if ( apply_filters( 'storefront_privacy_policy_link', true ) && function_exists( 'the_privacy_policy_link' ) ) {
			$separator = '<span role="separator" aria-hidden="true"></span>';
			$links_output = get_the_privacy_policy_link( '', ( ! empty( $links_output ) ? $separator : '' ) ) . $links_output;
		}
		
		$links_output = apply_filters( 'storefront_credit_links_output', $links_output );
		?>
		<div class="site-info">
			<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>

			<?php if ( ! empty( $links_output ) ) { ?>
				<br />
				<?php echo wp_kses_post( $links_output ); ?>
			<?php } ?>
		</div><!-- .site-info -->
		<?php
	}
	/**
	 * Display the theme credit end
	 */


	/**
	 * Display social icons beging
	 * If the subscribe and connect plugin is active, display the icons.
	 *
	 * @link http://wordpress.org/plugins/subscribe-and-connect/
	 * @since 1.0.0
	 */
	function storefront_social_icons() {
		if ( class_exists( 'Subscribe_And_Connect' ) ) {
			echo '<div class="subscribe-and-connect-connect">';
			subscribe_and_connect_connect();
			echo '</div>';
		}
	}
	/**
	 * Display social icons end
	 */




	/**
	 * add_action
	 */
	 add_action( 'storefront_before_site', 'storfronte_top_info');
	 add_action('storefront_before_header', 'storfronte_top_sidebar');