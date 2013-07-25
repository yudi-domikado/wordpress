<?php get_header(); ?>
		<div id="navigateabout">
			<ul>
				<li id="child-1"><a href="<?php bloginfo('url'); ?>/confidential"><?php the_title(); ?></a></li>
				<li id="child-2"><a href="<?php bloginfo('url'); ?>/confidential"><?php the_title(); ?></a></li>
				<li id="child-3"><a href="<?php bloginfo('url'); ?>/confidential"><?php the_title(); ?></a></li>
				<li id="child-4" class="active"><a><?php the_title(); ?></a></li>
			</ul>
		</div>

	<div id="contentgeographic">
	</div>

	<div id="geoaddresslist">
    <?php query_posts(array('post_type' => 'geographical', 'order' => 'ASC'));
    while(have_posts()) : the_post();
    $address = get_group('address');
    foreach($address as $addresss) { ?>
		<div class="geoaddress-contact">
			<h3><?php the_title(); ?></h3>
			<?php echo $addresss['address_address'][1]; ?>
		</div> <!-- end geoaddress-contact -->
		<?php } endwhile; wp_reset_query(); ?>
	</div> <!-- end address-list -->

<?php get_footer(); ?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=en"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/gmap3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script type="text/javascript">
$(function(){
	$("#contentgeographic").gmap3({
	  map:{
	    options:{
	      center:[6.227934,107.050781,48.874629,86.572266],
	      zoom: 4
	    }
	  },
	  marker:{
	    values:[
	      {latLng:[-7.391225,112.477754], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-7.565511,113.268770], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-6.431465,106.413301], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-6.256760,107.138399], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-6.038297,107.402070], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-6.103845,106.907686], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-6.060147,106.731904], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-6.092921,106.413301], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[-6.049222,106.177095], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[14.017930,100.478281], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[13.804648,101.489023], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	      {latLng:[13.377502,108.608163], data:'<div class="infowindow">location info here</div>', options:{icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"}},
	    ],

	    options:{
	      draggable: false
	    },
	    events:{
	      mouseover: function(marker, event, context){
	        var map = $(this).gmap3("get"),
	          infowindow = $(this).gmap3({get:{name:"infowindow"}});
	        if (infowindow){
	          infowindow.open(map, marker);
	          infowindow.setContent(context.data);
	        } else {
	          $(this).gmap3({
	            infowindow:{
	              anchor:marker, 
	              options:{content: context.data}
	            }
	          });
	        }
	      },
	      mouseout: function(){
	        var infowindow = $(this).gmap3({get:{name:"infowindow"}});
	        if (infowindow){
	          infowindow.close();
	        }
	      }
	    }
	  }
	});
});
</script>