<?php 

$title = "Website Development | Matt Tarter | Open Mind Webs";

include 'inc/header.php'; ?>

<section class="main-content services-template">
	<div class="container p-vert-50">
		<div class="col-sm-push-8 col-sm-4">
			<form name="services-dropdown" class="visible-xs text-center">
				<p class="title h4">Services:
				<select id="services" style="width:90%;" name="menu" onChange="top.location.href = this.form.menu.options[this.form.menu.selectedIndex].value;return false;">
					<option>Web Development</option>
					<option value="web-design.php">Web Design</option>
					<option value="database-management.php">Database Management</option>
					<option value="seo.php">Copywriting / SEO</option>
					<option value="e-commerce.php">E-commerce</option>
					<option value="analytics.php">Analytics</option>
				</select></p>
			</form>
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
				<a href="#"><li class="active">Web Development</li></a>
				<a href="web-design.php"><li id="link-1" onMouseOver='bgChange("link-1")' onMouseOut='bgChangeBack("link-1");'>Web Design</li></a>
				<a href="database-management.php"><li id="link-2" onMouseOver='bgChange("link-2")' onMouseOut='bgChangeBack("link-2");'>Database Management</li></a>
				<a href="seo.php"><li id="link-3" onMouseOver='bgChange("link-3")' onMouseOut='bgChangeBack("link-3");'>Copywriting / SEO</li></a>
				<a href="e-commerce.php"><li id="link-4" onMouseOver='bgChange("link-4")' onMouseOut='bgChangeBack("link-4");'>E-commerce</li></a>
				<a href="analytics.php"><li id="link-5" onMouseOver='bgChange("link-5")' onMouseOut='bgChangeBack("link-5");'>Analytics</li></a>
			</ul>
		</div>
		<div class="col-sm-pull-4 col-sm-8">
			<h1 class="m-0 text-center"><img src="img/web-development.png"> Web Development</h1>
			<p style="padding-top:20px;">Web development involves the behind the scenes coding of a website that makes it appear the way you see it in your browser. Technology is becoming a bigger part of our lives with each coming day and the ways that we market our products and do business must keep up with this trend. It is now vital for a wide variety of individuals and companies to have a strong web presence in order to draw in customers and beat out competitors.</p>
			<p>Statistics show that more and more internet users are accessing websites through mobile devices such as phones and tablets. In order to maximize the user experience for visitors to your website, mobile devices can no longer be ignored. <b>Open Mind Webs will build a flawless fully responsive website that is optimized for any device using the latest technologies.</b> There are a variety of different methods to create a website and I’ll work with you to help you choose the option that makes the most sense from a cost and efficiency standpoint for your web goals.</p>
			<button onclick="window.location.href='contact.php'" style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  