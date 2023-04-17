<?php
error_reporting(0); // menghilangkan errorketika live
// session_start();
include_once './config/koneksi.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") { //post menjalankan server
//     $username = $_POST['uname'];
//     $password = $_POST['passw'];
//     $result = mysqli_query($conn, "SELECT * from user where username = '$username' and password = '$password'");
//     $user_data = mysqli_fetch_array($result);
//     $no_rows = mysqli_num_rows($result); // menghitung jumlah query

//     // var_dump($username);
//     // var_dump($password);
//     // die();
//     if ($no_rows == 1) {
//         $_SESSION['login'] = true;
//         $_SESSION['us'] = $user_data['username'];
//         // $_SESSION['Password'] = $user_data['password']; // Tanpa password BIAR AMAN...
//         $_SESSION['level'] = $user_data['level']; // Tidak harus pakai gpp
//         $_SESSION['id'] = $user_data['id']; // Tidak harus pakai gpp
//         // header('location:index.php');
//         // echo "<script>location.reload()</script>";
//         echo "<script>location='./'</script>";
//     } else {
//         $msg = 'Username/Password Wrong...';
//         echo "<script type='text/javascript'>alert('$msg');</script>"; // reload ke login
//         // echo "error";
//     }
// }

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>You and Me SHOP Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/sign-in/signin.css" rel="stylesheet">
</head>
<!-- <body class="text-center" style="background-image: url('https://images.bisnis-cdn.com/posts/2020/06/14/1252464/mkpi-pim-1.jpg');"> -->

<body class="" style="background-image: url('./assets/img/kota2.jpg'); background-repeat: repeat; background-size:auto;">

    <main class="form-signin py-5">
        <div class="row container py-5">
            <!-- <div class="col-md-6 py-2">
                <div class="float-end py-5 bg-transparent">
                    <img style="margin-top: -70px; margin-bottom: -40px;" class="d-block mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300">
                    <img class="mb-4" src="./assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                </div>
            </div> -->
            <div class="col">
                <form action="loginp2.php" method="POST" class="offset-5 col-5">
                    <div class="card p-4 border-2 shadow bg-transparent">
                        <h1 class="h3 mb-3 fw-bold text-capitalize text-center">Pendaftaran Bimbingan Belajar Siswa SMP</h1>
                        <div>
                            <!-- <h5>Daftar Sebagai :</h5> -->
                            <div class="p-1 fw-bold" style="color: red;">
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input" id="sebagai" name="sebagai" value="1">
                                    <label id="lab" for="sebagai">Daftar Sebagai Siswa</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input" id="sebagai2" name="sebagai" value="2">
                                    <label id="lab" for="sebagai2">Daftar Sebagai Pembimbing</label>
                                </div>
                            </div>
                            <div>
                                <div class="form-floating mb-3 bg-white shadow">
                                    <input style="height: 60px;" type="text" class="form-control bg-transparent" id="nama" name="nama" placeholder="Nama">
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3 bg-white shadow">
                                    <input style="height: 60px;" type="text" class="form-control bg-transparent" id="alamat" name="alamat" placeholder="alamat">
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="form-floating mb-3 bg-white shadow">
                                    <input style="height: 60px;" type="text" class="form-control bg-transparent" id="nomor" name="nomor" placeholder="alamat">
                                    <label for="alamat">Nomor Telepon</label>
                                </div>
                                <div class="form-floating mb-3 asal-show d-none bg-white shadow">
                                    <input style="height: 60px;" type="text" class="form-control bg-transparent" id="asal" name="asal" placeholder="alamat">
                                    <label for="alamat">Asal Sekolah</label>
                                </div>
                                <div class="mb-3 tingkat-show d-none bg-white shadow">
                                    <select name="tingkat" id="tingkat" class="form-control bg-white shadow-sm">
                                        <option value="-">--Pilih Tingkat--</option>
                                        <option value="Tingkat 1">Tingkat 1</option>
                                        <option value="Tingkat 2">Tingkat 2</option>
                                        <option value="Tingkat 3">Tingkat 3</option>
                                    </select>
                                </div>

                                <div class="form-floating mb-3 nip-show d-none bg-white shadow">
                                    <input style="height: 60px;" type="text" class="form-control bg-transparent" id="nip" name="nip" placeholder="alamat">
                                    <label for="alamat">NIP</label>
                                </div>
                                <div class="mb-3 nip-show d-none">
                                    <h5 class="text-center text-danger fw-bold">Pilih Mata Pelajaran</h5>
                                    <?php
                                    $row = mysqli_query($conn, "SELECT * from user");
                                    foreach ($row as $rows) {
                                        if ($rows['hari'] != null) {
                                            $dat = "Sudah Ada Kelas";
                                        }
                                        $dat = '';
                                    }
                                    ?>
                                    <select name="hari" id="hari" class="form-control bg-white shadow">
                                        <option hidden value="-">--Pilih Mata Pelajaran--</option>
                                        <option <?php
                                                $row = mysqli_query($conn, "SELECT * from user");
                                                foreach ($row as $rows) {
                                                    if ($rows['hari'] == "Senin") {
                                                        $inf1 = 'n';
                                                        echo "disabled";
                                                    }
                                                }
                                                ?> class="<?php if ($inf1 == 'n') {
                                                                echo "text-danger";
                                                            } ?>" value="Senin">Senin : Bahasa Indonesia
                                            <?php if ($inf1 == 'n') {
                                                echo " (Sudah Ada Kelas)";
                                            } ?></option>
                                        <option <?php
                                                $row = mysqli_query($conn, "SELECT * from user");
                                                foreach ($row as $rows) {
                                                    if ($rows['hari'] == "Selasa") {
                                                        $inf2 = 'n';
                                                        echo "disabled";
                                                    }
                                                }
                                                ?> class="<?php if ($inf2 == 'n') {
                                                                echo "text-danger";
                                                            } ?>" value="Selasa">Selasa : Bahasa Inggris
                                            <?php if ($inf2 == 'n') {
                                                echo " (Sudah Ada Kelas)";
                                            } ?></option>
                                        <option <?php
                                                $row = mysqli_query($conn, "SELECT * from user");
                                                foreach ($row as $rows) {
                                                    if ($rows['hari'] == "Rabu") {
                                                        $inf3 = 'n';
                                                        echo "disabled";
                                                    }
                                                }
                                                ?> class="<?php if ($inf3 == 'n') {
                                                                echo "text-danger";
                                                            } ?>" value="Rabu">Rabu : Matematika
                                            <?php if ($inf3 == 'n') {
                                                echo " (Sudah Ada Kelas)";
                                            } ?></option>
                                        <option <?php
                                                $row = mysqli_query($conn, "SELECT * from user");
                                                foreach ($row as $rows) {
                                                    if ($rows['hari'] == "Kamis") {
                                                        $inf4 = 'n';
                                                        echo "disabled";
                                                    }
                                                }
                                                ?> class="<?php if ($inf4 == 'n') {
                                                                echo "text-danger";
                                                            } ?>" value="Kamis">Kamis : IPA
                                            <?php if ($inf4 == 'n') {
                                                echo " (Sudah Ada Kelas)";
                                            } ?></option>
                                        <option <?php
                                                $row = mysqli_query($conn, "SELECT * from user");
                                                foreach ($row as $rows) {
                                                    if ($rows['hari'] == "Jumat") {
                                                        $inf5 = 'n';
                                                        echo "disabled";
                                                    }
                                                }
                                                ?> class="<?php if ($inf5 == 'n') {
                                                                echo "text-danger";
                                                            } ?>" value="Jumat">Jumat : IPS
                                            <?php if ($inf5 == 'n') {
                                                echo " (Sudah Ada Kelas)";
                                            } ?></option>
                                        <option <?php
                                                $row = mysqli_query($conn, "SELECT * from user");
                                                foreach ($row as $rows) {
                                                    if ($rows['hari'] == "Sabtu") {
                                                        $inf6 = 'n';
                                                        echo "disabled";
                                                    }
                                                }
                                                ?> class="<?php if ($inf6 == 'n') {
                                                                echo "text-danger";
                                                            } ?>" value="Sabtu">Sabtu : Komputer
                                            <?php if ($inf6 == 'n') {
                                                echo " (Sudah Ada Kelas)";
                                            } ?></option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <input type="password" class="form-control bg-transparent" id="password" name="passw" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div> -->

                            <!-- <div class="checkbox mb-3 text-start">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div> -->
                        </div>

                        <button id="btk" disabled class="w-100 btn btn-lg btn-primary mb-3" type="submit">DAFTAR</button>
                        <button id="btq" class="w-100 btn btn-lg btn-primary mb-3 d-none" type="submit">DAFTAR</button>
                        <p class="text-dark fw-bold">Sudah Mendaftar? Silahkan <a href="login.php" class="fw-bold">MASUK</a> </p>
                            <p class="mb-3 text-danger fw-bold text-center list-inline-item">Created By Rechmand<br>
                            <p class="mb-3 text-dark fw-bold text-center">&copy; 2022–2024</p>
                    </div>
                </form>

            </div>
        </div>
    </main>



</body>

</html>



<script src="assets/js/jquery/jquery.min.js"></script>
<!-- <script src="./jquery/jquery.min.js"></script> -->
<script>
    $('#sebagai').on('change', function() {
        var selectedPackage = $('#sebagai').val();
        if (selectedPackage == '1') {
            $(".asal-show").removeClass("d-none");
            $(".tingkat-show").removeClass("d-none");
            $(".nip-show").addClass("d-none");
            $("#asal").val("");
            $("#hari").val("-");
            $("#btq").removeClass("d-none");
            $("#btk").addClass("d-none");
        }
    })
    $('#sebagai2').on('change', function() {
        var selectedPackage = $('#sebagai2').val();
        if (selectedPackage == '2') {
            $(".asal-show").addClass("d-none");
            $(".tingkat-show").addClass("d-none");
            $(".nip-show").removeClass("d-none");
            $("#tingkat").val("-");
            $("#nip").val("");
            $("#btq").removeClass("d-none");
            $("#btk").addClass("d-none");
        }
    })
    $('#sebagai3').on('change', function() {
        var selectedPackage = $('#sebagai3').val();
        if (selectedPackage == '3') {
            $(".asal-show").addClass("d-none");
            $(".tingkat-show").addClass("d-none");
            $(".nip-show").addClass("d-none");
            $("#tingkat").val("-");
            $("#nip").val("-");
            $("#asal").val("-");
            $("#hari").val("-");
            $("#btq").removeClass("d-none");
            $("#btk").addClass("d-none");
        }
    })
</script>