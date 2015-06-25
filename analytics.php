<?php 

$title = "Analytics | Matt Tarter | Open Mind Webs";

include 'inc/header.php'; ?>

<section class="main-content">
	<div class="container p-vert-50">
		<div class="col-sm-push-8 col-sm-4">
			<div class="visible-xs text-center">
				<p class="title h4">Services:
				<select id="services" style="width:90%;">
					<option>Web Development</option>
					<option>Web Design</option>
					<option>Database Management</option>
					<option>Copywriting / SEO</option>
					<option>E-commerce</option>
					<option class="active">Analytics</option>
				</select></p>
			</div>
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
				<a href="web-development.php"><li id="link-1" onMouseOver='bgChange("link-1")' onMouseOut='bgChangeBack("link-1");'>Web Development</li></a>
				<a href="web-design.php"><li id="link-2" onMouseOver='bgChange("link-2")' onMouseOut='bgChangeBack("link-2");'>Web Design</li></a>
				<a href="database-management.php"><li id="link-3" onMouseOver='bgChange("link-3")' onMouseOut='bgChangeBack("link-3");'>Database Management</li></a>
				<a href="seo.php"><li id="link-4" onMouseOver='bgChange("link-4")' onMouseOut='bgChangeBack("link-4");'>Copywriting / SEO</li></a>
				<a href="e-commerce.php"><li id="link-5" onMouseOver='bgChange("link-5")' onMouseOut='bgChangeBack("link-5");'>E-commerce</li></a>
				<a href="#"><li class="active">Analytics</li></a>
			</ul>
		</div>
		<div class="col-sm-pull-4 col-sm-8">
			<h1 class="m-0 text-center"><img src="img/analytics.png">Analytics</h1>
			<p style="padding-top:20px;">I can add powerful tools to your site that capture valuable information and statistics about your website visitors. You will be able to access key metrics that will help you to analyze visitor traffic and get a complete picture of who your audience is.<b> Analytics will help you trace your customer’s path and discover how they reached your website as well as what their user experience was like.</b> You also will have the ability to see how users interact with your website. Just a few of the key metrics we’ll help you to obtain are listed below.</p>
			<div class="clearfix">
				<ul class="analytics">
					<li>&#8226; Age / Gender</li> 
					<li>&#8226; Pages / Visit</li>
					<li>&#8226; Geographic Location</li>
					<li>&#8226; % New Visits</li>
					<li>&#8226; Average Visit Duration</li>
					<li>&#8226; Bounce Rate</li>
					<li>&#8226; Device used</li>
					<li>&#8226; Hundreds of other metrics</li>
				</ul>
			</div>
			<button style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?> 