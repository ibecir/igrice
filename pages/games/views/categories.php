<div class="massonary padding-top-70">

	<div class="container padding-bottom-50">

		<div class="row">
		<?php foreach ($games as $game):?>
			<div class="col-md-3">

				<div class="image-container">
					<img src="data:image/jpg;base64,<?=$game['icon'] ?>"
						class="img-responsive" alt="" /> <a class="image-overlay"
						href="detailpage.html"></a>
					<div class="watch-icon" data-toggle="tooltip" title="Watch Later">
						<a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>

					</div>

					<div class="overlay-likes-comments2 clearfix">
						<h2>
							<a href="<?=BASE_URL.'games/play/'.$game['id']?>"
								class="banner-small-title width-100"><?=$game['name']?></a>
						</h2>

						<h3>
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15.1K <i
								class="fa fa-eye" aria-hidden="true"></i> 580 <span
								class="pull-right">02:19</span>
						</h3>
					</div>

				</div>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</div>