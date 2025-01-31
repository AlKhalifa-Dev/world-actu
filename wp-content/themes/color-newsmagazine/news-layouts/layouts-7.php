<?php 

if(get_theme_mod('color_newsmagazine_block_7_enable','0') == 1):

	dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_7_google','0') );

	function color_newsmagazine_block_7_enable() {
		$cat 		= get_theme_mod('color_newsmagazine_block_7_category_name','');
		$author_1 	= get_theme_mod('color_newsmagazine_block_7_authorlist','0');
		$orderby 	= get_theme_mod('color_newsmagazine_block_7_order','date');
		$title 		= get_theme_mod('color_newsmagazine_block_7_title');
		$post_no 	= get_theme_mod('color_newsmagazine_block_7_number','5');
		$admin_enable 	= get_theme_mod('color_newsmagazine_block_7_author_enable','1');
		$date_enable 	= get_theme_mod('color_newsmagazine_block_7_date_enable','1');
		$comment_enable = get_theme_mod('color_newsmagazine_block_7_comment_enable','1');
		$background_image = get_theme_mod('color_newsmagazine_block_7_image');
		// Added featured 
		$post_read_enable = get_theme_mod('color_newsmagazine_block_7_post_read_enable','1');
		$post_time_enable = get_theme_mod('color_newsmagazine_block_7_post_time_enable','0');

				$arguments = array(
					'category_name'	=> esc_attr( $cat ),
					'posts_per_page' => absint( $post_no ),
					'author'	   => absint( $author_1 ),
					'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
					'ignore_sticky_posts' => 1
				);
				$query = new WP_Query( $arguments );
				if( $query->have_posts() ) :
				?>
				<!-- News BIg -->
				<section class="<?php if ($title == Null )  { echo 'pt-5' ;} ?> news-big section off-white animated wow fadeInUp" data-wow-duration = "2s" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12 position-initial ">
								<?php if ($title != Null )  { ?>
									<header>
										<h2 class="cat-title">
											<span><?php  echo esc_html( $title ); ?></span>
										</h2>
									</header>
								<?php } 
								
								$count = 0;
								while( $query->have_posts() ) :
									$query->the_post();
									if( $count == 0 ) :
										?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<!-- Single News -->
											<div class="single-news main ">
												<div class="news-head mt-4 mb-4 animated wow zoomIn" data-wow-duration="2s" data-wow-delay="1.5s">
													<?php if( has_post_thumbnail() ) :
														the_post_thumbnail('color-newsmagazine-thumbnail-8');
													elseif (! has_post_thumbnail()): ?>
														<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/425_283_lay7_contlist.png " >
													<?php endif;?>
												</div>
												<div class="content media-bodys mt-4 mb-4 ">
													<i class="fas fa-quote-left"></i><h3 class="title-medium "><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
													<div class="meta ">
														<?php if($admin_enable == 1): ?>
															<span class="author">
																<i class="fas fa-user-tie"></i>
																<?php color_newsmagazine_posted_by();?>
															</span>
														<?php endif;
														if($date_enable == 1 ): ?>
															<span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
														<?php endif;
														if($comment_enable == 1 ): ?>
															<span class="date"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
														<?php endif; 
														
														if($post_read_enable == 1 ):
															color_newsmagazine_count_content_words(esc_html( get_the_ID()));
														endif;	
														if($post_time_enable == 1 ):?>
															<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
														<?php endif;?>
														<!-- Added Featured End -->
													</div>
													<div class="meta">
														<?php global $color_newsmagazine_currenttime2;
														$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
														$newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
														color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2); ?>
													</div>
												</div>
												<div class="clearfix"> </div>
											</div>
										</article>
											<?php
									endif;
									$count = $count + 1;
								endwhile;
								?>
								<!--/ End Single News -->
								<!-- Small Post -->
								<?php if ($count > 1) { ?>
								<div class="small-post">
									<div class="container">
										<div class="row">
											<?php
											$count = 0;
											while( $query->have_posts() ) :
												$query->the_post();
												if( $count > 0 ) :
													?>
													<div class="col-lg-6">
													<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
														<!-- Single Post -->
														<div class="single-post">
															<div class="news-head">
																<?php
																if( has_post_thumbnail() ) :
																	the_post_thumbnail('color-newsmagazine-thumbnail-12');
																	elseif (! has_post_thumbnail()): ?>
																		<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/100_66.png " >
																	<?php endif;
																	?>
																</div>
																<div class="content">
																	<h3 class="title-small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
																	<div class="meta" >
																		
																		<span class="date">
																			<?php if($date_enable == 1 ): ?>
																				<i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?>
																			</span>
																		<?php endif; 
																		if($post_read_enable == 1 ):
																			color_newsmagazine_count_content_words( get_the_ID());
																		endif;	
																		
																		?>
																		<!-- Added Featured End -->
																	</div>
																</div>
															</div>
															<!--/ End Single Post -->
														</article>
														</div>
														<?php
													endif;
													$count = $count + 1;
											endwhile;
											?>
										</div>
									</div>
										<!--/ End Small Post -->
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
				<?php endif;
				wp_reset_postdata();
		}
	color_newsmagazine_block_7_enable();
endif;?>