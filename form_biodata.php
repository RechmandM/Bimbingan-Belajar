<?php
$level = $_SESSION['lv'];
$idku = $_SESSION['id'];
?>
        <main class="col">
            <div class="text-center">
                <!-- <img style="margin-top: -70px; margin-bottom: -40px;" class="mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300"> -->
                <!-- <h2 class="text-uppercase">New Produk</h2> -->
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    $data = mysqli_query($conn, "SELECT * from user where id='$idku'");
                    while ($row_data = mysqli_fetch_array($data)) {
                    ?>
                        <form method="post" class="needs-validation" novalidate style="font-size: larger;">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- <div class="input-group mb-4"> -->
                                    <label for="namal" class="form-label col-form-label fw-bold">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $row_data['nama']; ?>" placeholder="Nama Lengkp" required>
                                    <div class="invalid-feedback">
                                        Please enter your Name.
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-4">
                                    <!-- <div class="input-group mb-4 col-md-6"> -->
                                    <label for="alamat" class="form-label col-form-label fw-bold">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row_data['alamat']; ?>" placeholder="Alamat" required>
                                    <div class="invalid-feedback">
                                        Please enter your address.
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-4">
                                    <!-- <div class="input-group mb-4"> -->
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Nomer Telepon</label>
                                    <input type="number" class="form-control" id="nomor" name="nomor" value="<?= $row_data['nom']; ?>" placeholder="Nomor Telepon" required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <div class="row">
                                <div <?php if ($level == 2) {
                                            echo "hidden";
                                        } ?> class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="asal" name="asal" value="<?= $row_data['ass']; ?>" placeholder="Asal Sekolah" required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div <?php if ($level == 1) {
                                            echo "hidden";
                                        } ?> class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">NIP</label>
                                    <input type="number" class="form-control" id="nip" name="nip" value="<?= $row_data['nip']; ?>" placeholder="NIP" required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div <?php if ($level == 2) {
                                            echo "hidden";
                                        } ?> class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Sekolah Menengah Pertama</label>
                                    <input type="text" class="form-control" id="tingkat" name="tingkat" value="<?= $row_data['tingkat']; ?>" placeholder="Tingkat" required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold" name="submit" type="submit">Simpan</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </main>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $asal = $_POST['asal'];
    $nip = $_POST['nip'];
    $ting = $_POST['tingkat'];
    mysqli_query($conn, "UPDATE user set nama='$nama',alamat='$alamat',nom='$nomor',ass='$asal',nip='$nip',tingkat='$ting' where id='$idku'");
    usleep(500000);
    echo "<script>window.location = '?mi=biodata'</script>";
    // echo "<script>window.location.reload(</script>";
    // echo "<script>history.back(1);</script>";
}
?>