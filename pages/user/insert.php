<div class="box">
	<div class="box-header">
		<h3>Input User</h3>
	</div>
	<div class="col-md-10">
		<form method="post" action="index.php?page=machine&action=plus">
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
						// $q=;
						// foreach ($q as $key => $value) {
						// }
						try {
							while ($row=$data->fetch(PDO::FETCH_ASSOC)) {
								echo "<option value='$row[id]'>$row[name]</option>";
							}
						} catch (PDOException $e) {
							die($e->getMessage());
						}
					?>
				</select>
			</div>
			<div class="col-md-5">
				<input type="button" name="save" value="save">
			<!-- <button class="btn btn-primary">Save</button> -->
			</div>
		</form>
	</div>
</div>