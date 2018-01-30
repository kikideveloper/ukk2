<?php 
	$id = isset($_GET['id'])?$_GET['id']:'';
	$data=$base->select("user where id='$id'");
	$data->fetch();
 ?>
<div class="box">
	<div class="box-header">
		Update
	</div>
	<div class="col-md-10">
		<form>
			<div class="col-lg-3">
				<label for="name">
					Nama
				</label>
				<input type="text" name="name" class="form-control" placeholder="Nama">
			</div>
			<div class="col-md-5">
				<label for="email">
					Email
				</label>
				<input type="mail" name="email" class="form-control" placeholder="Example@mail.com">
			</div>
			<div class="col-md-5">
				<label for="password">
					Password
				</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="col-md-5">
				<label for="fullname">
					Full Name
				</label>
				<input type="text" name="fullname" class="form-control" placeholder="Alexander Piere">
			</div>
			<div class="col-md-5">
				<label for="level">
					Level
				</label>
				<select class="form-control">
					<?php
						echo "<option value='0'>-</option>";
						$data = $base->select("level");
						$data->fetch();
						foreach ($data as $key => $value) {
						echo "<option value='$key'>$value</option>";
						}
					?>
				</select>
			</div>
			<button class="btn btn-primary">Save</button>
		</form>
	</div>
</div>