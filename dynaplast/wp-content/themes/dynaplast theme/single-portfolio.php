<script type="text/javascript">
  $(document).ready(function(){
    $('.slider-portfolio').flexslider({
      animation: "slide",
      slideshow: false,
      animationLoop: true,
      itemWidth: 1024,
      itemMargin: 0
    });

    $('.listportfolio:nth-child(1) .sliderimg-portfolio').attr('class', 'one').bjqs({
      animtype      : 'slide',
      height        : 366,
      width         : 580
    });

    $('.listportfolio:nth-child(2) .sliderimg-portfolio').attr('class', 'two').bjqs({
      animtype      : 'slide',
      height        : 366,
      width         : 580
    });

    // $('.sliderimg-portfolio1:nth-child(3)').bjqs({
    //   animtype      : 'slide',
    //   height        : 366,
    //   width         : 580
    // });

    // $('.sliderimg-portfolio1:nth-child(4)').bjqs({
    //   animtype      : 'slide',
    //   height        : 366,
    //   width         : 580
    // });

    // $('.sliderimg-portfolio1:nth-child(5)').bjqs({
    //   animtype      : 'slide',
    //   height        : 366,
    //   width         : 580
    // });
  });
</script>
<div class="slider-portfolio">
  <ul class="slides">
    <?php
    $portfslider = get_group('slider');
    foreach($portfslider as $portfsliders) { ?>
    <li class="listportfolio">
      <div class="sliderimg-portfolio">
        <ul class="bjqs">
          <?php
          foreach($portfsliders as $portfsliders2) { ?>
          <li>
            <img src="<?php echo $portfsliders2['slider_image_slider'][1]['thumb']; ?>" alt=""/>
          </li>
          <?php } ?>
        </ul>
      </div> <!-- end sliderimg-portfolio1 -->
      <h2><?php the_title(); ?></h2>
      <h3><?php echo $portfsliders['slider_header'][1]; ?></h3>
      <?php echo $portfsliders['slider_description'][1]; ?>
    </li>
    <?php } ?>
  </ul>
</div> <!-- end slider-portfolio1 -->