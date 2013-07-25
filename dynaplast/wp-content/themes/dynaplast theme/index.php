<?php get_header('home'); ?>
  <div id="da-slider">
    <!-- query post for magic fields -->
    <?php query_posts(array('post_type' => 'home'));
    while(have_posts()) : the_post();
    $parallax = get_group('main_slider');
    foreach($parallax as $parallaxs) { ?>
    <div id="workparallax" class="da-slide">
      <a class="da-link"><img src="<?php echo $parallaxs['main_slider_image'][1]['thumb']; ?>" alt=""/></a>
      <div class="da-img">
      <h2><?php echo $parallaxs['main_slider_title'][1]; ?></h2>
      <p><?php echo $parallaxs['main_slider_description'][1]; ?></p>
      </div>
    </div>
    <?php } endwhile; wp_reset_query(); ?>
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
        <?php query_posts(array('post_type' => 'home'));
        while(have_posts()) : the_post();
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
        <?php } endwhile; wp_reset_query(); ?>
      </ul>
    </div><!-- end slider -->
  </div><!-- end section-top -->

  <div id="section-middle">
    <?php query_posts(array('post_type' => 'news', 'order' => 'ASC', 'orderby' => 'menu_order ASC', 'posts_per_page' => 3)); ?>
    <?php while(have_posts()) : the_post();
    $news = get_group('news');
    foreach($news as $newss) { ?>
    <div class="listem">
      <img src="<?php echo $newss['news_image'][1]['thumb']; ?>" alt=""/>
      <div class="contenthover">
          <h3><?php echo $newss['news_date'][1]; ?></h3>
          <p><a class="mybutton" href="<?php the_permalink(); ?>">READ NEWS</a></p>
      </div>
      <div class="content-listem">
        <h2>
          <?php if (strlen($post->post_title) > 39) {
          echo substr(the_title($before = '', $after = '', FALSE), 0, 39) . '...'; } else {
          the_title();
          } ?>
        </h2>
        <?php echo substr(get('news_content'),0,100); ?>...
        <p><a class="tmore" href="<?php the_permalink(); ?>">MORE</a></p>
      </div>
    </div> <!-- end listem -->
    
    <?php } endwhile; wp_reset_query(); ?>
  </div><!-- end section middle -->

  <div id="client">
    <div class="client-left">
      <div class="contentcleft">
        <h2>CLIENTS</h2>
        <p class="tmore">Here Some of Our Client.</p>
      </div>
    </div>
    <div class="wrapclient-slider">
      <ul class="slides">
        <?php query_posts(array('post_type' => 'home'));
        while(have_posts()) : the_post();
        $client = get_group('client');
        $j = count($client[1]['client_client_image']);      
        for ($i = 1;$i<= $j; $i++) :
        ?>
        <li>
          <div class="listclient">
            <img src="<?php echo $client[1]['client_client_image'][$i]['thumb']; ?>"/>
          </div>
        </li>
        <?php endfor; endwhile; wp_reset_query(); ?>
      </ul>
    </div> <!-- end wrapclient-slider -->
  </div> <!-- end client -->

 <?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.1.8.3min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.color.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.contenthover.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home.js"></script>