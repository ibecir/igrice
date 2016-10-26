<div style="margin-top: 50px;" class="container">
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
		<label for="description" class="col-xs-2 col-form-label">Category</label>
		<div class="col-xs-10">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button"
					data-toggle="dropdown">
					Dropdown Example <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="#">HTML</a></li>
					<li><a href="#">CSS</a></li>
					<li><a href="#">JavaScript</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>