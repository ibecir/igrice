<div style="background-color: window; padding: 50px 0 30px 0;" id="play">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-sm-12">
				<div class="col-xs-12 col-md-12 col-sm-12" style="padding: 20px; text-align: center;">
					<div class="panel panel-info">
						<div class="panel-heading"><h5 class="h4"><?=$game[0]['name']?></h5></div>
					</div>
					
				</div>
				<!-- Embed game here -->
				<div class="col-xs-12 col-md-12 col-sm-12" style="text-align: center;">
					<?=$game [0] ['game_source']?>
				</div>
				<!-- 
				<iframe src="http://games.gamepix.com/play/40225?sid=30057"
					width="400" height="600"
					style="height: 600px; width: 400px; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
				 -->
			</div>
		</div>
		<div class="row" style="padding: 20px; margin-top: 20px;">
			<div class="col-xs-12 col-md-12 col-sm-12">
				<div class="panel panel-info">
					<div class="panel-heading">Opis</div>
					<div class="panel-body">
						<?=$game [0] ['description']?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Ad banners 
<div class="col-xs-4 col-md-4 col-sm-4">
				<img style="padding-bottom: 20px;" alt="Advert" src="<?=BASE_URL?>core/images/banners/300x200.jpg"> 
				<img style="padding-bottom: 20px;" alt="Advert" src="<?=BASE_URL?>core/images/banners/300x250.jpg"> 
				<img alt="Advert" src="<?=BASE_URL?>core/images/banners/300x200.jpg">
			</div>
-->

<!-- 
 <div class="col-md-12 col-sm-12 col-xs-12"
				style="float: none; margin: auto;">-->

<!-- Insert iframe here -->

<?php //$game [0] ['game_source']?>



<!-- 
<div class="col-xs-9 col-md-9 col-sm-9"
	style="position: relative; padding-bottom: 56.25%; padding-top: 35px; height: 0; overflow: hidden;">
	<iframe
		style="height: 550px; width: 363px; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
		src="http://games.gamepix.com/play/40214" width="363" height="550"
		allowfullscreen="" frameborder="0" scrolling="no"></iframe>

</div>

<div class="col-xs-3 col-md-3 col-sm-3"
	style="position: relative; padding-bottom: 56.25%; padding-top: 35px; height: 0; overflow: hidden;">
	<img alt="Slika" src=">core/images/banners/160x600.jpg">
</div>
 -->