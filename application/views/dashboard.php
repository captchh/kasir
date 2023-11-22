<!-- <section class="content-header">
	<h1>Dashboard
		<small>Contol Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<section class="content">
	Dashboard page

</section> -->


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-box-open"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Items</span>
          <span class="info-box-number"><?=$this->fungsi->count_item()?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fas fa-truck"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Supplier</span>
          <span class="info-box-number"><?=$this->fungsi->count_supplier()?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Customer</span>
          <span class="info-box-number"><?=$this->fungsi->count_customer()?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fas fa-user-plus"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">User</span>
          <span class="info-box-number"><?=$this->fungsi->count_user()?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
</section>

<!-- <section class="content-header">
	<h1>Categories
		<small>Data Kategori</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Categories</li>
	</ol>
</section>

<section class="content-header">
	<h1>Categories
		<small>Data Kategori</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Categories</li>
	</ol>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><//?=ucfirst($page)?> Category</h3>
			<div class="pull-right">
			</div>
		</div>
		<div class="box-body">
			<div class="row">
                <div class="col-md-4 col-md-offset-4">
					</?=form_open_multipart('image/process')?>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="hidden" name="id" value="</?=$row->id_image?>">
                            <input type="file" name="image"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <button type="submit" name="</?=$page?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Simpan</button>
                            <button type="Reset" class="btn btn-danger btn-flat">Reset</button>
                        </div>
                    </?=form_close()?>
                </div>
            </div>
		</div>
	</div>
</section> -->