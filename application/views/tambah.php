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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Tambah Data Siswa</b></h1>

                                </div>

                                <form action="<?= base_url('siswa/tambahkan') ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nama </label>
                                        <input type="text" name="nama" class="form_control">
                                        <?= form_error('nama', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Kelas </label>
                                        <input type="text" name="kelas" class="form_control">
                                        <?= form_error('kelas', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat </label>
                                        <textarea name="alamat" cols="30" rows="10"></textarea>
                                        <?= form_error('alamat', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon </label>
                                        <input type="text" name="no_hp" class="form_control">
                                        <?= form_error('no_hp', '<div class="text-small text danger">', '</div>'); ?>
                                    </div>
                                    <button class="fas fa-check" type="submit"></button>
                                    <button class="fas fa-window-close" type="danger"></button>
                                </form>