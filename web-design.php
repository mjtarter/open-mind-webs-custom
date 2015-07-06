<?php 

$title = "Web Design | Matt Tarter | Open Mind Webs";

include 'inc/header.php'; ?>

<section class="main-content">
	<div class="container p-vert-50">
		<div class="col-sm-push-8 col-sm-4">
			<form class="visible-xs text-center">
				<p class="title h4">Services:
				<select id="services" style="width:90%;" name="menu" onChange="top.location.href = this.form.menu.options[this.form.menu.selectedIndex].value;return false;">
					<option>Web Design</option>
					<option value="web-development.php">Web Development</option>
					<option value="database-management.php">Database Management</option>
					<option value="seo.php">Copywriting / SEO</option>
					<option value="e-commerce.php">E-commerce</option>
					<option value="analytics.php">Analytics</option>
				</select></p>
			</form>
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
				<a href="web-development.php"><li id="link-1" onMouseOver='bgChange("link-1")' onMouseOut='bgChangeBack("link-1");'>Web Development</li></a>
				<a href="#"><li class="active">Web Design</li></a>
				<a href="database-management.php"><li id="link-2" onMouseOver='bgChange("link-2")' onMouseOut='bgChangeBack("link-2");'>Database Management</li></a>
				<a href="seo.php"><li id="link-3" onMouseOver='bgChange("link-3")' onMouseOut='bgChangeBack("link-3");'>Copywriting / SEO</li></a>
				<a href="e-commerce.php"><li id="link-4" onMouseOver='bgChange("link-4")' onMouseOut='bgChangeBack("link-4");'>E-commerce</li></a>
				<a href="analytics.php"><li id="link-5" onMouseOver='bgChange("link-5")' onMouseOut='bgChangeBack("link-5");'>Analytics</li></a>
			</ul>
		</div>
		<div class="col-sm-pull-4 col-sm-8">
			<h1 class="m-0 text-center"><img src="img/web-design.png"> Web Design</h1>
			<p style="padding-top:20px;"><p>Web design involves the look and feel of your site as well as the structure and content placement. The design phase involves selecting color schemes, typography, layouts, and user interaction / experience design. <b>Good website design is vital, because it is often the first impression you make on your customers and can either draw them in and give them the information they want or it can send them somewhere else in a hurry.</b></p>
			<button onclick="window.location.href='contact.php'" style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  