<form method="post" enctype="multipart/form-data" action="<?=BASE_URL ?>admin/add_new_game">
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
				<input class="form-control" name="image" type="file" id="image">
			</div>
		</div>
		<div class="form-group row">
			<label for="description" class="col-xs-2 col-form-label">Description</label>
			<div class="col-xs-10">
				<textarea class="form-control" name="description" id="description"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="description" class="col-xs-2 col-form-label">Category</label>
			<div class="col-xs-10">
				<select name="category" class="selectpicker" title="Choose one of the following..." data-live-search="true">
					<?php foreach ($categories as $category):?>
						<option value=<?=$category['id'] ?>><?=$category['name']?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div style="margin-left: 26%;" class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</div>
</form>


