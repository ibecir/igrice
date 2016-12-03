<div class="container">
	<div class="massonary padding-top-40">
		<div>
			<p class="banner-big-title" style="margin-left: 30px;">
				<strong><?=$categry_name?></strong>
			</p>
			<hr>
		</div>
	</div>
	<div class="container padding-bottom-50">
		<div class="row">
		<?php foreach ($games as $game):?>
			<div class="col-md-3">

				<div class="image-container">
					<img src="data:image/jpg;base64,<?=$game['icon'] ?>"
						class="img-responsive" alt="" /> <a class="image-overlay"
						href="<?=BASE_URL.'games/play/'.$game['id']?>"></a>
					<div class="watch-icon" data-toggle="tooltip" title="Watch Later">
						<a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>

					</div>

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