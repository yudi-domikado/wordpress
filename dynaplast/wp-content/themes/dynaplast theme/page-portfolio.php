<?php get_header(); ?>

		<div class="wrapperas-portfolio">

			<?php query_posts(array('post_type' => 'portfolio', 'order' => 'ASC'));
	    while(have_posts()) : the_post();
	    $portfolio = get_group('portfolio');
	    foreach($portfolio as $portfolios) { ?>
			<div class="whatwedo-list whatwedo-portfolio">
				<img src="<?php echo $portfolios['portfolio_image'][1]['thumb']; ?>" alt=""/>
				<h2><?php the_title(); ?></h2>
				<h3>Classification:</h3>
				<?php echo $portfolios['portfolio_classification'][1]; ?>
				<a href="<?php the_permalink(); ?>">EXPLORE</a>
			</div>
			<?php } endwhile; wp_reset_query(); ?>
		</div> <!-- end wrapperas -->

			<div id="list-content">

			</div> <!-- end list-content -->

			<div id="list-content2">
				<div class="slider-portfolio2">
					<ul class="slides">
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/images/portfolio2.jpg">
							<h2>THISE MEJERI BOTTLE</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/images/portfolio2.jpg">
							<h2>THISE MEJERI BOTTLE</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/images/portfolio2.jpg">
							<h2>THISE MEJERI BOTTLE</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
						</li>
					</ul>
					<div class="arrow-white">
					</div>
				</div> <!-- end slider-portfolio1 -->
			</div> <!-- end list-content -->

			<div id="client-portfolio">
				<div class="wrap1024">
					<div class="clienttitle-portfolio">
							<h2>OUR CLIENTS</h2>
					</div>
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
				</div>
			</div>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.slider-portfolio, .slider-portfolio2').flexslider({
    animation: "slide",
    slideshow: false,
    animationLoop: true,
  	itemWidth: 1024,
  	itemMargin: 0
	});

	$('#list-content').load($('.whatwedo-portfolio:nth-child(1) a').attr('href'));
	$('.wrapperas-portfolio a').click(function(){
	var href = $(this).attr('href');
	$('.slider-portfolio').fadeOut('fast').load(href).fadeIn('slow');
	return false;
	});

	$('.whatwedo-portfolio:nth-child(1)').css('border-top', '8px solid #3ec0c3');
	$(".whatwedo-portfolio:nth-child(1) a").css('background', '#3ec0c3');

  $('.whatwedo-portfolio:nth-child(2)').css('border-top', '8px solid #f1a01e');
  $(".whatwedo-portfolio:nth-child(2) a").css('background', '#f1a01e');

  $('.whatwedo-portfolio:nth-child(3)').css('border-top', '8px solid #6ac074');
  $(".whatwedo-portfolio:nth-child(3) a").css('background', '#6ac074');

  $('.whatwedo-portfolio:nth-child(4)').css('border-top', '8px solid #00aeef');
  $(".whatwedo-portfolio:nth-child(4) a").css('background', '#00aeef');

	$('#client-portfolio').flexslider({
	  animation: "slide",
	  animationLoop: true,
	  itemWidth: 216,
	  itemMargin: 0
	});
});
</script>