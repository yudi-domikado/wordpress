<?php get_header(); ?>
	<div id="backnav">
		<p><a href="#">BACK TO ALL NEWS</a></p>
	</div>

	<div id="content-detailnews">
		<div class="slider-detailnews">
			<ul class="slides">
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/imagedetail-news.jpg"/>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/imagedetail-news.jpg"/>
				</li>
			</ul>
		</div>

		<div class="article-detailnews">
			<p class="press-detailnews">PRESS RELEASE</p>
			<h2>Dynaplast Go Privat, Saham Ditawarkan Rp 4500 Per Lembar per Oktober 2012</h2>
			<p class="date-detailnews">Posted October 25, 2013 | by Jakarta Post</p>
			<?php the_content(); ?>
		</div>
	</div> <!-- end content-detailnews -->

	<div class="wraplistem-news wraplist-detailnews">
		<h2 class="textborder-thick">Other News</h2>

		<div class="listem">
			<img src="<?php bloginfo('template_directory'); ?>/images/employe2.jpg" alt=""/>
			<div class="content-listem">
				<p class="press-listem">PRESS RELEASE</p>
				<h2>Dynaplast Go Private, <br/>
				Saham Rp 4500...</h2>
				<p class="date-listem">October 25, 2013</p>
			</div>
		</div>
		<div class="listem">
			<img src="<?php bloginfo('template_directory'); ?>/images/employe5.jpg" alt=""/>
			<div class="content-listem">
				<p class="press-listem">PRESS RELEASE</p>
				<h2>PT Dynaplast Tbk. <br/>
				Raih ISO 2000</h2>
				<p class="date-listem">October 25, 2013</p>
			</div>
		</div>
		<div class="listem">
			<img src="<?php bloginfo('template_directory'); ?>/images/employe7.jpg" alt=""/>
			<div class="content-listem">
				<p class="press-listem">PRESS RELEASE</p>
				<h2>Opening Pabrik Baru DP-9 di Cikarang</h2>
				<p class="date-listem">October 25, 2013</p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slider-detailnews').flexslider({
		  animation: "slide",
		  animationLoop: true,
		  itemWidth: 939,
		  itemMargin: 0
		});
	});
</script>