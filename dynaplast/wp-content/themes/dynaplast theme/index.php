<?php get_header('home'); ?>
  <?php query_posts(array('post_type' => 'home')); ?>
  <div id="da-slider">
    <!-- query post for magic fields -->
    <?php 
    $parallax = get_group('main_slider') ;    
    foreach($parallax as $parallaxs) { ?>
    <div id="workparallax" class="da-slide">
      <a class="da-link"><img src="<?php echo $parallaxs['main_slider_image'][1]['thumb']; ?>" alt=""/></a>
      <div class="da-img">
      <h2><?php echo $parallaxs['main_slider_title'][1]; ?></h2>
      <p><?php echo $parallaxs['main_slider_description'][1]; ?></p>
      </div>
    </div>
    <?php } ?>
    <nav class="da-arrows">
      <span class="da-arrows-prev"></span>
      <span class="da-arrows-next"></span>
    </nav>
  </div> <!-- end da-slider -->

  <div id="section-top">
    <div class="wrapper-ourservice">
      <div class="ourservice">
        <h2>OUR SERVICE</h2>
        <p class="tmore">Here Some of Our Specialist.<br/>
        Lorem Ipsum Dolor Sit.</p>
      </div>
    </div>
    <div class="slider">
      <ul class="slides">
        <?php
        $slider = get_group('slider_our_service');    
        foreach($slider as $sliders) { ?>
        <li>
          <div class="listpro">
            <img src="<?php echo $sliders['slider_our_service_image'][1]['thumb']; ?>" alt=""/>
              <div class="titlepro">
                <h3><?php echo $sliders['slider_our_service_title'][1]; ?></h3>
              </div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div><!-- end slider -->
  </div><!-- end section-top -->

  <div id="section-middle">
    <div class="listem">
      <img src="<?php bloginfo('template_directory'); ?>/images/employe1.jpg" alt=""/>
    <div class="contenthover">
          <h3>MAY 12, 2013</h3>
          <p><a href="#" class="mybutton">READ NEWS</a></p>
      </div>
      <div class="content-listem">
        <h2>Pembukaan Pabrik Baru <br/>
        PT Dynaplast Tbk.</h2>
        <p>Emiten PT Dynaplast Tbk (DYNA) berancang-ancang go private di Bursa Efek Indonesia BEI pada...</p>
        <p><a class="tmore" href="#">MORE</a></p>
      </div>
    </div>
    <div class="listem">
      <img src="<?php bloginfo('template_directory'); ?>/http://2.bp.blogspot.com/-sOHh63utaLA/UGjtKR3YK9I/AAAAAAAAAf0/suMaozxSQHs/s1600/Java+Embedded+Offerings.png" alt=""/>
      <div class="contenthover">
          <h3>MAY 12, 2013</h3>
          <p><a href="#" class="mybutton">READ NEWS</a></p>
      </div>
      <div class="content-listem">
        <h2>Dynaplast Go Private, <br/>
        Saham Rp 4500 Per Lembar</h2>
        <p>Emiten PT Dynaplast Tbk (DYNA) berancang-ancang go private di Bursa Efek Indonesia BEI pada...</p>
        <p><a class="tmore" href="#">MORE</a></p>
      </div>
    </div>
    <div class="listem">
      <img src="<?php bloginfo('template_directory'); ?>/images/employe3.jpg" alt=""/>
      <div class="contenthover">
          <h3>MAY 12, 2013</h3>
          <p><a href="#" class="mybutton">READ NEWS</a></p>
      </div>
      <div class="content-listem">
        <h2>PT Dynaplast Tbk. <br/>
        Raih ISO 2000</h2>
        <p>Emiten PT Dynaplast Tbk (DYNA) berancang-ancang go private di Bursa Efek Indonesia BEI pada...</p>
        <p><a class="tmore" href="#">MORE</a></p>
      </div>
    </div>
  </div><!-- end section middle -->

  <div id="client">
    <div class="client-left">
      <div class="contentcleft">
        <h2>CLIENTS</h2>
        <p class="tmore">Here Some of Our Client.</p>
      </div>
    </div>
    <ul class="slides">
      <?php
      $client1 = get_group('client');
      foreach($client1 as $clients) { ?>
      <li>
        <div class="listclient">
          <img src="<?php echo $clients['client_client_image'][1]['thumb']; ?>"/>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div> <!-- end client -->
  <?php endwhile; wp_reset_query(); ?>

 <?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.1.8.3min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.color.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.contenthover.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home.js"></script>