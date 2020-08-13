<?php

/**
 * Header
 * 
 * @see anticpub_top_info()
 * @see anticpub_top_sidebar()
 */
add_action( 'storefront_before_site', 'anticpub_top_info');
add_action('storefront_before_header', 'anticpub_top_sidebar');

/**
 * Customize
 * 
 * @see anticpub_customize_register()
 * @see anticpub_customize_css()
 */
add_action( 'customize_register', 'anticpub_customize_register' );
add_action( 'wp_head', 'anticpub_customize_css');