<section class="content-header">
	<h1>Units
		<small>Satuan Barang</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Units</li>
	</ol>
</section>

<section class="content">
    <?php $this->view('messages')?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Daftar Units</h3>
			<div class="pull-right">
				<a href="<?=site_url('unit/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-plus"></i> Tambah
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="table1">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $no =1;
					foreach($row->result() as $key => $data) { ?>
						<tr style="font-size: 18px;">>
							<td style="width:5%;"><?=$no++?>.</td>
							<td><?=$data->name?></td>
							<td class="text-center" width="200px">
								<a href="<?=site_url('unit/edit/'.$data->unit_id)?>" class="btn btn-primary btn-xl">
									<i class="fa fa-pencil"></i> Update
								</a>
								<a href="<?=site_url('unit/del/'.$data->unit_id)?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xl">
									<i class="fa fa-trash"></i> Delete
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>