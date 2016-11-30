
<section id="main-slider-section" style="padding-bottom: 50px;">
	<!--start banner section-->
	<div id="banner-slider">
		<div class="banner-item"
			style="background-image: url(core/images/slider1.jpg);">
			<img src="<?php echo BASE_URL?>core/images/slider1.jpg" height="500"
				class="img-responsive" alt="" />
			<div class="slider-over-opacity"></div>
			<div class="container">
				<div class="banner-stye2-content banner-style3-content">
					<div class="clearfix">
						<div class="banner-content-details pull-left">
							<div class="banner-category">
								<a href="categorymain.html" class="cat">movies</a><a
									href="categorymain.html" class="cat">Entertainment</a>
							</div>
							<h2>
								<a href="detailpage.html" class="banner-big-title">Always
									somthing Good</a>
							</h2>
							<a href="" class="posted-by"><span>Randy Rayan</span> Randy Rayan</a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="banner-item"
			style="background-image: url(<?php echo BASE_URL?>core/images/slider2.jpg);">
			<img src="<?php echo BASE_URL?>core/images/slider2.jpg" height="500"
				class="img-responsive" alt="" />
			<div class="slider-over-opacity"></div>
			<div class="container">
				<div class="banner-stye2-content banner-style3-content">
					<div class="clearfix">
						<div class="banner-content-details pull-left">
							<div class="banner-category">
								<a href="categorymain.html" class="cat">music</a><a
									href="categorymain.html" class="cat">Entertainment</a>
							</div>
							<h2>
								<a href="detailpage.html" class="banner-big-title">rio de
									janeiro with love</a>
							</h2>
							<a href="" class="posted-by"><span>Randy Rayan</span> Randy Rayan
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="container position-relative">
	
	<!-- Banner -->
	<div class="post-advertis" style="padding-bottom: 50px;">
		<img src="<?=BASE_URL?>core/images/banners/1170x90.jpg">
	</div>
	
	<?php foreach ($categories as $category): ?>
	<hr>
	<div class="slider-container">
		<div class="small-title">
			<h2><a href="<?=BASE_URL?>games/categories/<?=$category['id']?>"><?=$category['name']?></a></h2>
		</div>
		<div class="row margin-bottom-70">
			<div class="slick-image-slider-4 slider0  slick-slider">
				<?php foreach ( $games as $i => $game ) :
						if ($game ['category_id'] != $category ['id'])
							continue;
						unset ( $games [$i] ); ?>
					<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="post-details">
						<div class="overlay-inner-image">
							<img src="data:image/jpg;base64,<?=$game['icon'] ?>"
								style="width: 280px; height: 260px;" alt="Games" /> <a
								href="detailpage.html" class="inner-image-overlay"></a>
							<div class="watch-icon" data-toggle="tooltip"
								title="Watch on YouTube">
								<a target="blank"
									href="https://www.youtube.com/watch?v=5Bf6dnEnsXw"><i
									class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</div>
						</div>
						<div class="image-content background-color-light-green">
							<h3>
								<a href="<?php echo BASE_URL . 'games/play/' . $game['id']?>"><?=$game['name']?></a>
							</h3>
						</div>
					</div>
				</div>
				<?php endforeach;?> 
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
