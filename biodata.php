<?php
$nama = $_SESSION['id'];
$level = $_SESSION['lv'];

if ($level == 1) {
    $info = 1;
} else if ($level == 2) {
    $info = 2;
} else {
    $info = 3;
}
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
    <div class="col" style="height: 700px;">
        <div class="py-3">
            <!-- <div class="form-check form-switch float-end">
                <input class="form-check-input flex-column-reverse" type="checkbox" id="flexS" onclick="check()">
                <label id="labelk" class="form-check-label text-capitalize fst-italic h6" for="flexS">Tambahkan produk di halaman normal</label>
            </div> -->
        </div>
        <section id="data" class="py-3">
            <div class="list-group-item mb-3 bg-transparent">
                <h2 class="list-inline-item text-primary fw-bold" style="-webkit-text-stroke: 2px rgb(0, 0, 0);">BIODATA</h2>
                <button onclick="tambah()" id="tb" class="btn-primary rounded-2 float-end w-25 p-2 my-1 fw-bold" data-bs-toggle="collapse" data-bs-target="#colTB">OPEN</button>
                <a href="?mi=formbarang"><button id="tb2" class="btn-primary rounded-2 float-end w-25 p-2 my-1 fw-bold" hidden>OPEN</button></a>
            </div>
            <div class="accordion-item bg-transparent">
                <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                    <div class="accordion-body">
                        <?php include "form_biodata.php"; ?>
                    </div>
                </div>
            </div>
        </section>
        <hr class="garis">
        <div class="container py-4 shadow-lg bg-white">
            <?php
            // $row = mysqli_query($conn, "SELECT * From user where id='$nama'");
            $row = mysqli_query($conn, "SELECT u.*,j.mata_pelajaran from user u 
                        LEFT JOIN jadwal j on j.hari=u.hari where u.id='$nama'");

            $row_array = mysqli_fetch_array($row);
            ?>
            <div class="row">
                <div class="col input-group mb-3">
                    <?php if ($info == 1) {
                        $data = "SISWA";
                    } else if ($info == 2) {
                        $data = "PEMBIMBING";
                    } else {
                        $data = "Administrator";
                    }
                    ?>
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">Status</label>
                    <div class="col-4">
                        <input readonly type="text" class="form-control shadow-sm" id="status" name="status" value="<?= $data ?>" placeholder="Nama Lengkap" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3 <?php if ($info != 1) { ?> d-none <?php } ?>">
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">Sekolah Menengah Pertama</label>
                    <div class="col-4">
                        <input type="text" class="form-control shadow-sm" id="nom" name="nom" value="<?= $row_array['tingkat']; ?>" placeholder="Nomor Telepon" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3 <?php if ($info != 2) { ?> d-none <?php } ?>">
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">Mata Pelajaran</label>
                    <div class="col-4">
                        <input readonly type="text" class="form-control shadow-sm" id="nama" name="nama" value="<?= $row_array['mata_pelajaran']; ?>" placeholder="Nama Lengkap" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">Nama Lengkap</label>
                    <div class="col-4">
                        <input type="text" class="form-control shadow-sm text-capitalize" id="nama" name="nama" value="<?= $row_array['nama']; ?>" placeholder="Nama Lengkap" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">Alamat</label>
                    <div class="col-4">
                        <input type="text" class="form-control shadow-sm" id="alamat" name="alamat" value="<?= $row_array['alamat']; ?>" placeholder="Alamat" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">Nomor Telepon</label></label>
                    <div class="col-4">
                        <input type="text" class="form-control shadow-sm" id="nom" name="nom" value="<?= $row_array['nom']; ?>" placeholder="Nomor Telepon" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3 <?php if ($info != 1) { ?> d-none <?php } ?> ">
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">Asal Sekolah</label>
                    <div class="col-4">
                        <input type="text" class="form-control shadow-sm" id="asal" name="asal" value="<?= $row_array['ass']; ?>" placeholder="Asal Sekolah" required>
                    </div>
                </div>
                <div class="col input-group mb-3  <?php if ($info != 2) { ?> d-none <?php } ?> ">
                    <label class="form-label col-form-label fw-bold col-2 text-uppercase">NIP</label>
                    <div class="col-4">
                        <input type="text" class="form-control shadow-sm" id="nip" name="nip" value="<?= $row_array['nip']; ?>" placeholder="NIP" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>