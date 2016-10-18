<div class="container">
	<form action="" method="post" name="add_game">
		<div class="form-group row">
			<label for="name" class="col-xs-2 col-form-label">Name: </label>
			<div class="col-xs-10">
				<input class="form-control" type="text" id="name" name="name">
			</div>
		</div>
		<div class="form-group row">
			<label for="source" class="col-xs-2 col-form-label">Source: </label>
			<div class="col-xs-10">
				<textarea class="form-control" name="source" id="source"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="image" class="col-xs-2 col-form-label">Image </label>
			<div class="col-xs-10">
				<input class="form-control" type="file" id="image">
			</div>
		</div>
		<div class="form-group row">
			<label for="description" class="col-xs-2 col-form-label">Description</label>
			<div class="col-xs-10">
				<textarea class="form-control" id="description"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-2 col-form-label">Category</label>
			<div class="col-xs-10">
				<div class="dropdown clearfix">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Category <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
			</div>
		</div>
	</form>
</div>