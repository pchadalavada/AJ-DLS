<?php 
  $page_title = "Templates";
  $style_sheet_uri = "css/app.css";
  include 'includes/head.php';
  include 'includes/masthead.php';
?>
<div class="template-page">
	<div class="row">
		<div class="large-12 columns">
			<div class="hero">
		    <h1>Templates</h1>
		    <p>Here are some pretty awesome templates to help you get started with your projects.</p>
			</div>			
		</div>	
	</div>

	<div class="row">
		<div class="large-12 columns template-thumbs">
			<a href="template-article-detail.php">
				<div class="medium-4 columns">
					<img src="images/placeholder-article.png" alt="Image Title">
					<p>Article Template</p>
				</div>				
			</a>
			<a href="template-contact-us.php">
				<div class="medium-4 columns">
					<img src="images/placeholder-contact.png" alt="Image Title">
					<p>Contact Us Template</p>
				</div>				
			</a>
			<a href="template-carousel.php">
				<div class="medium-4 columns">
					<img src="images/placeholder-carousel.png" alt="Image Title">
					<p>Slick Full-bleed Carousel</p>
				</div>	
			</a>
			<a href="template-contained-carousel.php">
				<div class="medium-4 columns">
					<img src="images/placeholder-carousel-contained.png" alt="Image Title">
					<p>Slick Contained Carousel</p>
				</div>				
			</a>
			<a href="template-video-player.php">
				<div class="medium-4 columns">
					<img src="images/placeholder-video.png" alt="Image Title">
					<p>Video Player Template</p>
				</div>				
			</a>
			<a href="template-scroll-header.php">
				<div class="medium-4 columns">
					<img src="images/placeholder-scroll.png" alt="Image Title">
					<p>Sticky Header (WIP)</p>
				</div>
			</a>
		</div>
	</div>	
</div>

<?php
  include 'includes/footer.php';
?>
