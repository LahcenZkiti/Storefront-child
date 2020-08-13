<?php
/**
	 * Display the theme credit
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
