<?php 

$title = "Website Development | Matt Tarter | Open Mind Webs";

include 'inc/header.php'; ?>

<section class="main-content">
	<div class="container p-vert-50">
		<div class="col-sm-push-8 col-sm-4">
			<div class="visible-xs text-center">
				<p class="title h4">Services:
				<select id="services" style="width:90%;">
					<option class="active">Web Development</option>
					<option>Web Design</option>
					<option>Database Management</option>
					<option>Copywriting / SEO</option>
					<option>E-commerce</option>
					<option>Analytics</option>
				</select></p>
			</div>
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
				<li class="active">Web Development</li>
				<li id="link-1" onMouseOver='bgChange("link-1")' onMouseOut='bgChangeBack("link-1");'>Web Design</li>
				<li id="link-2" onMouseOver='bgChange("link-2")' onMouseOut='bgChangeBack("link-2");'>Database Management</li>
				<li id="link-3" onMouseOver='bgChange("link-3")' onMouseOut='bgChangeBack("link-3");'>Copywriting / SEO</li>
				<li id="link-4" onMouseOver='bgChange("link-4")' onMouseOut='bgChangeBack("link-4");'>E-commerce</li>
				<li id="link-5" onMouseOver='bgChange("link-5")' onMouseOut='bgChangeBack("link-5");'>Analytics</li>
			</ul>
		</div>
		<div class="col-sm-pull-4 col-sm-8">
			<h1 class="m-0 text-center"><img src="img/web-development.png"> Web Development</h1>
			<p style="padding-top:20px;">Web development involves the behind the scenes coding of a website that makes it appear the way you see it in your browser. Technology is becoming a bigger part of our lives with each coming day and the ways that we market our products and do business must keep up with this trend. It is now vital for a wide variety of individuals and companies to have a strong web presence in order to draw in customers and beat out competitors.</p>
			<p>Statistics show that more and more internet users are accessing websites through mobile devices such as phones and tablets. In order to maximize the user experience for visitors to your website, mobile devices can no longer be ignored. <b>Open Mind Webs will build a flawless fully responsive website that is optimized for any device using the latest technologies.</b> There are a variety of different methods to create a website and I’ll work with you to help you choose the option that makes the most sense from a cost and efficiency standpoint for your web goals.</p>
			<button style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  