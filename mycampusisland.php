<?php 

$title = "MyCampus Island | Responsive Website | Portfolio";

include 'inc/header.php'; ?>

<section class="main-content p-vert-50 folio-pages">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 no-float vert-middle">
				<p class="h1">MyCampus Island</p>
				<p><a href="http://www.mycampusisland.com" target="_blank">www.MyCampusIsland.com</a></p>
				<div class="clearfix">
					<ul id="services-provided">
						<li><span class="glyphicon glyphicon-ok-sign"></span> Web Development</li>
						<li><span class="glyphicon glyphicon-ok-sign"></span> Web Design</li>
						<li><span class="glyphicon glyphicon-ok-sign"></span> Responsive Design</li>
						<li><span class="glyphicon glyphicon-ok-sign"></span> Content Development / SEO</li>
						<li><span class="glyphicon glyphicon-ok-sign"></span> Database Management</li>
					</ul>
				</div>
				<hr>
				<p>MyCampus Island is a startup of mine that is a web based student housing app for college students in the Bloomington, Indiana area. This is a large site that takes advantage of an extensive back-end database to provide in-depth individual pages for all 12 dorms, as well as a large variety of properties for lease to students in Bloomington. This is a fully responsive website equipped with search criteria that allows users to find specific housing properties that best suit their needs. I am the sole contributor to this startup so I have done everything from the web design to the back end database to the properties listed. <a href="http://www.mycampusisland.com" target="_blank">Check it out!</a></p>
				<img src="img/mci-responsive.png" class="hidden-xs hidden-sm img-responsive center-block p-top-15">
			</div>
			<div class="col-sm-6 no-float" id="folio-img-container">
				<img src="img/mci-page.png" id="folio-main-img" class="img-responsive center-block">
			</div>
		</div>
		<hr class="hidden-xs hidden-sm">
		<div class="row hidden-xs hidden-sm">
			<div class="col-sm-6 no-float vert-middle">
				<img src="img/mci-map.png" class="img-responsive center-block p-top-15">
			</div>
			<div class="col-sm-6 no-float vert-middle">
				<div class="text-center" id="info-box">
					<p class="h3">Flexible Options</p>
					<p><i>Users can enter search criteria and browse the results in either a map view or list view format. Search for properties that are currently available or choose the housing encyclopedia option and search through all properties in the database whether currently available or not.</i></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  