<div class="hold-transition sidebar-mini">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Update Data Siswa</b></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="edit" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('siswa/editin') ?>" method="POST">
                                    <div class="form-group">
                                        <label><b>Id</b> </label>
                                        <input type="text" name="id" value="<?php echo $queryedit->id ?>" class="form_control" readonly>
                                        <?= form_error('id', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Nama </b></label>
                                        <input type="text" name="nama" value="<?php echo $queryedit->nama ?>" class="form_control">
                                        <?= form_error('nama', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label><b>Kelas</b> </label>
                                        <input type="text" name="kelas" value="<?php echo $queryedit->kelas ?>" class="form_control">
                                        <?= form_error('kelas', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Alamat</b> </label>
                                        <textarea name="alamat" cols="30" value="<?php echo $queryedit->alamat ?>" rows="10"><?php echo $queryedit->alamat ?></textarea>
                                        <?= form_error('alamat', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Telepon</b> </label>
                                        <input type="text" name="no_hp" value="<?php echo $queryedit->no_hp ?>" class="form_control">
                                        <?= form_error('no_hp', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>
                                    <br>
                                    <button class="fas fa-check" type="submit"></button>
                                    <button class="fas fa-window-close" type="danger"></button>
                                </form>