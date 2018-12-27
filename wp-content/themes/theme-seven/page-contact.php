<?php get_header() ?>
<?php the_post() ?>
	<section id="main">
		<?php $id = get_post_thumbnail_id( $post->ID ); ?>
		<?php $img_bg = wp_get_attachment_url( $id ); ?>
		<section id="contact" class="int_contact" style="background: url(<?php echo $img_bg ?>) center no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<h1 class="title_section"><?php echo the_title() ?></h1>
						<article class="descript_simple descript_contact"><?php echo the_content() ?></article>
					</div>
					<div class="col-lg-4 col-md-4">

					</div>
					<div class="col-lg-4 col-md-4">
						<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]') ?>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php get_footer() ?>