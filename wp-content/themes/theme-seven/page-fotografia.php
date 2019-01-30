<?php get_header() ?>
<?php the_post() ?>
<section id="main" class="int-dest">
    <section class="banner_dest" style="background: url('<?php echo the_field('img_dest_ppl') ?>') center no-repeat;">
      <div class="title_ppl"><?php echo the_field('title_ppal') ?></div>
    </section>
    <div class="container">
      <div class="owl-carousel-wrap">
        <div class="owl-carousel owl-theme popup-gallery">
          <?php $galery = get_field('slider_dest'); ?>
          <?php foreach ($galery as $img) : ?>
            <?php $tititle_img = $img['title'] ?>
            <?php $img_slider = $img['imagen'] ?>
            <div class="item gallery-item">
              <a href="<?php echo $img_slider ?>" data-effect="mfp-zoom-in" title="">
                <img src="<?php echo $img_slider ?>" alt="">
              </a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
</section>
<script>
    jQuery('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      items: 3,
      nav:true,
      responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
            nav:false
        }
    }
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