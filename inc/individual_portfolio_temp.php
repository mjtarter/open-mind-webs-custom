<?php 

include 'inc/header.php'; ?>

<section class="main-content p-vert-50 folio-pages">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 no-float" style="display:table-cell;">
				<p class="h1"><?php echo $name ?></p>
		<!-- If url exists include link, if not do nothing !-->
				<?php if ($url !== null) {
					echo '<p><a href="' . $link . '" target="_blank">' . $url . '</a></p>';
				}?>
				<div class="clearfix">
					<ul id="services-provided">
						<?php
						    foreach($services as $value) {
						  		print '<li><span class="glyphicon glyphicon-ok-sign"></span> ' . $value . '</li>';
							} ?>	
					</ul>
				</div>
				<hr>
				<p><?php echo $description ?></p>
				<img src=<?php echo '"' . $img_src . '"' ?> class="hidden-xs hidden-sm col-md-12 img-responsive center-block p-top-15">
			</div>
			<div class="col-sm-6 no-float" id="folio-img-container">
				<img src=<?php echo '"' . $img2_src . '"' ?> id="folio-main-img" class="img-responsive center-block">
			</div>
		</div>
		<!-- If additional content exists include it below, If not then end the content !-->
		<?php if ($img3_src !== null) { 
			echo '<hr class="hidden-xs hidden-sm">
			<div class="row hidden-xs hidden-sm">
				<div class="col-sm-6 no-float vert-middle">
					<img src="' . $img3_src . '" class="col-xs-12 img-responsive center-block p-top-15">
				</div>
				<div class="col-sm-6 no-float vert-middle">
					<div class="text-center" id="info-box">' .
						$description_2 . '
					</div>
				</div>
			</div>'; } 
		?>
	</div>
</section>

<?php include 'inc/footer.php'; ?>  