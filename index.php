<?php include 'inc/header.php'; ?>

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
               <div class="col-sm-3 vert-middle no-float">
                  <p class="text-center"><i>"I help businesses and individuals exceed their goals by harnessing the power of the web."</i></p>
               </div>
               <div class="col-sm-6 vert-middle no-float">
                  <h1 class="text-center">Matt Tarter</h1>
                  <hr>
                  <p class="text-center"><i>Front End Developer</i></p>
                  <img src="img/matt.png" class="img-circle center-block" height=200>
               </div>
               <div class="col-sm-3 vert-middle no-float">
                  <ul>
                     <li><p><i class="fa fa-github-square"></i> Github</p></li>
                     <li><p><i class="fa fa-linkedin-square"></i> Linked In</p></li>
                     <li><p><span class="glyphicon glyphicon-user"></span> About Me</p></li>
                     <li><p><span class="glyphicon glyphicon-briefcase"></span> Portfolio</p></li>
                  </ul>
            </div>
         </div>
      </div>
      <div class="item" id="item-2">
         <div class="container" style="max-width:1150px;">
            <ul id="portfolio-list">
               <li><a href="#"><img src="img/mycampus-island.jpg"></a></li>
               <li><a href="#"><img src="img/dropping-dimes.jpg"></a></li>
               <li><a href="#"><img src="img/randb.jpg"></a></li>
               <li style="clear:both;"><a href="#"><img src="img/abrams-eyecare.jpg"></a></li>
               <li><a href="#"><img src="img/ted-green-films.jpg"></a></li>
               <li><a href="#"><img src="img/the-only.png"></a></li>
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
               <img src="img/mci-logo.png">
               <hr>
               <p>
                  MyCampus Island is a startup that I have been developing in my spare time and has been a hobby and passion of mine for quite awhile. MCI is a revolutionary web-based application for Indiana University students that provides updated student housing listings as well as the “Student Housing Encyclopedia”, which displays in-depth individual pages for EVERY student housing property regardless of whether it is available. <br><br> I am open to bringing in new members to the MCI team (just me as of right now) as well as speaking with potential investors.
               </p>
               <button class="button aqua-button"><a href="#"><span style="color:white;" class="glyphicon glyphicon-share-alt"></span> Check It Out!</a></button>
               <button class="button aqua-button"><a href="#"><span style="color:White;" class="glyphicon glyphicon-share-alt"></span> Contact Me</a></button>
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

<?php include 'inc/footer.php'; ?>

        
