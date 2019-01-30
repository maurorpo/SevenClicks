<?php get_header() ?>
<?php the_post() ?>
<section id="main" class="int-dest">
    <section class="banner_dest">

    </section>
    <div class="container">
        <div class="owl-carousel owl-theme popup-gallery">
          <?php $galery = get_field('slider_videos'); ?>
          <?php foreach ($galery as $img) : ?>
            <?php $tititle_img = $img['title'] ?>
            <?php $img_slider = $img['video'] ?>
            <div class="item-video" data-merge="1">
              <a class="owl-video" style="display: block;" href="<?php echo $img_slider ?>"></a>
            </div>
          <?php endforeach ?>
        </div>
    </div>
</section>
<script>
    jQuery('.owl-carousel').owlCarousel({
      merge:true,
      loop:true,
      margin:10,
      video:true,
      lazyLoad:true,
      center:true,
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