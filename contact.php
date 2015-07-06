<?php 

$title = "Contact Matt Tarter | Denver Website Development";

include 'inc/header.php'; ?>

<section class="main-content p-vert-50">
	<div class="container">
		<div class="col-sm-9">
			<p class="h2 text-center" style="margin-bottom:15px;">Get Started</p>
			<p>Interested in my services? I would love to hear from you. Please fill out the following form to give me some information about your project and I will respond within two business days.</p>
			<form name="contact-page-form" method="post" action="send_form_email.php">
				<label for="example" style="display:block; text-align:Center;">Services Requested *</label>
				 	<div id="example" class="text-center">
					<div class="checkbox" style="margin-top:0px;">
					  	<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1"> Web Development
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" id="inlineCheckbox2" value="option2"> Web Design
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" id="inlineCheckbox3" value="option3"> Database Management
						</label>
					</div>
					<div class="checkbox">
					  	<label class="checkbox-inline">
						  	<input type="checkbox" id="inlineCheckbox1" value="option1"> Copywriting / SEO
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" id="inlineCheckbox2" value="option2"> E-commerce
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" id="inlineCheckbox3" value="option3"> Analytics
						</label>
					</div>
				</div>
				<div class="col-sm-6 form-group" style="padding-left:0px; clear:both;">
	    			<label for="first_name">First Name *</label>
	    			<input type="text" class="form-control" id="first_name" placeholder="First Name">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="last_name">Last Name *</label>
	    			<input type="text" class="form-control" id="last_name" placeholder="Last Name">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="email">Email *</label>
	    			<input type="email" class="form-control" id="email" placeholder="Email">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="phone">Phone</label>
	    			<input type="text" class="form-control" id="phone" placeholder="Phone">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
				 	<label for="sel1">Budget</label>
				  	<select class="form-control" id="sel1">
				    	<option>>$1,000</option>
				  		<option>$1,000 - $ 3,000</option>
				  		<option>$3,000 - $5,000</option>
				  		<option>$5,000 - $10,000</option>
				  		<option>+$10,000</option>
	  				</select>
				</div>
				<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="business_category">Business Category</label>
	    			<input type="text" class="form-control" id="business_category" placeholder="e.g. restaurant, photography">
	  			</div>
				<div class="col-sm-12 form-group" style="padding-left:0px;">
  					<label for="comment">Project Summary:</label>
  					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
				<button class="button orange-button center-block m-vert-20" style="display:block;">Submit</button>
			</form>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  