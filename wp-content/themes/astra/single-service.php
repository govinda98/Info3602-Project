<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<div id="content" class="site-content">
	<div class="ast-container">
		<div id="primary" class="content-area primary">
			<main id="main" class="site-main">
				<article class="post-2069 page type-page status-publish ast-article-single" id="post-2069" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
					<header class="entry-header ast-header-without-markup"></header><!-- .entry-header -->
						<div class="entry-content clear" itemprop="text">
							<div data-elementor-type="wp-page" data-elementor-id="2069" class="elementor elementor-2069">
								<section class="elementor-section elementor-top-section elementor-element elementor-section-boxed" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-top-column elementor-element data-element_type="column">
											<div class="elementor-widget-wrap">
												<h1><?php echo get_the_title(); ?></h1>
												<h5><?php echo do_shortcode('[acf field="description"]'); ?></h5>
												<?php echo get_the_content(); ?>
												<div class="related-mechanics">
													<?php 
														$relatedMechanics = get_field('mechanics');
														if ($relatedMechanics) {
															echo '<hr class="section-break">';
															echo '<h3>Related Mechanics</h3>';
															echo '<ul class="link-list min-list">';
															foreach($relatedMechanics as $mechanic){ ?>
																<li><a href="<?php echo get_the_permalink($mechanic);?>"> <?php echo get_the_title($mechanic);?> </a></li> 
															<?php }
															echo '</ul>';
														}													
													?>		 
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div><!-- .entry-content .clear -->
				</article><!-- #post-## -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div> <!-- ast-container -->
</div>

<?php endwhile; ?>
<?php /* Pagination for custom post types */
    $next_post = get_adjacent_post( false, '', false);
    $next_post_url = get_the_permalink($next_post);

    $previous_post = get_adjacent_post( false, '', true);
    $previous_post_url = get_the_permalink($previous_post);
?>
<div class="paginate">
	<a class="pagination-prev" href="<?php echo $previous_post_url;?>">Previous post</a>
	<a class="pagination-next" href="<?php echo $next_post_url;?>">Next post</a>
</div>

<?php get_footer(); ?>
