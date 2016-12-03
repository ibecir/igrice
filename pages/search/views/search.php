<div class="container">
	<?php if (count ( $games ) == 0):?>
		<div class="massonary padding-top-40">
		<div class="col-xs-12 alert alert-info" role="alert">
			<h2>
				<i class="fa fa-info-circle" aria-hidden="true"></i> Nema rezultata
				pretrage
			</h2>
		</div>
	</div>
	<div class="container" style="padding-bottom: 300px;"></div>
	<?php else :?>
	
	<div class="massonary padding-top-40">
		<div>
			<p class="banner-big-title" style="margin-left: 30px;">
				Rezultat pretrage za <strong><?=$keyword?></strong>
			</p>
			<hr>
		</div>

		<div class="container" style="padding-bottom: 50px;">
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
	<?php endif;?>
</div>