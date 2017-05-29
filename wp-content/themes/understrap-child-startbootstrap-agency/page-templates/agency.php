<?php
/**
 * Template Name: Agency
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$upload_dir = wp_upload_dir()['baseurl'];
$theme_dir = get_stylesheet_directory_uri();
print($theme_dir);
?>

<!-- Services Section -->
<section id="services">
		<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<h2 class="section-heading">Services</h2>
								<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
						</div>
				</div>
				<div class="row text-center">
					<?php
						$args = array('post_type' => 'service',);
						$query = new WP_Query( $args );
					?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php get_template_part( 'loop-templates/content', 'service' ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
		</div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
		<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<h2 class="section-heading">Portfolio</h2>
								<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
						</div>
				</div>
				<div class="row">
					<?php
						$args = array('post_type' => 'work',);
						$query = new WP_Query( $args );
					?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php get_template_part( 'loop-templates/content', 'work' ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
		</div>
</section>

<!-- About Section -->
<section id="about">
		<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<h2 class="section-heading">Events</h2>
								<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
						</div>
				</div>
				<div class="row">
						<div class="col-lg-12">
								<ul class="timeline">
									<?php
										$args = array('post_type' => 'event',);
										$query = new WP_Query( $args );
										$events_counter = 0;
									?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<?php $event_class = $events_counter % 2 == 0 ? '' : 'timeline-inverted'; ?>
										<li class="<?php print $event_class; ?>">
											<?php get_template_part( 'loop-templates/content', 'event' ); ?>
										</li>
										<?php $events_counter ++; ?>
									<?php endwhile; // end of the loop. ?>
								</div>

									<!--
										<li>
												<div class="timeline-image">
														<img class="img-circle img-responsive" src="<?php print $theme_dir; ?>/img/about/1.jpg" alt="">
												</div>
												<div class="timeline-panel">
														<div class="timeline-heading">
																<h4>2009-2011</h4>
																<h4 class="subheading">Our Humble Beginnings</h4>
														</div>
														<div class="timeline-body">
																<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
														</div>
												</div>
										</li>
										<li class="timeline-inverted">
												<div class="timeline-image">
														<img class="img-circle img-responsive" src="<?php print $theme_dir; ?>/img/about/2.jpg" alt="">
												</div>
												<div class="timeline-panel">
														<div class="timeline-heading">
																<h4>March 2011</h4>
																<h4 class="subheading">An Agency is Born</h4>
														</div>
														<div class="timeline-body">
																<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
														</div>
												</div>
										</li>
										<li>
												<div class="timeline-image">
														<img class="img-circle img-responsive" src="<?php print $theme_dir; ?>/img/about/3.jpg" alt="">
												</div>
												<div class="timeline-panel">
														<div class="timeline-heading">
																<h4>December 2012</h4>
																<h4 class="subheading">Transition to Full Service</h4>
														</div>
														<div class="timeline-body">
																<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
														</div>
												</div>
										</li>
										<li class="timeline-inverted">
												<div class="timeline-image">
														<img class="img-circle img-responsive" src="<?php print $theme_dir; ?>/img/about/4.jpg" alt="">
												</div>
												<div class="timeline-panel">
														<div class="timeline-heading">
																<h4>July 2014</h4>
																<h4 class="subheading">Phase Two Expansion</h4>
														</div>
														<div class="timeline-body">
																<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
														</div>
												</div>
										</li>
										<li class="timeline-inverted">
												<div class="timeline-image">
														<h4>Be Part
																<br>Of Our
																<br>Story!</h4>
												</div>
										</li>
										-->
								</ul>
						</div>
				</div>
		</div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
			<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<h2 class="section-heading">Our Amazing Team</h2>
								<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
						</div>
				</div>
				<?php
					$args = array('post_type' => 'person',);
					$query = new WP_Query( $args );
				?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-sm-4">
						<?php get_template_part( 'loop-templates/content', 'person' ); ?>
					</div>
				<?php endwhile; // end of the loop. ?>

				<!--
				<div class="row">
						<div class="col-sm-4">
								<div class="team-member">
										<img src="<?php print $theme_dir; ?>/img/team/1.jpg" class="img-responsive img-circle" alt="">
										<h4>Kay Garland</h4>
										<p class="text-muted">Lead Designer</p>
										<ul class="list-inline social-buttons">
												<li><a href="#"><i class="fa fa-twitter"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a>
												</li>
										</ul>
								</div>
						</div>
						<div class="col-sm-4">
								<div class="team-member">
										<img src="<?php print $theme_dir; ?>/img/team/2.jpg" class="img-responsive img-circle" alt="">
										<h4>Larry Parker</h4>
										<p class="text-muted">Lead Marketer</p>
										<ul class="list-inline social-buttons">
												<li><a href="#"><i class="fa fa-twitter"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a>
												</li>
										</ul>
								</div>
						</div>
						<div class="col-sm-4">
								<div class="team-member">
										<img src="<?php print $theme_dir; ?>/img/team/3.jpg" class="img-responsive img-circle" alt="">
										<h4>Diana Pertersen</h4>
										<p class="text-muted">Lead Developer</p>
										<ul class="list-inline social-buttons">
												<li><a href="#"><i class="fa fa-twitter"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a>
												</li>
										</ul>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
								<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
						</div>
				</div>
				-->
		</div>
</section>

<!-- Clients Aside -->
<aside class="clients">
		<div class="container">
				<div class="row">
						<div class="col-md-3 col-sm-6">
								<a href="#">
										<img src="<?php print $theme_dir; ?>/img/logos/envato.jpg" class="img-responsive img-centered" alt="">
								</a>
						</div>
						<div class="col-md-3 col-sm-6">
								<a href="#">
										<img src="<?php print $theme_dir; ?>/img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
								</a>
						</div>
						<div class="col-md-3 col-sm-6">
								<a href="#">
										<img src="<?php print $theme_dir; ?>/img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
								</a>
						</div>
						<div class="col-md-3 col-sm-6">
								<a href="#">
										<img src="<?php print $theme_dir; ?>/img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
								</a>
						</div>
				</div>
		</div>
</aside>

<!-- Contact Section -->
<section id="contact">
		<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<h2 class="section-heading">Contact Us</h2>
								<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
						</div>
				</div>
				<div class="row">
						<div class="col-lg-12">
								<form name="sentMessage" id="contactForm" novalidate>
										<div class="row">
												<div class="col-md-6">
														<div class="form-group">
																<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
																<p class="help-block text-danger"></p>
														</div>
														<div class="form-group">
																<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
																<p class="help-block text-danger"></p>
														</div>
														<div class="form-group">
																<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
																<p class="help-block text-danger"></p>
														</div>
												</div>
												<div class="col-md-6">
														<div class="form-group">
																<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
																<p class="help-block text-danger"></p>
														</div>
												</div>
												<div class="clearfix"></div>
												<div class="col-lg-12 text-center">
														<div id="success"></div>
														<button type="submit" class="btn btn-xl">Send Message</button>
												</div>
										</div>
								</form>
						</div>
				</div>
		</div>
</section>

<?php get_footer(); ?>