<section class="content-header">
    <h1>Stock in
        <small>Barang Masuk / Pembelian</small>
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
            <h3 class="box-title">Daftar Stock in</h3>
            <div class="pull-right">
                <a href="<?= site_url('category/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Tambah Stock in
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
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >1.</td>
                        <td>A001</td>
                        <td>Nabati</td>
                        <td>10</td>
                        <td>05/11/2023</td>
                        <td>
                            <a href="" class="btn btn-default btn-xs">
                                <i class="fa fa-eye"></i> Detail
                            </a>
                            <a href="" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>A002</td>
                        <td>Teh Rio</td>
                        <td>20</td>
                        <td>05/11/2023</td>
                        <td>
                            <a href="" class="btn btn-default btn-xs">
                                <i class="fa fa-eye"></i> Detail
                            </a>
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