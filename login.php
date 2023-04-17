<?php
error_reporting(0); // menghilangkan errorketika live
session_start();
include_once './config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { //post menjalankan server
    $username = $_POST['uname'];
    $password = $_POST['passw'];
    $result = mysqli_query($conn, "SELECT * from user where us = '$username' and pw = '$password'");
    $user_data = mysqli_fetch_array($result);
    $no_rows = mysqli_num_rows($result); // menghitung jumlah query

    // var_dump($username);
    // var_dump($password);
    // die();
    if ($no_rows == 1) {
        // $_SESSION['Password'] = $user_data['password']; // Tanpa password BIAR AMAN...
        $_SESSION['login'] = true;
        $_SESSION['us'] = $user_data['us'];
        $_SESSION['lv'] = $user_data['lv']; // Tidak harus pakai gpp
        $_SESSION['id'] = $user_data['id']; // Tidak harus pakai gpp
        // header('location:index.php');
        // echo "<script>location.reload()</script>";
        echo "<script>location='./'</script>";
    } else {
        $msg = 'Username/Password Wrong...';
        echo "<script type='text/javascript'>alert('$msg');</script>"; // reload ke login
        // echo "error";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>DAFTAR BIMBINGAN BELAJAR 2022</title>

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

<body class="" style="background-image: url('./assets/img/kota.jpg'); background-repeat: repeat; background-size:auto;">
    <main class="form-signin py-5">
        <div class="row container py-5">
            <!-- <div class="col-md-6 py-2">
                <div class="float-end py-5 bg-transparent">
                    <img style="margin-top: -70px; margin-bottom: -40px;" class="d-block mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300">
                    <img class="mb-4" src="./assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                </div>
            </div> -->
            <div class="col">
                <form action="" method="POST" class="offset-5 col-4">
                    <div class="card p-4 border-2 shadow bg-transparent">
                        <h1 class="h3 mb-3 fw-bold text-capitalize text-center">Silahkan Masuk</h1>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control bg-transparent" id="username" name="uname" placeholder="name@example.com">
                            <label id="lab" for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control bg-transparent" id="password" name="passw" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="checkbox mb-3 text-start">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">LOGIN</button>
                        <p class="mb-3 text-white fw-bold text-center">&copy; 2022–2024</p>

                    </div>
                </form>
            </div>
        </div>
    </main>



</body>

</html>