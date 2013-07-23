<?php get_header(); ?>

	<div id="tab">
		<div class="project-idea">
			<h3>Share Project Idea</h3>
		</div>
		<div class="ask-us">
			<h3>Ask Us Something</h3>
		</div>
	</div>

	<div id="content-contact">
		<form class="" action="/">
			<div class="wrapper-form">
				<div class="information">
					<div class="titleform-contact">
						<h3>Contact Information</h3>
					</div>
					<input type="text" name="" placeholder="Company Name"/>
					<input type="text" name="" placeholder="Contact Person"/>
					<input type="text" name="" placeholder="Telephone"/>
					<input type="text" name="" placeholder="Fax"/>
					<input type="text" name="" placeholder="Email Address"/>
					<input type="text" name="" placeholder="Address"/>
					<input type="text" name="" placeholder="Country"/>
				</div> <!-- end information -->
				<div class="product">
					<div class="titleform-contact">
						<h3>Describe Your Products</h3>
					</div>
					<select name="product" tabindex="1" class="select-product">
					  <option value="">Select Your Product Type</option>
					  <option value="amazed">Amazed</option>
					  <option value="bored">Bored</option>
					  <option value="surprised">Surprised</option>
					</select>
					<textarea placeholder="Product Spectification"></textarea>
					<select name="quantity" tabindex="1" class="select-quantity">
					  <option value="">Quantity</option>
					  <option value="amazed">Amazed</option>
					  <option value="bored">Bored</option>
					  <option value="surprised">Surprised</option>
					</select>
					<select name="technology" tabindex="1" class="select-technology">
					  <option value="">Select Your Technology</option>
					  <option value="amazed">Amazed</option>
					  <option value="bored">Bored</option>
					  <option value="surprised">Surprised</option>
					</select>
				</div> <!-- end product -->
				<div class="appointment">
					<div class="titleform-contact">
						<h3>Appointment</h3>
					</div>
					<div class="checkbox">
					    <label for="check1">Arrange The Meeting</label>
					    <input type="checkbox" name="check1" id="check1" value="1"/>
					</div>
					<input type="text" name="" placeholder="Date"/>
					<input type="text" name="" placeholder="Time"/>
					<input type="text" name="" placeholder="Venue"/>
					<div class="checkbox">
					    <label for="check2">Send The Catalogue</label>
					    <input type="checkbox" name="check1" id="check2" value="2"/>
					</div>
					<input type="text" name="" placeholder="Fax"/>
					<input type="text" name="" placeholder="Address"/>
				</div> <!-- appointment -->
			</div> <!-- end wrapper-form -->
			<input class="buttoncontact" type="submit" value="Send Inquiry Form"/>
		</form>
	</div> <!-- end content-contact -->

	<div id="map">
		<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?t=m&amp;hl=en&amp;ie=UTF8&amp;ll=-6.219893,106.77431&amp;spn=0.012308,0.021136&amp;z=16&amp;output=embed">
		</iframe>
	</div>

	<div id="addresslist">
		<div class="address-contact">
			<h3>Head Office</h3>
			<p>
				Dynaplast Tower 9-10th Floor<br/>
				Jl. M.H. Thamrin No. 1<br/>
				Lippo Karawaci, Tangerang<br/>
				Jawa Barat, Indonesia 15811<br/>
				Phone: +6221 546 3111/1112-5
			</p>
		</div>

		<div class="address-contact">
			<h3>Dynaplast Jatake</h3>
			<p>
				Jl. Industri Raya II Blok F No.9<br/>
				Jatake, Banten 15135, Indonesia<br/>
				Phone: +6221 590 0701/0691<br/>
				Fax: +6221 590 0694/5930 2177
			</p>
		</div>

		<div class="address-contact">
			<h3>Dynaplast Cibitung</h3>
			<p>
				Jl. Inspeksi Saluran Rt.01/01<br/>
				Kel. Sukadanau Cibitung<br/>
				Bekasi 17520 Jawa Barat, Indonesia<br/>
				Ph: +6221 8832 0085<br/>
				Fax: +6221 8832 0347
			</p>
		</div>

		<div class="address-contact">
			<h3>Dynaplast Cikarang</h3>
			<p>
				Kawasan Industri BIIE Blok C1 No.17<br/>
				Lippo Cikarang, Bekasi 17550<br/>
				Jawa Barat, Indonesia<br/>
				Ph: +6221 8990 6615/16
			</p>
		</div>
	</div> <!-- end address-list -->

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-checkbox-2.0.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.dropkick-1.0.0.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact.js"></script>

