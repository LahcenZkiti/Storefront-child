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
	 * bg-color beging
	 */
	function wpb_bg() { 
		$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
		$color ='#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].
		$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
		echo $color;
	}
	/**
	 * bg-color end
	 */




	/**
	 * add_action
	 */
	 add_action( 'storefront_before_site', 'storfronte_top_info');
	 add_action('storefront_before_header', 'storfronte_top_sidebar');

