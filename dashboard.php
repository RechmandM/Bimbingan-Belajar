<?php
$data = $_SESSION['id'];
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <!----------------------------- CONTENT ----------------------------->
    <!----------------------------- CONTENT ----------------------------->
    <!----------------------------- CONTENT ----------------------------->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <?php
        $row = mysqli_query($conn, "SELECT * from user where id='$data'");
        $row_array = mysqli_fetch_array($row);
        ?>
    </div>

    <p class="h1 text-center fw-bold text-capitalize">
        Selamat Datang <?= $row_array['nama'] ?>
    </p>
    <div class="col">
        <div class="">
        </div>
        <section id="data" class="">
            <div class="list-group-item mb-3 text-center bg-transparent">
                <h2 class="list-inline-item fw-bold text-uppercase" style="-webkit-text-stroke: 2px rgb(0, 0, 0); color:blue;">Menampilkan Data Analisis</h2>
            </div>
            <div class="accordion-item">
                <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                    <div class="accordion-body">
                    </div>
                </div>
            </div>
            <?php
            $dataku = mysqli_query($conn, "SELECT * from user");
            //  $pipi = mysqli_fetch_array($dataku);
            $siswa = 0;
            $guru = 0;
            $admin = 0;
            foreach ($dataku as $table) {
                if ($table['lv'] == 1) {
                    $siswa += 1;
                }
                if ($table['lv'] == 2) {
                    $guru += 1;
                }
                if ($table['lv'] == 3) {
                    $admin += 1;
                }
            }

            $dataNilai = mysqli_query($conn, "SELECT * from mapel_data");
            //  $pipi = mysqli_fetch_array($dataku);
            $indonesia = 0;
            $inggris = 0;
            $matematika = 0;
            $ipa = 0;
            $ips = 0;
            $komputer = 0;
            $totalProfit = 200000;
            foreach ($dataNilai as $dataNilaiHasil) {
                $indonesia += $dataNilaiHasil['p1'];
                $inggris += $dataNilaiHasil['p2'];
                $matematika += $dataNilaiHasil['p3'];
                $ipa += $dataNilaiHasil['p4'];
                $ips += $dataNilaiHasil['p5'];
                $komputer += $dataNilaiHasil['p6'];
                // if ($dataNilaiHasil['p1'] == 1) {
                //     $siswa += 1;
                // }
                // if ($table['lv'] == 2) {
                //     $guru += 1;
                // }
                // if ($table['lv'] == 3) {
                //     $admin += 1;
                // }
            }
            $profit = $indonesia + $inggris + $matematika + $ipa + $ips + $komputer;
            $totalProfit *= $profit;
            $totalAdministrasi = $siswa * 150000;

            $row = mysqli_query($conn, "SELECT * from user");
            $row_data = mysqli_fetch_array($row);
            ?>
            <div <?php if ($row_data == null) {
                        echo "hidden";
                    } ?> class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                <div class="container">
                    <div class="row">
                        <div class="row row-cols-2 row-cols-md-3 g-4 mx-auto my-3">
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-danger">
                                        <h1 class="py-3 card-title text-center text-uppercase fw-bold text-white" style="font-size: 90px;"><?= $admin; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Member</h4>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="fw-bold text-center text-danger text-uppercase">Administrator</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-primary">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold text-white" style="font-size: 90px;"><?= $guru; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Member</h4>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="fw-bold text-center text-primary text-uppercase">Pembimbing</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-success">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold text-white" style="font-size: 90px;"><?= $siswa; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Member</h4>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="fw-bold text-center text-success text-uppercase">Siswa</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2 row-cols-md-6 g-4 mx-auto my-3">
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-success">
                                        <h1 class="py-3 card-title text-center text-uppercase fw-bold text-white"><?= $indonesia; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold text-white">Total</h4>
                                    </div>
                                    <div class="card-footer h-50 p-3">
                                        <h6 class="fw-bold text-center text-success text-uppercase">Bahasa Indonesia</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-primary">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold text-white"><?= $inggris; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold text-white">Total</h4>
                                    </div>
                                    <div class="card-footer h-50 p-3">
                                        <h6 class="fw-bold text-center text-primary text-uppercase">Bahasa Inggris</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-danger">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold text-white"><?= $matematika; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold text-white">Total</h4>
                                    </div>
                                    <div class="card-footer h-50 p-3">
                                        <h6 class="fw-bold text-center text-danger text-uppercase">Matematika</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-info">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold"><?= $ipa; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Total</h4>
                                    </div>
                                    <div class="card-footer h-50 p-3">
                                        <h6 class="fw-bold text-center text-info text-uppercase">Pelajaran IPA</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-warning">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold"><?= $ips; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Total</h4>
                                    </div>
                                    <div class="card-footer h-50 p-3">
                                        <h6 class="fw-bold text-center text-warning text-uppercase">Pelajaran IPS</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body bg-dark">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold text-white"><?= $komputer; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold text-white">Total</h4>
                                    </div>
                                    <div class="card-footer h-50 p-3">
                                        <h6 class="fw-bold text-center text-dark text-uppercase">Komputer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div <?php if ($level != 3) {
                                    echo "hidden";
                                } ?> class="row g-4 mx-auto my-3">

                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body" style="background-color:green;">
                                        <h1 class=" py-3 card-title text-center fw-bold text-white"><?= "Rp. " . number_format($totalProfit, 0, ',', '.') ?></h1>
                                        <!-- <h4 class="card-title text-center text-uppercase fw-bold text-white">Total</h4> -->
                                    </div>
                                    <div class="card-footer p-3">
                                        <h6 class="fw-bold text-center text-uppercase" style="color:green;">Profit dari jumlah mata pelajaran</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body" style="background-color:purple;">
                                        <h1 class=" py-3 card-title text-center fw-bold text-white"><?= "Rp. " . number_format($totalAdministrasi, 0, ',', '.') ?></h1>
                                        <!-- <h4 class="card-title text-center text-uppercase fw-bold text-white">Total</h4> -->
                                    </div>
                                    <div class="card-footer p-3">
                                        <h6 class="fw-bold text-center text-uppercase" style="color:purple;">Profit dari jumlah administrasi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body" style="background-color:navy;">
                                        <h1 class=" py-3 card-title text-center fw-bold text-white"><?= "Rp. " . number_format($totalProfit + $totalAdministrasi, 0, ',', '.') ?></h1>
                                        <!-- <h4 class="card-title text-center text-uppercase fw-bold text-white">Total</h4> -->
                                    </div>
                                    <div class="card-footer p-3">
                                        <h6 class="fw-bold text-center text-uppercase" style="color:navy;">profit dari total jumlah pendapatan</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Member</th>
                            <th scope="col">Status</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Mata Peljaraan</th>
                            <th scope="col">Hari Mengajar</th>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table> -->
            </div>
        </section>
        <hr class="garis">
        <div class="d-none">
            <?php
            $row = mysqli_query($conn, "SELECT m.*,u.nama from mapel_data m 
    LEFT JOIN user u on u.id where m.mapel_id");

            $row_array = mysqli_fetch_array($row);
            ?>
            <p>Nama : <?= $row_array['nama'] ?></p>
            <p>Pelajaran Matematika : <?php if ($row_array['p1'] == null || $row_array['p1'] == 0 || $row_array['p1'] == '-') {
                                            echo '-';
                                        } else {
                                            echo "YA";
                                        } ?></p>
            <p>Pelajaran Bahasa Indonesia : <?php if ($row_array['p2'] == null || $row_array['p2'] == 0 || $row_array['p1'] == '-') {
                                                echo '-';
                                            } else {
                                                echo "YA";
                                            } ?></p>
            <p>Pelajaran Bahasa Inggris : <?php if ($row_array['p3'] == null || $row_array['p3'] == 0 || $row_array['p1'] == '-') {
                                                echo '-';
                                            } else {
                                                echo "YA";
                                            } ?></p>
            <p>Pelajaran IPA: <?php if ($row_array['p4'] == null || $row_array['p4'] == 0 || $row_array['p1'] == '-') {
                                    echo '-';
                                } else {
                                    echo "YA";
                                } ?></p>
            <p>Pelajaran IPS: <?php if ($row_array['p5'] == null || $row_array['p5'] == 0 || $row_array['p1'] == '-') {
                                    echo '-';
                                } else {
                                    echo "YA";
                                } ?></p>
            <p>Pelajaran Komputer: <?php if ($row_array['p6'] == null || $row_array['p6'] == 0 || $row_array['p1'] == '-') {
                                        echo '-';
                                    } else {
                                        echo "YA";
                                    } ?></p>
            <p>Harga Satuan : <?= $row_array['harga'] ?></p>
            <p>Total : <?php
                        $total = $row_array['p1'] +
                            $row_array['p2'] +
                            $row_array['p3'] +
                            $row_array['p4'] +
                            $row_array['p5'] +
                            $row_array['p6'];
                        $hasil = $row_array['harga'] * $total;
                        echo $hasil; ?></p>
        </div>
    </div>
</main>

<!-- <div class="container">
        <section id="dashboard" class="text-center">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <?php
                $row = mysqli_query($conn, "SELECT * from user where id='$data'");
                $row_array = mysqli_fetch_array($row);
                ?>
            </div>

            <p class="h1 text-center fw-bold text-capitalize">
                Selamat Datang <?= $row_array['nama'] ?>
            </p>
        </section>
    </div> -->