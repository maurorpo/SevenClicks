<?php get_header(); ?>
<?php the_post() ?>
	<section class="int_category" <?php post_class('cf') ?> id="post-<?php the_ID() ?>">
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<article>
			<div class="container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-4 col-md-4">
						<h1 class="title_category"><?php the_title() ?></h1>
            <article class="content_post"><?php the_content() ?></article>
            <div class="urlweb"><a href="<?php echo the_field('link_web') ?>"><?php echo the_field('link_web') ?></a></div>
          </div>
          <div class="col-8 col-md-8">
            <?php $galery = get_field('imgs_galery') ?>
            <div class="owl-carousel-wrap">
              <div class="owl-carousel owl-theme popup-gallery">
                <?php foreach ($galery as $img) : ?>
                  <?php $img_slider = $img['img_galery'] ?>
                  <div class="item gallery-item">
                    <a href="<?php echo $img_slider ?>" data-effect="mfp-zoom-in" title="">
                      <img src="<?php echo $img_slider ?>" alt="">
                    </a>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
            <span class="back_page"><a href="http://sevenclicks.co/new/#posts_home">< <span>Regresar</span></a></span>
          </div>
				<?php endwhile; endif; ?>
			</div>
		</article>
  </section>
  <script>
    jQuery('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      items: 1,
      nav:true,
    });
    jQuery('.popup-gallery').magnificPopup({
      delegate: '.owl-item:not(.cloned) a',
      type: 'image',
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {
        beforeOpen: function() {
          // just a hack that adds mfp-anim class to markup 
          this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
          this.st.mainClass = this.st.el.attr('data-effect');
        }
      },
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small></small>';
        }
      }
    });

  </script>
<?php get_footer() ?>