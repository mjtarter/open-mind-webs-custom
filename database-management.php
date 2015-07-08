<?php 

$title = "Database Management | Matt Tarter | Open Mind Webs";

include 'inc/header.php'; ?>

<section class="main-content services-template">
	<div class="container p-vert-50">
		<div class="col-sm-push-8 col-sm-4">
			<form name="services-dropdown" class="visible-xs text-center">
				<p class="title h4">Services:
				<select id="services" style="width:90%;" name="menu" onChange="top.location.href = this.form.menu.options[this.form.menu.selectedIndex].value;return false;">
					<option>Database Management</option>
					<option value="web-development">Web Development</option>
					<option value="web-design.php">Web Design</option>
					<option value="seo.php">Copywriting / SEO</option>
					<option value="e-commerce.php">E-commerce</option>
					<option value="analytics.php">Analytics</option>
				</select></p>
			</form>
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
				<a href="web-development.php"><li id="link-1" onMouseOver='bgChange("link-1")' onMouseOut='bgChangeBack("link-1");'>Web Development</li></a>
				<a href="web-design.php"><li id="link-2" onMouseOver='bgChange("link-2")' onMouseOut='bgChangeBack("link-2");'>Web Design</li></a>
				<a href="#"><li class="active">Database Management</li></a>
				<a href="seo.php"><li id="link-3" onMouseOver='bgChange("link-3")' onMouseOut='bgChangeBack("link-3");'>Copywriting / SEO</li></a>
				<a href="e-commerce.php"><li id="link-4" onMouseOver='bgChange("link-4")' onMouseOut='bgChangeBack("link-4");'>E-commerce</li></a>
				<a href="analytics.php"><li id="link-5" onMouseOver='bgChange("link-5")' onMouseOut='bgChangeBack("link-5");'>Analytics</li></a>
			</ul>
		</div>
		<div class="col-sm-pull-4 col-sm-8">
			<h1 class="m-0 text-center"><img src="img/database-management.png">Database Management</h1>
			<p style="padding-top:20px;">Big data is everywhere around us but it is meaningless without the power to quickly and efficiently manage it. There are a variety of ways to manage data ranging from complex systems that include front end interfaces that allow you to sort, add, update, and search as well as simple Microsoft Excel spreadsheets. <b>I have created large systems to assist international companies with managing detailed information for thousands of products and I have also helped individuals keep track of personal belongings for insurance purposes by photographing their items and creating excel spreadsheets with basic info.</b> I’ll work with you to find the method that is most suitable for your needs whether you want to manage thousands of family photos, large quantities of customer data, inventory, etc.
</p>
			<button onclick="window.location.href='contact.php'" style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  