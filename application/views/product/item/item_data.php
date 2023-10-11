<section class="content-header">
	<h1>Items
		<small>Data Barang</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Items</li>
	</ol>
</section>

<section class="content">
    <?php $this->view('messages')?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Product Items</h3>
			<div class="pull-right">
				<a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-plus"></i> Tambah
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="table1">
				<thead>
					<tr>
						<th>#</th>
						<th>Barcode</th>
						<th>Name Product</th>
						<th>Kategory</th>
						<th>Satuan</th>
						<th>Harga/pcs</th>
						<th>Stock</th>
						<th style="text-align: center;">Actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- <?php $no =1;
					foreach($row->result() as $key => $data) { ?>
						<tr style="font-size: 15px;">
							<td style="width:5%;"><?=$no++?>.</td>
							<td>
								<?=$data->barcode?><br>
								<a href="<?=site_url('item/barcode_qrcode/'.$data->item_id)?>" class="btn btn-default btn-xs">
									Generat  <i class="fa fa-qrcode"></i>
								</a>
							</td>
							<td><?=$data->name?></td>
							<td><?=$data->category_name?></td>
							<td><?=$data->unit_name?></td>
							<td><?=$data->price?></td>
							<td><?=$data->stock?></td>
							<td class="text-center" width="200px">
								<a href="<?=site_url('item/edit/'.$data->item_id)?>" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i> Update
								</a>
								<a href="<?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
									<i class="fa fa-trash"></i> Delete
								</a>
							</td>
						</tr>
					<?php } ?> -->
				</tbody>
			</table>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$('#table1').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": "<?=site_url('item/get_ajax')?>"
		})
	})
</script>