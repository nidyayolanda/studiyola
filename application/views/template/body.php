<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/sidebar.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div style="margin: 0px;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?? '' ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?? '' ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php if ($view) $this->load->view($view); ?>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<?php $this->load->view('template/footer.php'); ?>