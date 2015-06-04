<?php include 'inc/header.php'; ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <div style="width:100%; display:table; height:450px; background-repeat:no-repeat; background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('img/office-photo.jpg'); background-size:100% 100%;">
            <div style="display:table-cell; vertical-align:middle">
                <h1 class="text-center" style="color:white; font-size:3.4em">Matt Tarter</h1>
                <hr style="width:25%;">
                <p class="text-center" style="color:white; font-size:1.4em;"> <i>Front End Developer</i></p>
                <img src="img/matt.png" height=150 style="display:block; margin: 0 auto;">
            </div>
        </div>
    </div>
    <div class="item">
        <div style="width:100%; display:table; height:450px; background-repeat:no-repeat; background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('img/a.jpg'); background-size:100% 100%;">
            <h2 style="margin-top:0px; color:white;" class="text-center"><i>"I Help businesses and individuals exceed their goals by harnessing the power of the web."</i></p>
            <ul>
                <li></li>
            </ul>
        </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include 'inc/footer.php'; ?>

        
