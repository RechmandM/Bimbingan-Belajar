<?php
$nama = $_SESSION['id'];
$level = $_SESSION['lv'];
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
                tombol.innerHTML = "TAMBAH";
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
            if (tom.innerHTML == "TAMBAH") {
                tom.innerHTML = "CLOSE";
            } else {
                tom.innerHTML = "TAMBAH";
            }

        }
    </script>
    <div class="col">
        <div class="py-3">
        </div>
        <section id="data" class="py-3">
            <div class="list-group-item mb-3 bg-transparent text-center">
                <h2 class="list-inline-item text-success fw-bold text-uppercase" style="-webkit-text-stroke: 2px rgb(0, 0, 0);">Jadwal Pelajaran</h2>
            </div>
            <div class="accordion-item">
                <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                    <div class="accordion-body">
                    </div>
                </div>
            </div>
            <div class="table-size table-scroll table-responsive">
                <table class="table table-bordered table-hover table-striped table-sm bg-white" style="font-size:larger;">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Guru Pembimbing</th>
                            <!-- <th scope="col">Options</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($conn, "SELECT * from user where id='$nama'");
                        $info = mysqli_fetch_array($data);
                        // $row = mysqli_query($conn, "SELECT j.*,u.nama from jadwal j 
                        // LEFT JOIN user u on u.hari=j.hari where j.jad_id order by jad_id ASC");
                        $row = mysqli_query($conn, "SELECT j.*,u.nama from jadwal j 
                        LEFT JOIN user u on u.hari=j.hari order by jad_id ASC");
                        $no = 1;
                        $dapat = $_GET['data_id'];
                        $s = 1;
                        $warna = [1 => 'text-success', 'text-primary', 'text-danger', 'text-info', 'text-warning', 'text-dark'];


                        foreach ($row as $row_array) { ?>
                            <tr>
                                <td class="fw-bolder text-"><?= $no; ?></td>
                                <td class="fw-bolder <?= $warna[$s] ?>"><?= $row_array['hari']; ?></td>
                                <!-- <td><?= $row_array['mata_pelajaran']; ?></td> -->
                                <td><?php
                                    $amb = mysqli_query($conn, "SELECT u.*,m.p1,m.p2,m.p3,m.p4,m.p5,m.p6 from user u 
                                LEFT JOIN mapel_data m on m.mapel_id=u.id where m.mapel_id='$dapat'");
                                    $ron = mysqli_fetch_array($amb);
                                    ?>
                                    <?php
                                    $p = "p{$s}";
                                    if ($ron[$p] == 1) {
                                        $ok = $row_array['mata_pelajaran'];
                                        echo "<span style='color:blueviolet; font-weight:bold;'>$ok</span>";
                                    } else {
                                        echo $row_array['mata_pelajaran'];
                                    }
                                    ?>
                                </td>
                                <td class="text-capitalize"><?php if ($row_array['nama'] != null) {
                                        if ($info['nama'] == $row_array['nama']) {
                                            $name = $row_array['nama'];
                                            echo "<span style='color:blueviolet; font-weight:bold;'>$name</span>";
                                        } else {
                                            echo $row_array['nama'];
                                        }
                                    } else {
                                        echo "-";
                                    } ?></td>
                                <!-- <td>
                                    <?php if ($level == 3) { ?>
                                        <a class="text-white text-decoration-none" href="?mi=edit_barang&id=<?php echo $row_array['jad_id']; ?>"><button class="btn-primary w-100">Edit</button></a>
                                    <?php } else {
                                    } ?>
                                </td> -->
                            </tr>
                        <?php $no++;
                            $s++;
                        } ?>
                    </tbody>
                </table>
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