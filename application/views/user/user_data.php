<section class="content-header">
	<h1>Users
		<small>Pengguna</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Users</li>
	</ol>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Users</h3>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Username</th>
						<th>Name</th>
						<th>Adderess</th>
						<th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $no =1;
					foreach ($row->result() as $key => $data) { ?>
						<tr>
							<td><?=$no++?>.</td>
							 
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>