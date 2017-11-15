<?php 
	/* Template Name: Contact 
	*/ 
	get_header();
	
?>
<section class="banner portfolio_banner">
	<div id="banner_slider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
			<div class="item active" style="background:url(<?php echo esc_url(get_template_directory_uri());?>/assets/images/contact_banner.jpg) no-repeat;">
				<div class="banner_caption">
				<h1>Contact Us</h1> </div>
			</div>
		</div>
	</div>
</section>
<!--banner end -->
<section class="contact_sec">
	<div class="container">
		<div class="contact_bx">
			<ul>
				<li>
					<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/pin.svg" alt="pin"></figure>
					<p>lefroy designs 3698 Dummy
					<br> Lorem Ipsum AW 3692</p>
				</li>
				<li>
					<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/phone.svg" alt="phone"></figure>
					<p>
					<label>Tel:</label><a href="tel:0836969875" title="">(08) 3696 9875</a></p>
				</li>
				<li>
					<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/mail.svg" alt="mail"></figure>
					<p>
					<label>Email:</label><a href="mailto:info@lefroydesigns.com">info@lefroydesigns.com</a></p>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--contact_sec end -->
<section class="home_design contact_design">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading">
				<h2>I am looking for...</h2> </div>
				<div class="design_list">
					<ul>
						<li>
							<a href="#" title="">
								<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/enquiry.jpg" alt="enquiry">
									<div class="design_overlay">
										<div class="display-table">
											<div class="display-table-cell">
											<h4>General Enquiry</h4></div>
										</div>
									</div>
								</figure>
							</a>
						</li>
						<li>
							<a href="#" title="">
								<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/ld_cnslt.jpg" alt="ld_cnslt">
									<div class="design_overlay">
										<div class="display-table">
											<div class="display-table-cell">
											<h4>Landscape Design Consult</h4></div>
										</div>
									</div>
								</figure>
							</a>
						</li>
						<li>
							<a href="#" title="">
								<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/planting_cnslt.jpg" alt="planting_cnslt">
									<div class="design_overlay">
										<div class="display-table">
											<div class="display-table-cell">
											<h4>Planting Consultation & Advice</h4></div>
										</div>
									</div>
								</figure>
							</a>
						</li>
						<li>
							<a href="#" title="">
								<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/clt_land.jpg" alt="clt_land">
									<div class="design_overlay">
										<div class="display-table">
											<div class="display-table-cell">
											<h4>Complete Landscape Design</h4></div>
										</div>
									</div>
								</figure>
							</a>
						</li>
						<li>
							<a href="#" title="">
								<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/home_land.jpg" alt="home_land">
									<div class="design_overlay">
										<div class="display-table">
											<div class="display-table-cell">
											<h4>New Home Landscape Design</h4></div>
										</div>
									</div>
								</figure>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- home_design end -->
<section class="contact_form_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 contact_form">
				<div class="home_contact_innr">
					<h2>Contact Us</h2>
					<form>
						<p>
						<input placeholder="Name" class="form_control1" type="text"> </p>
						<p>
						<input placeholder="Email" class="form_control1" type="email"> </p>
						<p>
						<input placeholder="Phone" class="form_control1" type="text"> </p>
						<p class="slct">
							<select class="form_control1 placeholder1">
								<option>I am looking for</option>
								<option>General Enquiry</option>
								<option>Landscape Design Consult</option>
								<option>Planting Consultation & Advice</option>
								<option>Complete Landscape Design</option>
								<option>New Home Landscape Design</option>
							</select>
						</p>
						<p>
							<textarea placeholder="Message" class="form_control1"></textarea>
						</p>
						<p class="sbmt_btn">
						<input value="submit" class="med_btn" type="submit"> </p>
					</form>
				</div>
			</div>
			<div class="col-sm-6 contact_rght">
				<div class="contact_rght_innr">
					<ul>
						<li>
							<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/cost_icon.png" alt="cost_icon"></figure>
							<div class="contact_rght_info">
								<h6>Cost</h6>
								<p>Welcome to online platform. Certified professional advisors will help you to achieve your targets. All services are FREE! Just fill in a register form and then you can find a proper advisor for qualified and effective service businessman.</p>
							</div>
						</li>
						<li>
							<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/frame.png" alt="frame"></figure>
							<div class="contact_rght_info">
								<h6>Time Frame</h6>
								<p>All advisors are certified and you can get reliable service from our online platform. You can find an appropriate advisor using the search bar accordingly.</p>
							</div>
						</li>
						<li>
							<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/inclusions.png" alt="inclusions"></figure>
							<div class="contact_rght_info">
								<h6>Inclusions</h6>
								<p>Don’t hesitate to ask! Let our advisors guide you to achieve success. All advisors are highly experienced and they have been assisting international students for years.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact_form_sec end -->
<section class="work_sec" style="background:url(<?php echo esc_url(get_template_directory_uri());?>/assets/images/work_bg.jpg) no-repeat;">
	<div class="container">
		<div class="heading">
		<h2>OUR WORK</h2> </div>
		<div id="work-demo" class="owl-carousel owl-theme">
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work1_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work1.jpg" alt="work1"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work2_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work2.jpg" alt="work2"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work3_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work3.jpg" alt="work3"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work4_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work4.jpg" alt="work4"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work5_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work5.jpg" alt="work5"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work6_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work6.jpg" alt="work6"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work1_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work1.jpg" alt="work1"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work2_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work2.jpg" alt="work2"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work3_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work3.jpg" alt="work3"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work4_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work4.jpg" alt="work4"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work5_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work5.jpg" alt="work5"></a>
				</figure>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work6_large.jpg" class="fancybox" rel="group" title=""><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/work6.jpg" alt="work6"></a>
				</figure>
			</div>
		</div> <a href="#" title="" class="med_btn white_btn">Contact</a> </div>
</section>
<!-- work_sec end -->
<?php get_footer();?>