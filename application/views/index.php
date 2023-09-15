<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mahasiswa</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <br>
        <h2>Daftar Mahasiswa</h2>
        <br>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">Tambah Mahasiswa</button>
        <table id="table" class="table table-bordered table-striped" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php
                    $no = 1;
                    foreach ($students as $st) {
                        // $count = $count + 1;
                    ?>

            <tbody>
                <tr class="text-center">
                    <td><?= $no ?> </td>
                    <td><?= $st->id ?> </td>
                    <td><?= $st->nama ?> </td>

                    <td>
                        <button type="button" class="btn btn-warning btn-sm" id="<?php echo $st->id; ?>" data-toggle="modal" data-target="editModal">Ubah</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deletest(<?php echo $st->id; ?>)" data-toggle="modal" data-target="deleteModal">Hapus</button>
                    </td>
                </tr>
                </tr>
            <?php $no++;
                    } ?>

            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Mahasiswa -->

    <!-- Modal -->
    <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <form method="post" id="form">
                        <div class="form-group">
                            <label for="">id</label>
                            <input type="text" class="form-control" placeholder="id here" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama here" name="nama" id="nama">
                        </div>
                </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Ubah Mahasiswa -->

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form">
                        <div class="form-group">
                            <label for="">id</label>
                            <input type="text" class="form-control" placeholder="id here" name="id" id="id" value="<?= $st->id; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama here" name="nama" id="nama" value="<?= $st->nama; ?>">
                        </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveed">Save changes</button>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Tambahkan link JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?php base_url('js/students.js'); ?>"></script>
    <script>
        var base_url = '<?= base_url() ?>'
    </script>
</body>

</html>