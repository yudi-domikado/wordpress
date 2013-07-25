<?php get_header(); ?>
  <?php query_posts(array('post_type' => 'leadership'));
  while(have_posts()) : the_post(); ?>
		<div id="navigateabout">
			<ul>
				<li id="child-1"><a href="<?php bloginfo('url'); ?>/confidential"><?php the_title(); ?></a></li>
				<li id="child-2" class="active"><a><?php the_title(); ?></a></li>
				<li id="child-3"><a href="<?php bloginfo('url'); ?>/confidential"><?php echo get_the_title(13); ?></a></li>
				<li id="child-4"><a href="<?php bloginfo('url'); ?>/geographic"><?php echo get_the_title(13); ?></a></li>
			</ul>
		</div>

	<div id="contentleadership">
		<div class="wrapperleader-person">
			<div class="leadersection1">
				<article class="leader-person">
			    <?php 
			    $leader1 = get_group('leader');
			    foreach($leader1 as $leaders1) { ?>
					<div class="contentleadp">
					<img src="<?php echo $leaders1['leader_photo'][1]['thumb']; ?>" alt=""/>
					<h3><?php echo $leaders1['leader_name'][1]; ?></h3>
					<h4><?php echo $leaders1['leader_position'][1]; ?></h4>
					</div>
					<?php } ?>
				</article> <!-- end leader-person -->

				<article class="leader-person-middle">
			    <?php 
			    $leader2 = get_group('leader_2');
			    foreach($leader2 as $leaders2) { ?>
					<div class="contentleadp">
					<img src="<?php echo $leaders2['leader_2_photo'][1]['thumb']; ?>" alt=""/>
					<h3><?php echo $leaders2['leader_2_name'][1]; ?></h3>
					<h4><?php echo $leaders2['leader_2_position'][1]; ?></h4>
					</div>
					<?php } ?>
				</article> <!-- end leader-person -->

				<article class="leader-person-last">
			    <?php 
			    $leader3 = get_group('leader_3');
			    foreach($leader3 as $leaders3) { ?>
					<div class="contentleadp">
					<img src="<?php echo $leaders3['leader_3_photo'][1]['thumb']; ?>" alt=""/>
					<h3><?php echo $leaders3['leader_3_name'][1]; ?></h3>
					<h4><?php echo $leaders3['leader_3_position'][1]; ?></h4>
					</div>
					<?php } ?>
				</article> <!-- end leader-person -->
			</div> <!-- end leader-section1 -->

			<div class="leader-desc">
				<div class="wrap1024">
					<div class="close-ldesc"></div>
					<div class="wrap-ldesc">
						<div class="leader-arrow"></div>
						<div class="left-ldesc">
							<h2><?php echo $leaders1['leader_name'][1]; ?></h2>
							<p class="textborder-thick"><?php echo $leaders1['leader_position'][1]; ?></p>
						</div>
						<div class="right-ldesc">
							<?php echo $leaders1['leader_biography'][1]; ?>
						</div>
					</div> <!-- end wrap-ldesc -->

					<div class="wrap-ldesc-middle">
						<div class="leader-arrow"></div>
						<div class="left-ldesc">
							<h2><?php echo $leaders2['leader_2_name'][1]; ?></h2>
							<p class="textborder-thick"><?php echo $leaders2['leader_2_position'][1]; ?></p>
						</div>
						<div class="right-ldesc">
							<?php echo $leaders2['leader_2_biography'][1]; ?>
						</div>
					</div> <!-- end wrap-ldesc -->

					<div class="wrap-ldesc-last">
						<div class="leader-arrow"></div>
						<div class="left-ldesc">
							<h2><?php echo $leaders3['leader_3_name'][1]; ?></h2>
							<p class="textborder-thick"><?php echo $leaders3['leader_3_position'][1]; ?></p>
						</div>
						<div class="right-ldesc">
							<?php echo $leaders3['leader_3_biography'][1]; ?>
						</div>
					</div> <!-- end wrap-ldesc -->
				</div> <!-- end wrap1024 -->
			</div> <!-- end leader desc -->

			<div class="leadersection2">
				<article class="leader-person2">
			    <?php 
			    $leader4 = get_group('leader_4');
			    foreach($leader4 as $leaders4) { ?>
					<div class="contentleadp">
					<img src="<?php echo $leaders4['leader_4_photo'][1]['thumb']; ?>" alt=""/>
					<h3><?php echo $leaders4['leader_4_name'][1]; ?></h3>
					<h4><?php echo $leaders4['leader_4_position'][1]; ?></h4>
					</div>
					<?php } ?>
				</article> <!-- end leader-person -->

				<article class="leader-person2-middle">
			    <?php 
			    $leader5 = get_group('leader_5');
			    foreach($leader5 as $leaders5) { ?>
					<div class="contentleadp">
					<img src="<?php echo $leaders5['leader_5_photo'][1]['thumb']; ?>" alt=""/>
					<h3><?php echo $leaders5['leader_5_name'][1]; ?></h3>
					<h4><?php echo $leaders5['leader_5_position'][1]; ?></h4>
					</div>
					<?php } ?>
				</article> <!-- end leader-person -->

				<article class="leader-person2-last">
			    <?php 
			    $leader6 = get_group('leader_6');
			    foreach($leader6 as $leaders6) { ?>
					<div class="contentleadp">
					<img src="<?php echo $leaders6['leader_6_photo'][1]['thumb']; ?>" alt=""/>
					<h3><?php echo $leaders6['leader_6_name'][1]; ?></h3>
					<h4><?php echo $leaders6['leader_6_position'][1]; ?></h4>
					</div>
					<?php } ?>
				</article> <!-- end leader-person -->
			</div> <!-- end leader-section1 -->

			<div class="leader-desc2">
				<div class="wrap1024">
					<div class="close-ldesc"></div>
					<div class="wrap-ldesc2">
						<div class="leader-arrow"></div>
						<div class="left-ldesc">
							<h2><?php echo $leaders4['leader_4_name'][1]; ?></h2>
							<p class="textborder-thick"><?php echo $leaders4['leader_4_position'][1]; ?></p>
						</div>
						<div class="right-ldesc">
							<?php echo $leaders4['leader_4_biography'][1]; ?>
						</div>
					</div> <!-- end wrap-ldesc -->

					<div class="wrap-ldesc2-middle">
						<div class="leader-arrow"></div>
						<div class="left-ldesc">
							<h2><?php echo $leaders5['leader_5_name'][1]; ?></h2>
							<p class="textborder-thick"><?php echo $leaders5['leader_5_position'][1]; ?></p>
						</div>
						<div class="right-ldesc">
							<?php echo $leaders5['leader_5_biography'][1]; ?>
						</div>
					</div> <!-- end wrap-ldesc -->

					<div class="wrap-ldesc2-last">
						<div class="leader-arrow"></div>
						<div class="left-ldesc">
							<h2><?php echo $leaders6['leader_6_name'][1]; ?></h2>
							<p class="textborder-thick"><?php echo $leaders6['leader_6_position'][1]; ?></p>
						</div>
						<div class="right-ldesc">
							<?php echo $leaders6['leader_6_biography'][1]; ?>
						</div>
					</div> <!-- end wrap-ldesc -->
				</div> <!-- end wrap1024 -->
			</div> <!-- end leader desc -->
			</div> <!-- end leader-desc2 -->
		</div> <!-- end wrapperleader-person -->
	</div> <!-- end contentleadership -->

<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/leadership.js"></script>