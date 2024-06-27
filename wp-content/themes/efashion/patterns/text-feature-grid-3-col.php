<?php
/**
 * Title: Feature grid, 3 columns
 * Slug: twentytwentyfour/text-feature-grid-3-col
 * Categories: text, about
 * Viewport width: 1400
 */
?> 


<section class="banner spad has-text-align-center is-style-asterisk">
        <div class="container">
		<div class="d-flex justify-content-center">
			<h1 class="text-decoration-underline mb-5"> Categories </h1>
		</div>
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
							<?php echo do_shortcode('[product_categories ids="17" columns="1"]'); ?>
                        </div>
                        <div class="banner__item__text">
                            <h2>Clothing Collections 2030</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
							<?php echo do_shortcode('[product_categories ids="18" columns="1"]'); ?>
                        </div>
                        <div class="banner__item__text">
                            <h2>Accessories</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
							<?php echo do_shortcode('[product_categories ids="19" columns="1"]'); ?>
                        </div>
                    	<div class="banner__item__text">
							<h2>Shoes Spring 2030</h2>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>