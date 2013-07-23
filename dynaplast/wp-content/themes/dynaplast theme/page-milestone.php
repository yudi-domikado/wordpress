<?php get_header(); ?>

		<div id="navigateabout">
			<ul>
				<li id="child-1" class="active"><a href="<?php bloginfo('url'); ?>/leadership"><?php echo get_the_title(13); ?></a></li>
				<li id="child-2"><a href="<?php bloginfo('url'); ?>/leadership"><?php echo get_the_title(13); ?></a></li>
				<li id="child-3"><a><?php the_title(); ?></a></li>
				<li id="child-4"><a href="<?php bloginfo('url'); ?>/geographic"><?php echo get_the_title(13); ?></a></li>
			</ul>
		</div>

		<div id="wrapsection-year">
			<div class="wrapper-year">
				<ul class="slides">
				<li>
				<div class="year-section-1959">
					<div class="year-head">
						<p>1959</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1979">
					<div class="image-year">
						<img src="<?php bloginfo('template_directory'); ?>/images/imgmilestone1.jpg"/>
					</div>
					<div class="year-head">
						<p>1979</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</lli>

				<li>
				<div class="year-section-1991">
					<div class="year-head">
						<p>1991</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
					<div class="image-year">
						<img src="<?php bloginfo('template_directory'); ?>/images/imgmilestone2.jpg"/>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1995">
					<div class="image-year">
						<img src="<?php bloginfo('template_directory'); ?>/images/imgmilestone2.jpg"/>
					</div>
					<div class="year-head">
						<p>1995</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1996">
					<div class="year-head">
						<p>1996</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1997">
					<div class="image-year">
						<img src="<?php bloginfo('template_directory'); ?>/images/imgmilestone2.jpg"/>
					</div>
					<div class="year-head">
						<p>1997</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1991">
					<div class="year-head">
						<p>1999</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
					<div class="image-year">
						<img src="<?php bloginfo('template_directory'); ?>/images/imgmilestone2.jpg"/>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1995">
					<div class="image-year">
						<img src="<?php bloginfo('template_directory'); ?>/images/imgmilestone2.jpg"/>
					</div>
					<div class="year-head">
						<p>2000</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1996">
					<div class="year-head">
						<p>2001</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</li>

				<li>
				<div class="year-section-1997">
					<div class="image-year">
						<img src="<?php bloginfo('template_directory'); ?>/images/imgmilestone2.jpg"/>
					</div>
					<div class="year-head">
						<p>2002</p>
					</div>
					<div class="year-desc">
						<p>The Company is established as PT National Electric Wire Ltd., a manufacturer of PVC encapsulated electric cables.</p>
					</div>
				</div> <!-- end -->
				</li>
				</ul>
			</div> <!-- end wrapper-year -->
		</div>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('.wrapper-year').flexslider({
	    animation: "slide",
	    slideshow: false,
	    animationLoop: true,
	  	itemWidth: 170,
    	itemMargin: 0
		});
	});
</script>