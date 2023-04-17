<?php
$nama = $_SESSION['id'];
$level = $_SESSION['lv'];
if ($level != 3) {
    include "./dashboard2.php";
    return;
} else {
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
                <div class="list-group-item mb-3 text-center bg-transparent">
                    <h2 class="list-inline-item text-info fw-bold text-uppercase" style="-webkit-text-stroke: 2px rgb(0, 0, 0);">Data Member</h2>
                </div>
                <div class="accordion-item">
                    <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                        <div class="accordion-body">
                        </div>
                    </div>
                </div>
                <?php
                $row = mysqli_query($conn, "SELECT * from user order by lv ASC");
                $row_data = mysqli_fetch_array($row);
                ?>
                <div <?php if ($row_data != null) {
                            echo "hidden";
                        } ?> class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                    <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
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
                    </table>
                </div>
                <div <?php if ($row_data == null) {
                            echo "hidden";
                        } ?> class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                    <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
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
                                <th scope="col">Tingkat</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Hari Mengajar</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $row = mysqli_query($conn, "SELECT j.*,u.nama from jadwal j 
                            // LEFT JOIN user u on u.hari=j.hari where j.jad_id
                            // order by jad_id ASC");
                            $row = mysqli_query($conn, "SELECT u.*,j.mata_pelajaran from user u 
                        LEFT JOIN jadwal j on j.hari=u.hari where u.id order by lv DESC");
                            $no = 1;
                            foreach ($row as $row_array) { ?>
                                <tr>
                                    <td class="fw-bolder"><?= $no; ?></td>
                                    <td><?php echo "#ID" . $row_array['id']; ?></td>
                                    <td class="fw-bold"><?php if ($row_array['lv'] == 1) {
                                                            echo "<span style='color:green;'>Siswa</span>";
                                                        } else if ($row_array['lv'] == 2) {
                                                            echo "<span style='color:blue;'>Pembimbing</span>";
                                                        } else {
                                                            echo "<span style='color:red;'>Administrator</span>";
                                                        } ?></td>
                                    <td><?= $row_array['us']; ?></td>
                                    <td><?= "*****" ?></td>
                                    <td><?= $row_array['nama']; ?></td>
                                    <td><?= $row_array['alamat']; ?></td>
                                    <td><?= $row_array['nom']; ?></td>
                                    <td><?php if ($row_array['ass'] != null) {
                                            echo $row_array['ass'];
                                        } else {
                                            echo "-";
                                        } ?></td>
                                    <td><?php if ($row_array['tingkat'] != null) {
                                            echo $row_array['tingkat'];
                                        } else {
                                            echo "-";
                                        } ?></td>
                                    <td><?php if ($row_array['nip'] == null || $row_array['nip'] == 0) {
                                            echo "-";
                                        } else {
                                            echo $row_array['nip'];
                                        } ?></td>
                                    <td><?php if ($row_array['mata_pelajaran'] == null) {
                                            echo "-";
                                        } else {
                                            echo $row_array['mata_pelajaran'];
                                        } ?></td>
                                    <td><?php if ($row_array['hari'] != 0 || $row_array['hari'] != null) {
                                            echo $row_array['hari'];
                                        } else {
                                            echo "-";
                                        } ?></td>
                                    <td>
                                        <?php if ($level == 3) { ?>
                                            <a class="text-white text-decoration-none" href="?mi=data_user_edit&id=<?php echo $row_array['id']; ?>"><button class="btn-primary w-100">Edit</button></a>
                                            <a class="text-white text-decoration-none" href="?mi=data_user_delete&id=<?php echo $row_array['id']; ?>"><button class="btn-danger w-100">Delete</button></a>
                                        <?php } else {
                                        } ?>
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
                                <td></td>
                            </tr>
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
<?php } ?>