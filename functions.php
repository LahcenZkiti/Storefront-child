<?php 

	/**
	 * Site sidebar
	 */

	 function storfronte_top_sidebar() {
		 ?>
			<div id="topbar">
				<div class="col-full">
					<div id="topbar_inline">
						<div id="flexstar" >
							<?php
								// storefront_site_title_or_logo();
								echo get_custom_logo( );
							?>
						</div>
						<div id="search">
							<?php
								// get_product_search_form();
								storefront_product_search();
							?>
						</div>
						<div id="bar">
							<?php
								storefront_secondary_navigation();
							?>
						</div>
					</div>
				</div>
			</div>
		 <?php
	 }

	 add_action('storefront_before_header', 'storfronte_top_sidebar');


