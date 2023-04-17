<?php
error_reporting(0);
$nama = $_SESSION['id'];
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <!----------------------------- CONTENT ----------------------------->
    <!----------------------------- CONTENT ----------------------------->
    <!----------------------------- CONTENT ----------------------------->
    <script>
        function check() {
            var switer = document.getElementById("flexS");
            var tombol = document.getElementById("tb");
            var tombol2 = document.getElementById("tb2");
            if (switer.checked == true) {
                // tombol.style.display = "block";
                tombol.hidden = true;
                tombol.innerHTML = "OPEN";
                tombol2.hidden = false;
                document.getElementById("colTB").className = "accordion-collapse collapse hide";
            } else {
                // tombol.style.display = "none";
                tombol.hidden = false;
                tombol2.hidden = true;
            }
        }
    </script>
    <script>
        function tambah() {
            var tom = document.getElementById('tb');
            if (tom.innerHTML == "OPEN") {
                tom.innerHTML = "CLOSE";
            } else {
                tom.innerHTML = "OPEN";
            }

        }
    </script>
    <div class="col">
        <div class="py-3">
        </div>
        <section id="data" class="py-3">
            <div class="list-group-item mb-3 bg-transparent">
                <h2 class="list-inline-item text-danger fw-bold" style="-webkit-text-stroke: 2px rgb(0, 0, 0);">DATA PELAJARAN</h2>
                <button onclick="tambah()" id="tb" class="btn-danger rounded-2 float-end w-25 p-2 my-1 fw-bold" data-bs-toggle="collapse" data-bs-target="#colTB">OPEN</button>
                <a href="?mi=formbarang"><button id="tb2" class="btn-primary rounded-2 float-end w-25 p-2 my-1 fw-bold" hidden>TAMBAH</button></a>
            </div>
            <div class="accordion-item bg-transparent">
                <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                    <div class="accordion-body">
                        <?php include "./form_mapel.php"; ?>
                    </div>
                </div>
            </div>
            <div class="table-size table-scroll table-responsive d-none">
                <table class="table table-bordered table-hover table-striped table-sm" style="font-size:larger;">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Pelajaran 1</th>
                            <th scope="col">Pelajaran 2</th>
                            <th scope="col">Pelajaran 3</th>
                            <th scope="col">Pelajaran 4</th>
                            <th scope="col">Pelajaran 5</th>
                            <th scope="col">Pelajaran 6</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = mysqli_query($conn, "SELECT m.*,u.nama from mapel_data m 
                        LEFT JOIN user u on u.id=m.mapel_id where m.mapel_id");
                        $no = 1;
                        foreach ($row as $row_array) { ?>
                            <tr>
                                <td class="fw-bolder"><?= $no; ?></td>
                                <td><?= $row_array['nama']; ?></td>
                                <td><?= $row_array['p1']; ?></td>
                                <td><?= $row_array['p2']; ?></td>
                                <td><?= $row_array['p3']; ?></td>
                                <td><?= $row_array['p4']; ?></td>
                                <td><?= $row_array['p5']; ?></td>
                                <td><?= $row_array['p6']; ?></td>
                                <td><?= $row_array['harga']; ?></td>
                                <td><?= $row_array['total']; ?></td>
                                <td>
                                    <a class="text-white text-decoration-none" href="?mi=edit_barang&id=<?php echo $row_array['mapel_id']; ?>"><button class="btn-primary w-100">Edit</button></a>
                                    <a class="text-white text-decoration-none" href="?mi=hapus_barang&id=<?php echo $row_array['mapel_id']; ?>"><button class="btn-danger w-100">Delete</button></a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?><tr>
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <hr class="garis">
        <div class="container py-4 bg-white text-uppercase">
            <?php
            $row = mysqli_query($conn, "SELECT * from user where id='$id'");
            $row_array = mysqli_fetch_array($row);
            ?>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Nama Siswa</label>
                    <div class="col-3">
                        <input type="text" class="form-control fw-bold text-center text-uppercase text-primary" id="Nama" name="nama" value="<?= $row_array['nama']; ?>" placeholder="Alamat" required>
                    </div>
                </div>
            </div>

            <?php
            // $row = mysqli_query($conn, "SELECT m.*,u.nama from mapel_data m
            // LEFT JOIN user u on u.id=m.mapel where m.mapel_id
            // order by mapel_id DESC");
            $data = mysqli_query($conn, "SELECT * from mapel_data where mapel_id='$id'");
            $row = mysqli_fetch_array($data);
            if ($row['mapel_id'] == $id) {
                $has = "y";
            } else {
                $has = "n";
            }
            ?>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Bahasa Indonesia</label>
                    <div class="col-3">
                        <input type="text" class="form-control <?php
                                                                if ($has == 'y') {
                                                                    if ($row['p1'] == 1) {
                                                                        echo "fw-bold text-center text-success";
                                                                    } else {
                                                                        echo "fw-bold text-center text-danger";
                                                                    }
                                                                }
                                                                ?>" id="p1" name="p1" value="<?php
                                                                                                if ($has == "y") {
                                                                                                    if ($row['p1'] != 0) {
                                                                                                        $dat1 = $row['p1'];
                                                                                                        echo "YA";
                                                                                                    } else {
                                                                                                        echo "NO";
                                                                                                        $row['p1'] = 0;
                                                                                                        $dat1 = $row['p1'];
                                                                                                    }
                                                                                                } else {
                                                                                                    echo "-";
                                                                                                    $dat = 0;
                                                                                                }
                                                                                                ?>" placeholder="Bahasa Indonesia" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Bahasa Inggris</label>
                    <div class="col-3">
                        <input type="text" class="form-control <?php
                                                                if ($has == 'y') {
                                                                    if ($row['p2'] == 1) {
                                                                        echo "fw-bold text-center text-success";
                                                                    } else {
                                                                        echo "fw-bold text-center text-danger";
                                                                    }
                                                                }
                                                                ?>" id="p2" name="p2" value="<?php
                                                                                                if ($has == "y") {
                                                                                                    if ($row['p2'] != 0) {
                                                                                                        $dat2 = $row['p2'];
                                                                                                        echo "YA";
                                                                                                    } else {
                                                                                                        echo "NO";
                                                                                                        $row['p2'] = 0;
                                                                                                        $dat2 = $row['p2'];
                                                                                                    }
                                                                                                } else {
                                                                                                    echo "-";
                                                                                                    $dat = 0;
                                                                                                }
                                                                                                ?>" placeholder="Bahasa Inggris" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Matematika</label>
                    <div class="col-3">
                        <input type="text" class="form-control <?php
                                                                if ($has == 'y') {
                                                                    if ($row['p3'] == 1) {
                                                                        echo "fw-bold text-center text-success";
                                                                    } else {
                                                                        echo "fw-bold text-center text-danger";
                                                                    }
                                                                }
                                                                ?>" id="p3" name="p3" value="<?php
                                                                                                if ($has == "y") {
                                                                                                    if ($row['p3'] != 0) {
                                                                                                        $dat3 = $row['p3'];
                                                                                                        echo "YA";
                                                                                                    } else {
                                                                                                        echo "NO";
                                                                                                        $row['p3'] = 0;
                                                                                                        $dat3 = $row['p3'];
                                                                                                    }
                                                                                                } else {
                                                                                                    echo "-";
                                                                                                    $dat = 0;
                                                                                                }
                                                                                                ?>" placeholder="Matematika" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Pelajaran IPA</label>
                    <div class="col-3">
                        <input type="text" class="form-control <?php
                                                                if ($has == 'y') {
                                                                    if ($row['p4'] == 1) {
                                                                        echo "fw-bold text-center text-success";
                                                                    } else {
                                                                        echo "fw-bold text-center text-danger";
                                                                    }
                                                                }
                                                                ?>" id="p4" name="p4" value="<?php
                                                                                                if ($has == "y") {
                                                                                                    if ($row['p4'] != 0) {
                                                                                                        $dat4 = $row['p4'];
                                                                                                        echo "YA";
                                                                                                    } else {
                                                                                                        echo "NO";
                                                                                                        $row['p4'] = 0;
                                                                                                        $dat4 = $row['p4'];
                                                                                                    }
                                                                                                } else {
                                                                                                    echo "-";
                                                                                                    $dat = 0;
                                                                                                }
                                                                                                ?>" placeholder="IPA" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Pelajaran IPS</label>
                    <div class="col-3">
                        <input type="text" class="form-control <?php
                                                                if ($has == 'y') {
                                                                    if ($row['p5'] == 1) {
                                                                        echo "fw-bold text-center text-success";
                                                                    } else {
                                                                        echo "fw-bold text-center text-danger";
                                                                    }
                                                                }
                                                                ?>" id="p5" name="p5" value="<?php
                                                                                                if ($has == "y") {
                                                                                                    if ($row['p5'] != 0) {
                                                                                                        $dat5 = $row['p5'];
                                                                                                        echo "YA";
                                                                                                    } else {
                                                                                                        echo "NO";
                                                                                                        $row['p5'] = 0;
                                                                                                        $dat5 = $row['p5'];
                                                                                                    }
                                                                                                } else {
                                                                                                    echo "-";
                                                                                                    $dat = 0;
                                                                                                }
                                                                                                ?>" placeholder="IPS" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Pelajaran Komputer</label>
                    <div class="col-3">
                        <input type="text" class="form-control <?php
                                                                if ($has == 'y') {
                                                                    if ($row['p6'] == 1) {
                                                                        echo "fw-bold text-center text-success";
                                                                    } else {
                                                                        echo "fw-bold text-center text-danger";
                                                                    }
                                                                }
                                                                ?>" id="p6" name="p6" value="<?php
                                                                                                if ($has == "y") {
                                                                                                    if ($row['p6'] != 0) {
                                                                                                        $dat6 = $row['p6'];
                                                                                                        echo "YA";
                                                                                                    } else {
                                                                                                        echo "NO";
                                                                                                        $row['p6'] = 0;
                                                                                                        $dat6 = $row['p6'];
                                                                                                    }
                                                                                                } else {
                                                                                                    echo "-";
                                                                                                    $dat = 0;
                                                                                                }
                                                                                                ?>" placeholder="Komputer" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Harga Satu Pelajaran</label>
                    <div class="col-3">
                        <input readonly type="text" class="form-control fw-bold text-center" id="harga" name="harga" value="Rp. 200.000" placeholder="Harga" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-3">Biaya Administrasi</label>
                    <div class="col-3">
                        <input readonly type="text" class="form-control fw-bold text-center" id="biaya" name="biaya" value="Rp. 150.000" placeholder="Biaya Administrasi" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group">
                    <label class="form-label col-form-label fw-bold col-3">Total</label>
                    <div class="col-3">
                        <?php
                        $total = $dat1 +
                            $dat2 +
                            $dat3 +
                            $dat4 +
                            $dat5 +
                            $dat6;
                        $hasil = 200000 * $total;
                        $hasil += 150000;
                        ?>
                        <input readonly type="text" class=" text-center form-control fw-bolder" id="p1" name="p1" value="<?php
                                                                                                                            $data = mysqli_query($conn, "SELECT * from mapel_data where mapel_id='$id'");
                                                                                                                            $row = mysqli_fetch_array($data);
                                                                                                                            if ($row['p1'] == null || $row['p2'] == null || $row['p3'] == null || $row['p4'] == null || $row['p5'] == null || $row['p6'] == null) {
                                                                                                                                echo "-";
                                                                                                                            } else if ($row['p1'] == 0 && $row['p2'] == 0 && $row['p3'] == 0 && $row['p4'] == 0 && $row['p5'] == 0 && $row['p6'] == 0) {
                                                                                                                                echo "-";
                                                                                                                            } else {
                                                                                                                                echo "Rp. " . number_format($hasil, 0, ',', '.');
                                                                                                                            }

                                                                                                                            ?>" placeholder="Harga" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>