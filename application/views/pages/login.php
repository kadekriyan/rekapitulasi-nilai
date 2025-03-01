<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="<?= base_url('assets/style/style.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url(); ?>assets/scripts/sweetalert2.all.min.js"></script>
    <link rel="icon" href="<?= base_url(); ?>assets/images/logo-amikom-ungu.png" type="image/x-icon">
    <title>Login</title>
</head>

<body class="overflow-hidden">
    <div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

    <div class="py-2 bg-ungu d-flex">
        <div class="px-4 py-2">
            <img src="<?= base_url('assets/images/logo-amikom-ungu.png') ?>" alt="logo amikom" width="100px">
        </div>
        <div class="text-white py-1">
            <h3>UNIVERSITAS AMIKOM YOGYAKARTA</h3>
            <p>
            <h6>Jl.Padjajaran, Ring Road Utara, Kel.Condongcatur, Kec.Depok, Kab.Sleman, Prop. Daerah Istimewa
                Yogyakarta</h5>
                </p>
                <p>
                <h6>Telp: +62274884201, Website: www.amikom.ac.id, Email : amikom@amikom.ac.id</h6>
                </p>
        </div>
    </div>
    <div class="judul text-center">
        <span>
            <h1>DASHBOARD DOSEN</h1>
        </span>

    </div>
    <div class="container justify-content-center form-login rounded">
        <div class="form p-2 mx-1 py-4 justify-content-center">
            <form action="<?= base_url('auth/process_login'); ?>" method="post">
                <div class="container">
                    <span class="text-center">
                        <h3>Login Dosen</h3>
                    </span>
                    <hr>
                    <label for="nik" class="form-label">NIK</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nik" aria-describedby="basic-addon3"
                            placeholder="Masukkan NIK" name='nik' required>
                    </div>
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" aria-describedby="basic-addon3"
                            placeholder="Masukkan Password" name='password' required>
                    </div>
                    <button class="btn btn-login text-center bg-warning my-4 w-100" type="submit"
                        name="submit">Login</button>
                </div>
            </form>

        </div>
    </div>
    <!-- <div class="container justify-content-center footer-login mt-2">
        <span>
            <h6>Don't have a account ? <a href="#">Register</a> </h5>
        </span>
    </div> -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/scripts/script.js"></script>
</body>

</html>