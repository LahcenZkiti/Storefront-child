<?php 

	/**
	 * Site sidebar
	 */

	 function storfronte_top_sidebar() {
		 ?>
		 <div id="topbar">
			<div class="col-full">
				<div id="topbar_inline">
					<div id="flexstar" class="site-branding">
						<?php
							storefront_site_title_or_logo();
						?>
					</div>
					<div>
						<?php
							// get_product_search_form();
							storefront_product_search();
						?>
					</div>
				</div>
			</div>
    	</div>
		 <?php
	 }

	 add_action('storefront_before_header', 'storfronte_top_sidebar');


