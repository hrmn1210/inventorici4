<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="admin/dashboard-admin"><span class="glyphicon glyphicon-home"></span></a>
            </li>
            <li class="active">Data Kendaraan</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Kendaraan</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Data Kendaraan</div>
                <a href="<?= base_url('tambah-kendaraan'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Kendaraan</a>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-field="nama" data-sortable="true">Nama</th>
                                <th data-field="kategori" data-sortable="true">Jenis Kendaraan</th>
                                <th data-field="jenis" data-sortable="true">Lokasi</th>
                                <th data-field="tanggal" data-sortable="true">No Plat</th>
                                <th data-field="aksi" data-sortable="true">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pajero</td>
                                <td>SUV</td>
                                <td>Garasi 01</td>
                                <td>Kb 1234 MM</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Detail</a>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->