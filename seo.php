<?php 

$title = "SEO | Matt Tarter | Open Mind Webs";

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
					<option class="active">Copywriting / SEO</option>
					<option>E-commerce</option>
					<option>Analytics</option>
				</select></p>
			</div>
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
				<a href="web-development.php"><li id="link-1" onMouseOver='bgChange("link-1")' onMouseOut='bgChangeBack("link-1");'>Web Development</li></a>
				<a href="web-design.php"><li id="link-2" onMouseOver='bgChange("link-2")' onMouseOut='bgChangeBack("link-2");'>Web Design</li></a>
				<a href="database-management.php"><li id="link-3" onMouseOver='bgChange("link-3")' onMouseOut='bgChangeBack("link-3");'>Database Management</li></a>
				<a href="#"><li class="active">Copywriting / SEO</li></a>
				<a href="e-commerce.php"><li id="link-4" onMouseOver='bgChange("link-4")' onMouseOut='bgChangeBack("link-4");'>E-commerce</li></a>
				<a href="analytics.php"><li id="link-5" onMouseOver='bgChange("link-5")' onMouseOut='bgChangeBack("link-5");'>Analytics</li></a>
			</ul>
		</div>
		<div class="col-sm-pull-4 col-sm-8">
			<h1 class="m-0 text-center"><img src="img/seo.png">Copywriting / SEO</h1>
			<p style="padding-top:20px;">When a user visits a search engine such as Google, Bing, or Yahoo and types in a search query, the search engine uses a very complex and secretive algorithm that ranks relevant web pages and then outputs them in a particular order. The purpose of this algorithm is to display the most relevant and helpful websites for what the user is searching for. Due to the enormous number of individuals that use these search engines, having your site appear towards the top of these lists is essential to getting visitors to your website.</p>
			<p>The purpose of Search Engine Optimization, or SEO, is to increase the number of visitors to a particular website by improving the website’s ranking within these search engines. <b>However, good SEO doesn’t just improve your search rankings. It decreases page load time and makes your pages easier to follow for site visitors.</b> SEO can be greatly improved through 3 general areas: the content on your website, under the hood with the code of your site, and with backlinks, social media, and other off page factors. I have the coding experience to improve your SEO from a technical standpoint, and the copywriting experience from writing product descriptions and uploading products on large E-commerce sites like Target.com, Walmart.com, and Staples.com. Click the "Get Started" button below and I’ll help you discover how to obtain the highest ranking possible for your website.</p>
			<button style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  