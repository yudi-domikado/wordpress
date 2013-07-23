<?php get_header(); ?>
	<div id="navigatenews">
		<ul>
			<li id="child-1" class="active"><a>PRESS RELEASE</a></li>
			<li id="child-2"><a href="#">CORPORATE RESPONSIBILITIES</a></li>
		</ul>
	</div>

	<div id="contentnews">
		<div class="wraplistem-news">
			<div class="listem">
				<img src="<?php bloginfo('template_directory'); ?>/images/employe2.jpg" alt=""/>
				<div class="content-listem">
					<p class="press-listem">PRESS RELEASE</p>
					<h2>Dynaplast Go Private, <br/>
					Saham Rp 4500...</h2>
					<p class="date-listem">October 25, 2013</p>
				</div>
				<p class="desc-listem">
					Born 1955, Board member since 1990
					Graduated in 1978 with First Class Honors in Industrial Engineering and the University Medal from the University of New South Wales, Australia. Joined PT Dynaplast the following year as Director and also served as Treasurer of the Indonesian Plastic Association (1987-1988)...
				</p>
			</div>
			<div class="listem">
				<img src="<?php bloginfo('template_directory'); ?>/images/employe5.jpg" alt=""/>
				<div class="content-listem">
					<p class="press-listem">PRESS RELEASE</p>
					<h2>PT Dynaplast Tbk. <br/>
					Raih ISO 2000</h2>
					<p class="date-listem">October 25, 2013</p>
				</div>
				<p class="desc-listem">
					Born 1955, Board member since 1990
					Graduated in 1978 with First Class Honors in Industrial Engineering and the University Medal from the University of New South Wales, Australia. Joined PT Dynaplast the following year as Director and also served as Treasurer of the Indonesian Plastic Association (1987-1988)...
				</p>
			</div>
			<div class="listem">
				<img src="<?php bloginfo('template_directory'); ?>/images/employe7.jpg" alt=""/>
				<div class="content-listem">
					<p class="press-listem">PRESS RELEASE</p>
					<h2>Opening Pabrik Baru DP-9 di Cikarang</h2>
					<p class="date-listem">October 25, 2013</p>
				</div>
				<p class="desc-listem">
					Born 1955, Board member since 1990
					Graduated in 1978 with First Class Honors in Industrial Engineering and the University Medal from the University of New South Wales, Australia. Joined PT Dynaplast the following year as Director and also served as Treasurer of the Indonesian Plastic Association (1987-1988)...
				</p>
			</div>
		</div>
		<div class="wraplistem-news">
			<div class="listem">
				<img src="<?php bloginfo('template_directory'); ?>/images/employe4.jpg" alt=""/>
				<div class="content-listem">
					<p class="press-listem">PRESS RELEASE</p>
					<h2>Inovasi Packaging Minuman Dynaplast</h2>
					<p class="date-listem">October 25, 2013</p>
				</div>
				<p class="desc-listem">
					Born 1955, Board member since 1990
					Graduated in 1978 with First Class Honors in Industrial Engineering and the University Medal from the University of New South Wales, Australia. Joined PT Dynaplast the following year as Director and also served as Treasurer of the Indonesian Plastic Association (1987-1988)...
				</p>
			</div>
			<div class="listem">
				<img src="<?php bloginfo('template_directory'); ?>/images/employe6.jpg" alt=""/>
				<div class="content-listem">
					<p class="press-listem">PRESS RELEASE</p>
					<h2>Packaging Bertekstur Inovasi Dynaplast</h2>
					<p class="date-listem">October 25, 2013</p>
				</div>
				<p class="desc-listem">
					Born 1955, Board member since 1990
					Graduated in 1978 with First Class Honors in Industrial Engineering and the University Medal from the University of New South Wales, Australia. Joined PT Dynaplast the following year as Director and also served as Treasurer of the Indonesian Plastic Association (1987-1988)...
				</p>
			</div>
			<div class="listem">
				<img src="<?php bloginfo('template_directory'); ?>/images/employe2.jpg" alt=""/>
				<div class="content-listem">
					<p class="press-listem">PRESS RELEASE</p>
					<h2>Dynaplast Go Private, <br/>
					Saham Rp 4500...</h2>
					<p class="date-listem">October 25, 2013</p>
				</div>
				<p class="desc-listem">
					Born 1955, Board member since 1990
					Graduated in 1978 with First Class Honors in Industrial Engineering and the University Medal from the University of New South Wales, Australia. Joined PT Dynaplast the following year as Director and also served as Treasurer of the Indonesian Plastic Association (1987-1988)...
				</p>
			</div>
		</div>
	</div> <!-- end contentnews -->

	<a class="loadmore" href="#">LOAD MORE</a>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.listem').mouseover(function(){
			$('img').stop().animate({marginTop: "-254px"}, 400);
		}).mouseout(function(){
			$('img').stop().animate({marginTop: "0"}, 400);
		});
	});
</script>