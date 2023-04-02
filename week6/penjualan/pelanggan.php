<?php
$model = new Pelanggan();
$data_pelanggan = $model->tampil();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Pelanggan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <th>
                            No
                        </th>
                        <th>
                            Kode
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Jenis Kelamin
                        </th>
                        <th>
                            Tempat Lahir
                        </th>
                        <th>
                            Tanggal Lahir
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Kartu ID
                        </th>
                    </thead>
                    <tbody>
                        <!-- cetak data array produk -->
                        <?php
                        $no = 1;
                        foreach ($data_pelanggan as $value) {

                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $value['kode'] ?></td>
                                <td><?php echo $value['nama'] ?></td>
                                <td><?php echo $value['jk'] ?></td>
                                <td><?php echo $value['tmp_lahir'] ?></td>
                                <td><?php echo $value['tgl_lahir'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['kartu_id'] ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>