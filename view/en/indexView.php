<?php
$title = "Home";
$pos = "index";
?>

<?php ob_start(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h3 class="text-center">Welcome to the Ile de la Cité's website</h3>
				<p class="text-justify">
					There is our website dedicated to world heritage of Ile de la Cité, mandated by UNESCO.
					On this website, you can found all main information about this location.
					Like his story, his news or his best spots to take pictures during your travel.
					If you have any questions, please use contact support.
				</p>
			</div>
		</div>
		<div class="row">
			<div id="carousel" class="carousel slide" data-ride="carousel"> <!-- Debut carousel -->
				<!-- Indicateur -->
				<ol class="carousel-indicators">
					<li data-targer="#carousel" data-slide-to="0" class="active"></li>
					<li data-targer="#carousel" data-slide-to="1"></li>
					<li data-targer="#carousel" data-slide-to="2"></li>
				</ol>
				<!-- Images -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="public/images/carousel/carousel1.jpg" alt="Image1" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">The eastern tip of the island</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel/carousel2.jpg" alt="Image2" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Courthouse</h2>
						</div>
					</div>
					<div class="item">
						<img src="public/images/carousel/carousel3.jpg" alt="Image3" style="width: 100%;">
						<div class="carousel-caption">
							<h2 class="caption-C">Charlemagne's statue</h2>
						</div>
					</div>
				</div>

				<!-- Controle -->
				<a class="left carousel-control" href="#carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div> <!-- Fin carousel -->
		</div>
		<br> <br>
		<div class="row">
			<div class="col-md-4">
				<h2>Informations :</h2><hr>
				<a class="twitter-timeline" data-theme="dark" data-height="635" data-link-color="#f7af3e" href="https://twitter.com/iledelacite_mcn?ref_src=twsrc%5Etfw">
				<p>For follow all actuality of the Island, please enable your JavaScript or follow this link</p>
			</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-md-8">
				<h2>Map of the place :</h2><hr>
				<a href="public/images/plan.svg">
					<img class="img-responsive plan" src="public/images/plan.svg" alt="Plan">
					<div class="captionI">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div><br>
<?php 
$content = ob_get_clean(); 
require 'template_en.php';
?>