<?php get_header(); ?>
<?php query_posts(array('post_type' => 'news', 'order' => 'ASC', 'orderby' => 'menu_order ASC')); ?>
	<div id="navigatenews">
		<ul>
			<li id="child-1" class="active"><a>PRESS RELEASE</a></li>
			<li id="child-2"><a href="#">CORPORATE RESPONSIBILITIES</a></li>
		</ul>
	</div>

	<div id="contentnews">
		<div class="wraplistem-news">
		<?php while(have_posts()) : the_post(); ?>
    <?php 
    $news = get_group('news');
    foreach($news as $newss) { ?>
			<div class="listem">
				<img src="<?php echo $newss['news_image'][1]['thumb']; ?>" alt=""/>
				<div class="content-listem">
					<p class="press-listem">PRESS RELEASE</p>
					<h2>
						<?php if (strlen($post->post_title) > 39) {
						echo substr(the_title($before = '', $after = '', FALSE), 0, 39) . '...'; } else {
						the_title();
						} ?>
					</h2>
					<p class="date-listem"><?php echo $newss['news_date'][1]; ?></p>
				</div>
				<span class="desc-listem">
					<?php echo substr(get('news_content'),0,300); ?>...
				</span>
			</div>
			<?php } endwhile; ?>
		</div>
	</div> <!-- end contentnews -->

	<a class="loadmore">LOAD MORE</a>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.listem').mouseover(function(){
			$('img').stop().animate({marginTop: "-254px"}, 400);
		}).mouseout(function(){
			$('img').stop().animate({marginTop: "0"}, 400);
		});
		$('.loadmore').click(function(){
			$('.wraplistem-news').animate({height: '+=891'}, 800);
		})
	});
</script>