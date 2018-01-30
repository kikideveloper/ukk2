
<!-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">User Input</li>
  </ol>
</nav>-->
<div class="col-md-12 push-0">
	<div class="row push-1">
		<div class="panel panel-default push-1">
			<div class="panel-header">
				<h3 class="push-1">User Input</h3>
				<a href="index.php?page=user/insert" class="btn btn-primary left"><i class="fa fa-fw fa-plus"></i> New</a>
			</div>
			<div class="panel-body push-1">
				<table class="table table-hover col-md-12">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Full Name</th>
						<th scope="col">Level</th>
						<th scope="col" colspan="2">Option</th>
					</tr>
					<?php
						$res = $base->result("SELECT * FROM user");
						$no=1;
						while ($data = $res->fetch()) {
					?>
					<tr>
						<th scope="row"><?=$no?></th>
						<td><?=$data["name"]?></td>
						<td><?=$data['email']?></td>
						<td><?=$data['fullname']?></td>
						<td><?=$data['level']?></td>
						<td><a href="" class="btn btn-primary">update</a></td>
						<td><a href="#" class="btn btn-danger">delete</a></td>
					</tr>
					<?php
							$no++;
						// print_r($data);
						}
					?>
				</table>
			</div>
		</div>
	</div>
</div>