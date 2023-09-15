<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="students" class="nav-link fas fa-undo <br>"></a>
    <title>Login</title>
</head>

<body>
    <div class="contain">
        <div class="container">
            <div class="row" style="margin-top: 150px;">
                <div class="col-md-4 offset-md-4">
                    <div style="background-color:#C0C0C0;" class="card card-primary">
                        <h2>
                            <div style="border-color: white;" class="card-header">
                                <b>Login!</b>
                            </div>
                        </h2>
                        <div class="card-body">
                            <form method="post" action="<?= base_url('login/login_aksi'); ?> ">
                                <div class="form-group">
                                    <label><b>Username</b></label>
                                    <input type="text" name="username" class="form-control" autocomplete="off">
                                    <small><span class="text-danger"><?= form_error('username'); ?></span></small>
                                </div>
                                <div class="form-group">
                                    <label><b>Password</b></label>
                                    <input type="password" name="password" class="form-control" autocomplete="off">
                                    <small><span class="text-danger"><?= form_error('password'); ?></span></small>
                                </div>
                                <button style="color: #000000;" type="submit" class="btn btn-primary">Login </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>