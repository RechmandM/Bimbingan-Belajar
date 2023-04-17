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


<body class="" style="background-image: url('./assets/img/login2.jpg'); background-repeat: repeat; background-size:auto;">
    <main class="form-signin py-5">
        <div class="row container py-5">
            <!-- <div class="col-md-6 py-2">
                <div class="float-end py-5 bg-transparent">
                    <img style="margin-top: -70px; margin-bottom: -40px;" class="d-block mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300">
                    <img class="mb-4" src="./assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                </div>
            </div> -->
            <div class="col">
                <form action="" method="POST" class="offset-5 col-5">
                    <div class="card p-4 border-2 shadow bg-transparent">
                        <h1 class="h3 mb-3 fw-bold text-capitalize text-center text-primary">Silahkan Membuat Username & Password</h1>
                        <div>
                            <!-- <h5>Daftar Sebagai :</h5> -->
                            <?php
                            $lv = $_REQUEST['sebagai'];
                            $nama = $_REQUEST['nama'];
                            $alamat = $_REQUEST['alamat'];
                            $nomor = $_REQUEST['nomor'];
                            $asal = $_REQUEST['asal'];
                            $tingkat = $_REQUEST['tingkat'];
                            $nip = $_REQUEST['nip'];
                            $hari = $_REQUEST['hari'];
                            ?>
                            <div class="form-floating mb-3">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="user" name="user" placeholder="Nama">
                                <label for="nama" class="text-danger fw-bold">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="pass" name="pass" placeholder="alamat">
                                <label for="alamat" class="text-danger fw-bold">Password</label>
                            </div>
                            <div class="form-floating mb-3 d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="lv" name="lv" value="<?= $lv; ?>">
                                <label for="alamat">lvl</label>
                            </div>
                            <div class="form-floating mb-3 d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="nama" name="nama" value="<?= $nama; ?>">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="form-floating mb-3 d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="alamat" name="alamat" value="<?= $alamat; ?>">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="form-floating mb-3 d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="nomor" name="nomor" value="<?= $nomor; ?>">
                                <label for="alamat">Nomor Telepon</label>
                            </div>
                            <div class="form-floating mb-3 asal-show d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="asal" name="asal" value="<?= $asal; ?>">
                                <label for="alamat">Asal Sekolah</label>
                            </div>
                            <div class="form-floating mb-3 tingkat-show d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="tingkat" name="tingkat" value="<?= $tingkat; ?>">
                                <label for="alamat">Tingkat</label>
                            </div>
                            <div class="form-floating mb-3 nip-show d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="nip" name="nip" value="<?= $nip; ?>">
                                <label for="alamat">NIP</label>
                            </div>
                            <div class="form-floating mb-3 nip-show d-none">
                                <input style="height: 60px;" type="text" class="form-control bg-transparent" id="hari" name="hari" value="<?= $hari; ?>">
                                <label for="alamat">hari</label>
                            </div>
                        </div>
                        <button class="w-100 btn btn-lg btn-danger mb-3" type="submit" name="submit">Daftarkan Sekarang</button>
                        <p class="mb-3 fw-bold text-center text-white">&copy; 2022–2024</p>
                    </div>

                </form>
            </div>
        </div>
    </main>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    // mysqli_query($konek, "INSERT INTO user (lv,us,pw,alamat)
    // values('$lvl','$user','$pass','$alamat')");
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $lv = $_POST['lv'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $asal = $_POST['asal'];
    $nip = $_POST['nip'];
    $hari = $_POST['hari'];
    $tingkat = $_POST['tingkat'];
    mysqli_query($conn, "INSERT INTO user (lv,us,pw,nama,alamat,ass,nom,nip,hari,tingkat)
    values('$lv','$user','$pass','$nama','$alamat','$asal','$nomor','$nip','$hari','$tingkat')");

    usleep(500000);
    // $msg = "Pendaftaran Selesai...\nSilahkan Login";
    // echo "<script type='text/javascript'>alert('$msg');</script>"; // reload ke login
    echo "<script>window.location = 'login.php'</script>";

    // echo "error";
}
?>
<script src="assets/js/jquery/jquery.min.js"></script>
<!-- <script src="./jquery/jquery.min.js"></script> -->
<script>
    $('#sebagai').on('change', function() {
        var selectedPackage = $('#sebagai').val();
        if (selectedPackage == '1') {
            $(".asal-show").removeClass("d-none");
            $(".nip-show").addClass("d-none");
            $("#asal").val("");
        }
    })
    $('#sebagai2').on('change', function() {
        var selectedPackage = $('#sebagai2').val();
        if (selectedPackage == '2') {
            $(".asal-show").addClass("d-none");
            $(".nip-show").removeClass("d-none");
            $("#nip").val("");
        }
    })
</script>