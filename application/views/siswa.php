<div class="hold-transition sidebar-mini">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <di class="col-sm-6">
                        <h1><b> Data Siswa </b></h1>
                    </di>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url('siswa/tambah_siswa') ?>" class="fas fa-user-plus"> Tambah siswa</a>
                                <br>
                                <br>
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>id</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Alamat </th>
                                            <th>Telepon </th>
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                    <?php
                                    // var_dump($dataSiswa);
                                    $no = 1;
                                    foreach ($dataSiswa as $ssw) {
                                        // $count = $count + 1;
                                    ?>

                                        <tbody>
                                            <tr class="text-center">
                                                <td><?= $no ?> </td>
                                                <td><?= $ssw->id ?> </td>
                                                <td><?= $ssw->nama ?> </td>
                                                <td><?= $ssw->kelas ?> </td>
                                                <td> <?= $ssw->alamat ?> </td>
                                                <td><?= $ssw->no_hp ?> </td>

                                                <td>
                                                    <!-- <a href="<?= base_url() ?>siswa/edit/<?= $ssw->id ?>">oke</a> -->
                                                    <a href="<?php echo base_url('siswa/edit') . '/' . $ssw->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('siswa/hapus') . '/' . $ssw->id ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                    } ?>
                                        </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>