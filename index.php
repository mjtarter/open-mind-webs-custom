<?php
   $bodyId = "index";
?>

<?php include 'inc/header.php'; ?>

<!-- MyCampus Island Contact Form Modal -->
<div class="modal fade" id="mciModal">
   <div class="modal-dialog">
      <div class="modal-content text-center">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p class="m-0"><i><b>Contact</b></i></p>
         </div>
         <div class="modal-body">
            <form name="contactForm" method="post" class="form-horizontal mci-contact-form" action="message-confirmation.php">
               <div class="form-group">
                  <label for="first-name">First Name *</label>
                  <input type="text" id="first-name" name="first_name">
               </div>
               <div class="form-group">
                  <label for="last-name">Last Name *</label>
                  <input type="text" id="last-name" name="last_name">
                 </div>
               <div class="form-group">
                  <label for="email">Email *</label></td>
                  <input type="text" id="email" name="email">
               </div>
               <div class="form-group">
                  <label for="phone">Phone</label></td>
                  <input type="text" id="phone" name="phone">
               </div>
               <div class="form-group">
                  <label for="radio-1" class="radio-inline">
                     <input type="radio" name="type" id="radio-1" value="Join Team"> Join Team
                  </label>
                  <label for="radio-2" class="radio-inline">
                    <input type="radio" name="type" id="radio-2" value="Finance"> Finance
                  </label>
               </div>
               <div class="form-group">
                  <label for="comments" class="text-center">Message *</label>
                  <textarea class="form-control" id="comments" name="comments" rows="4">Hello! I checked out MyCampusIsland.com and am interested in opportunities for us to work together on it. Please respond at you earliest convenience to discuss. Thanks!</textarea>
               </div>
               <div class="form-group">
                  <input type="submit" class="button aqua-button" value="Submit">
               </div>
            </form>    
         </div>
      </div>          
   </div>
</div>
<!-- End Modal -->

<div id="index-carousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#index-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#index-carousel" data-slide-to="1"></li>
      <li data-target="#index-carousel" data-slide-to="2"></li>
   </ol>

   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <div class="item active" id="item-1">
         <div class="container" id="carousel-container">
            <div class="hidden-xs col-sm-3 align-middle no-float">
               <p class="text-center"><i>"I help businesses and individuals exceed their goals by harnessing the power of the web."</i></p>
            </div>
            <div class="col-sm-6 align-middle no-float">
               <h1 class="text-center">Matt Tarter</h1>
               <hr>
               <p class="text-center"><i>Front End Developer</i></p>
               <img src="img/matt.png" class="img-circle center-block" height=200>
            </div>
            <ul class="col-sm-3 align-middle no-float">
               <li><p><i class="fa fa-github-square"></i> <a href="https://github.com/mjtarter" target="_blank">Github</a></p></li>
               <li><p><i class="fa fa-linkedin-square"></i> <a href="https://www.linkedin.com/in/mjtarter" target="_blank">Linked In</a></p></li>
               <li><p><span class="glyphicon glyphicon-user"></span> About Me</p></li>
               <li><p><span class="glyphicon glyphicon-briefcase"></span> Portfolio</p></li>
            </ul>
         </div>
      </div>
      <div class="item" id="item-2">
         <div class="container">
            <ul id="portfolio-list">
               <li class="col-xs-6 col-sm-4"><a href="#"><img src="img/mycampus-island.jpg"></a></li>
               <li class="col-xs-6 col-sm-4"><a href="#"><img src="img/dropping-dimes.jpg"></a></li>
               <li class="col-xs-6 col-sm-4"><a href="#"><img src="img/randb.jpg"></a></li>
               <li class="col-xs-6 col-sm-4"><a href="#"><img src="img/abrams-eyecare.jpg"></a></li>
               <li class="hidden-xs col-sm-4"><a href="#"><img src="img/ted-green-films.jpg"></a></li>
               <li class="hidden-xs col-sm-4"><a href="#"><img src="img/the-only.png"></a></li>
            </ul>
         </div>
         <div class="carousel-caption">
            <h2 class="text-center">
               <a href="#"><span style="color:white;" class="glyphicon glyphicon-share-alt"></span> View Portfolio</a>
            </h2>
         </div>
      </div>
      <div class="item" id="item-3">
         <div class="container" id="carousel-container">
            <div class="vert-middle text-center">
               <img src="img/mci-logo.png" class="img-responsive center-block">
               <hr>
               <p>
                  MyCampus Island is a startup that I have been developing in my spare time and has been a hobby and passion of mine for quite awhile. <span class="hidden-xs">MCI is a revolutionary web-based application for Indiana University students that provides updated student housing listings as well as the “Student Housing Encyclopedia”, which displays in-depth individual pages for EVERY student housing property.</span> <br><br> I am open to bringing in new members to the MCI team (just me as of right now) as well as speaking with potential investors.
               </p>
               <button class="button aqua-button"><a href="http://mycampusisland.com" target="_blank"><span style="color:white;" class="glyphicon glyphicon-share-alt"></span> Check It Out!</a></button>
               <a href="#mciModal" data-toggle="modal"><button class="button aqua-button"><span style="color:White;" class="glyphicon glyphicon-share-alt"></span> Contact Me</button></a>
            </div>
         </div>
      </div>
   </div>

   <!-- Controls -->
   <a class="left carousel-control" href="#index-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#index-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
</div>

<section id="intro" class="text-center">
   <div class="container">
      <p style="font-size:2.3em;"><b>WELCOME TO OPEN MIND WEBS</b></p>
      <hr>
      <h2>I create awesome stuff on the web and help businesses grow.</h2><br>
      <p style="font-size:1.4em"><samp>Click the button below to learn more about the man behind the code.</samp></p><br>
      <a class="button button-large orange-button"><span class="glyphicon glyphicon-user"></span> Matt Tarter</a>
   </div>
</section>

<!-- Services Slider -->
<div class="text-center hidden-xs" id="services-container">
   <div class="container" style="display:table; height:300px;">
      <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 vert-middle no-float" id="services">
         <h2 class="services-title m-0">Services</h2>
         <p class="p-vert-5">I provide a combination of top-notch web development services and cost effective prices that allow businesses both large and small to gain the competitive advantage necessary to succeed.</p>
         <p><i>Click the icon below to learn more about my services</i></p>
         <span class="glyphicon glyphicon-hand-down"></span>
      </div>
   </div>
</div>
<div id="services-bar-container">
   <div class="container">
      <div class="row">
         <ul id="services-buttons">
            <p class="visible-xs text-center" style="color:white; font-size:2em; text-decoration:underline">Services</p>
            <p class="visible-xs text-center" style="color:white;"><i>Click an icon for more info</i></p>
            <li>
               <img src="img/all-services.png" id="all-services" class="center-block">
               <p class="text-center m-0">All Services</p>
            </li>
            <li onMouseOver="changeTextWebDesign(); changeBgTan();" onMouseOut="changeTextAllServices(); changeBgOrange(); changeWebDesignTrans();">
               <img src="img/web-design-trans.png" id="web-design" class="center-block">
               <p class="text-center m-0">Web Design</p>
            </li>
            <li onMouseOver="changeTextWebDev(); changeBgSilver();" onMouseOut="changeTextAllServices(); changeBgOrange(); changeWebDevTrans();">
               <img src="img/web-development-trans.png" id="web-dev" class="center-block">
               <p class="text-center m-0">Web Development</p>
            </li>
            <li onMouseOver="changeTextDbManagement(); changeBgOrange();" onMouseOut="changeTextAllServices(); changeDbManagementTrans();">
               <img src="img/database-management-trans.png" id="db-management" class="center-block">
               <p class="text-center m-0">Database Management</p>
            </li>
            <li onMouseOver="changeTextSeo(); changeBgTan();" onMouseOut="changeTextAllServices(); changeBgOrange(); changeSeoTrans();">
               <img src="img/seo-trans.png" id="seo" class="center-block">
               <p class="text-center m-0">Copywriting / SEO</p>
            </li>
            <li onMouseOver="changeTextEcommerce(); changeBgSilver();" onMouseOut="changeTextAllServices(); changeBgOrange(); changeEcommerceTrans();">
               <img src="img/e-commerce-trans.png" id="ecommerce" class="center-block">
               <p class="text-center m-0">E-commerce Implementation</p>
            </li>
            <li onMouseOver="changeTextAnalytics();" onMouseOut="changeTextAllServices(); changeAnalyticsTrans();">
               <img src="img/analytics-trans.png" id="analytics"class="center-block">
               <p class="text-center m-0">Analytics Reporting</p>
            </li>
         </ul>
      </div>
   </div>
</div>
<!-- End Services Slider -->

<div class="container">
   <p class="text-center" id="process-title"><b> How The Process Works </b></p>
   <ul class="hidden-xs" id="process">
      <li><p class="text-center vert-middle"> Submit Contact Form</p></li>
      <li><p class="text-center vert-middle">Initial Meeting</p></li>
      <li><p class="text-center vert-middle">Estimate</p></li>
      <li><p class="text-center vert-middle">Interface Design</p></li>
      <li><p class="text-center vert-middle">Coding</p></li>
      <li><p class="text-center vert-middle">Feedback</p></li>
      <li><p class="text-center vert-middle">Testing</p></li>
      <li><p class="text-center vert-middle">Launch</p></li>
      <li><p class="text-center vert-middle">Continued Contact</p></li>
   </ul>
   <div class="col-sm-6">
      <p class="text-center" style="font-size:1.5em;"><b>Planning / Strategy</b></p>
      <p class="text-center">Whether you are interested in a website, database management system, or other web service, there is no reason to feel overwhelmed at the initial stages. I'll help you to find a starting point and take you through the process of coming up with the look, feel, and content structure that will work best for your particular business. All you need is an idea and I can help you throughout the process of planning to completion.</p>
   </div>
   <div class="col-sm-6">
      <p class="text-center" style="font-size:1.5em;"><b>Maintenance</b></p>
      <p class="text-center">Once your desired web service is completed and launched I don't just set you loose on your own. I offer maintenance and content update plans, because your business, your customers, your competitors, and the web in general and are constantly adapting and improving so why shouldn’t your website? However, If you’d like to take over full of your site, I can teach you how to make minor updates and changes on your own as well.</p>
   </div>
</div>

<?php include 'inc/footer.php'; ?>

        
