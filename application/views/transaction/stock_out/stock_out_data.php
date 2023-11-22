<section class="content-header">
    <h1>Stock out
        <small>Barang Keluar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Transaction</li>
        <li class="active">Stock in</li>
    </ol>
</section>

<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Daftar Stock out</h3>
            <div class="pull-right">
                <a href="<?= site_url('category/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Add Stock out
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Nama Product</th>
                        <th>Qty</th>
                        <th>Info</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >1.</td>
                        <td>A001</td>
                        <td>Nabati</td>
                        <td>1</td>
                        <td>Kadaluarsa</td>
                        <td>01/11/2023</td>
                        <td>
                            <a href="" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>A002</td>
                        <td>Teh Rio</td>
                        <td>2</td>
                        <td>Rusak</td>
                        <td>01/11/2023</td>
                        <td>
                            
                            <a href="" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>