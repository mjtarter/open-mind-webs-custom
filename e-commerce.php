<?php 

$title = "E-commerce | Matt Tarter | Open Mind Webs";

include 'inc/header.php'; ?>

<section class="main-content services-template">
	<div class="container p-vert-50">
		<div class="col-sm-push-8 col-sm-4">
			<form name="services-dropdown" class="visible-xs text-center">
				<p class="title h4">Services:
				<select id="services" style="width:90%;" name="menu" onChange="top.location.href = this.form.menu.options[this.form.menu.selectedIndex].value;return false;">
					<option>E-commerce</option>
					<option value="web-development.php">Web Development</option>
					<option value="web-design.php">Web Design</option>
					<option value="database-management.php">Database Management</option>
					<option value="seo.php">Copywriting / SEO</option>
					<option value="analytics.php">Analytics</option>
				</select></p>
			</form>
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
				<a href="web-development.php"><li id="link-1" onMouseOver='bgChange("link-1")' onMouseOut='bgChangeBack("link-1");'>Web Development</li></a>
				<a href="web-design.php"><li id="link-2" onMouseOver='bgChange("link-2")' onMouseOut='bgChangeBack("link-2");'>Web Design</li></a>
				<a href="database-management.php"><li id="link-3" onMouseOver='bgChange("link-3")' onMouseOut='bgChangeBack("link-3");'>Database Management</li></a>
				<a href="seo.php"><li id="link-4" onMouseOver='bgChange("link-4")' onMouseOut='bgChangeBack("link-4");'>Copywriting / SEO</li></a>
				<a href="#"><li class="active">E-commerce</li></a>
				<a href="analytics.php"><li id="link-5" onMouseOver='bgChange("link-5")' onMouseOut='bgChangeBack("link-5");'>Analytics</li></a>
			</ul>
		</div>
		<div class="col-sm-pull-4 col-sm-8">
			<h1 class="m-0 text-center"><img src="img/e-commerce.png">E-commerce</h1>
			<p style="padding-top:20px;">Would you like to take advantage of the convenience of an online store to sell your products? I can help you set up a professional online store on your site that will accept credit cards through a process that is guaranteed to be safe and secure with PayPal. Create a specialized store layout with custom images, descriptions, prices, shipping costs, and dropdowns of colors and sizes for specific items. <b>I have experience working on the back-end of large E-commerce websites like Walmart, Target, and Staples and will make it quick and easy for customers to have a user-friendly and efficient purchase on your website.</b></p>
			<button onclick="window.location.href='contact.php'" style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?> 