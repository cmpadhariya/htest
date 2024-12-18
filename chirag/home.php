<?php
/**
 * Template Name: front page Template
 *
 * @package WordPress
 *
 */
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- Home Hero section start -->
<section class="home-hero-section common-padding ">
	<div class="container p-0">
		<div class="home-hero-section__inner">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12 bottom-content">
					<div class="home-hero-section__inner_heading">
						<span>
							<?php
							echo wp_kses_post( get_field( 'home_hero_subtitle' ) );
							?>
						</span>
						<h1>
							<?php
							echo wp_kses_post( get_field( 'home_hero_heading' ) );
							?>
						</h1>
						<p>
							<?php
							echo wp_kses_post( get_field( 'home_hero_description' ) );
							?>
						</p>
						<a href="<?php echo esc_url( get_field( 'home_hero_button_url' ) ); ?>">
							<?php
							echo wp_kses_post( get_field( 'home_hero_button_text' ) );
							?>
						</a>
					</div>
					<div class="logos-section">
						<p>
							<?php
								echo wp_kses_post( get_field( 'logos_heading' ) );
							?>
						</p>
						<div class="splide" role="group" aria-label="Splide Basic HTML Example" id="logos-slider">
							<div class="splide__track">
								<ul class="splide__list">
									<li class="splide__slide">
										<img
											src="<?php echo esc_url( get_field( 'logos_image-1' ) ); ?>"
											alt="exatek Provide Best IT solutions"
											width="154"
											height="37"
											loading="lazy"
										/>
									</li>
									<li class="splide__slide">
										<img
											src="<?php echo esc_url( get_field( 'logos_image-2' ) ); ?>"
											alt="exatek Provide Best IT solutions"
											width="154"
											height="37"
											loading="lazy"
										/>
									</li>
									<li class="splide__slide">
										<img
											src="<?php echo esc_url( get_field( 'logos_image-3' ) ); ?>"
											alt="exatek Provide Best IT solutions"
											width="154"
											height="37"
											loading="lazy"
										/>
									</li>
									<li class="splide__slide">
										<img
											src="<?php echo esc_url( get_field( 'logos_image-4' ) ); ?>"
											alt="exatek Provide Best IT solutions"
											width="154"
											height="37"
											loading="lazy"
										/>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-6">
					<div class="home-hero-section__inner_image">
						<img
							src="<?php echo esc_url( get_field( 'home_hero_image' ) ); ?>"
							sizes="(max-width: 600px) 320px, (max-width: 1024px) 640px, 1024px"
							alt="exatek Provide Best IT solutions"
							width="500"
							height="628"
							loading="lazy"
						/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Home Hero section end -->

<?php get_footer(); ?>
