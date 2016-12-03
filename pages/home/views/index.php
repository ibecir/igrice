
<section id="main-slider-section" style="padding-bottom: 50px;">
	<!--start banner section-->
	<div id="banner-slider">
		<?php foreach ($top_games as $game):?>
			<div class="banner-item">
				<img src="<?=BASE_URL?>core/images/test_img.jpg" height="500"
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
									<a href="<?=BASE_URL.'games/play/'.$game['id']?>" class="banner-big-title"><?=$game['name']?></a>
								</h2>
							</div>
						</div>
	
					</div>
				</div>
			</div>
		<?php endforeach;?>
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
			<h2>
				<a href="<?=BASE_URL.'games/categories/'.$category['id']?>"><?=$category['name']?></a>
			</h2>
		</div>
		<div class="row margin-bottom-70">
			<div class="slick-image-slider-4 slider0  slick-slider">
				<?php
		
		foreach ( $games as $i => $game ) :
			if ($game ['category_id'] != $category ['id'])
				continue;
			unset ( $games [$i] );
			?>
					<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="image-container">
						<img src="data:image/jpg;base64,<?=$game['icon'] ?>"
							class="img-responsive" alt="" /> <a
							href="<?php echo BASE_URL . 'games/play/' . $game['id']?>"
							class="inner-image-overlay"></a>

						<div class="overlay-likes-comments2 clearfix">
							<h2>
								<a href="<?=BASE_URL.'games/play/'.$game['id']?>"
									class="banner-small-title width-100"><?=$game['name']?></a>
							</h2>
							<h3>
								<i class="fa fa-eye" aria-hidden="true"></i> <?=$game['popularity']?>
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
