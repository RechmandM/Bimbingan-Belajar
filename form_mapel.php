<main class="col">
    <div class="text-center">
        <!-- <img style="margin-top: -70px; margin-bottom: -40px;" class="mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300"> -->
        <!-- <h2 class="text-uppercase">New Produk</h2> -->
    </div>
    <div class="row">
        <?php
        //   $id = $_GET['id'];
        $data = mysqli_query($conn, "SELECT * from mapel_data where mapel_id='$id'");
        $row = mysqli_fetch_array($data); // iseng pakai if
        if ($row['p1'] == null || $row['p2'] == null || $row['p3'] == null || $row['p4'] == null || $row['p5'] == null || $row['p6'] == null) {
            $cek = 1;
            // echo "Kosong";
        } else {
            $cek = 0;
            // echo "Tersedia";
        }
        ?>
        <div <?php if ($cek == 1) {
                    echo "hidden";
                } ?> class="col">
            <?php
            // $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * from mapel_data where mapel_id='$id'");
            while ($row = mysqli_fetch_array($data)) {
            ?>
                <form method="post" class="needs-validation" novalidate style="font-size: larger;">
                    <div class="row">
                        <label for="namal" class="form-label col-form-label fw-bold text-center text-uppercase">Pilih Mata Pelajaran</label>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" name="p1" type="checkbox" value="1" id="p1" <?php if ($row['p1'] == 1) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                <label class="form-check-label fw-bold" for="p1">
                                    Bahasa Indonesia
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" name="p2" type="checkbox" value="1" id="p2" <?php if ($row['p2'] == 1) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                <label class="form-check-label fw-bold" for="p2">
                                    Bahasa Inggris
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" name="p3" type="checkbox" value="1" id="p3" <?php if ($row['p3'] == 1) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                <label class="form-check-label fw-bold" for="p3">
                                    Matematika
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="p4" type="checkbox" value="1" id="p4" <?php if ($row['p4'] == 1) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                <label class="form-check-label fw-bold" for="p4">
                                    Pelajaran IPA
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" name="p5" type="checkbox" value="1" id="p5" <?php if ($row['p5'] == 1) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                <label class="form-check-label fw-bold" for="p5">
                                    Pelajaran IPS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="p6" type="checkbox" value="1" id="p6" <?php if ($row['p6'] == 1) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                <label class="form-check-label fw-bold" for="p6">
                                    Komputer
                                </label>
                            </div>
                        </div>
                        <hr class="my-4">

                        <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold" name="submit2" type="submit">UPDATE</button>
                    </div>
                </form>
            <?php } ?>
        </div>
        <div <?php if ($cek == 0) {
                    echo "hidden";
                } ?> class="col">
            <form method="post" class="needs-validation" novalidate style="font-size: larger;">
                <div class="row">
                    <label for="namal" class="form-label col-form-label fw-bold text-uppercase">Pilih Mata Peajaran</label>

                    <div class="col-md-4">
                        <!-- <input type="text" readonly class="form-control" id="kd_barang" name="fr_kd_barang" placeholder="Kode Barang Terisi Otomatis.." value="" required> -->
                        <div class="invalid-feedback">
                            Please enter your Name.
                        </div>
                        <!-- </div> -->
                        <div class="form-check">
                            <input class="form-check-input" name="p1" type="checkbox" value="1" id="p1" <?php if ($row['p1'] == 1) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label class="form-check-label fw-bold" for="p1">
                                Bahasa Indonesia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="p2" type="checkbox" value="1" id="p2" <?php if ($row['p2'] == 1) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label class="form-check-label fw-bold" for="p2">
                                Bahasa Inggris
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" name="p3" type="checkbox" value="1" id="p3" <?php if ($row['p3'] == 1) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label class="form-check-label fw-bold" for="p3">
                                Matematika
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="p4" type="checkbox" value="1" id="p4" <?php if ($row['p4'] == 1) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label class="form-check-label fw-bold" for="p4">
                                Pelajaran IPA
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" name="p5" type="checkbox" value="1" id="p5" <?php if ($row['p5'] == 1) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label class="form-check-label fw-bold" for="p5">
                                Pelajaran IPS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="p6" type="checkbox" value="1" id="p6" <?php if ($row['p6'] == 1) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <label class="form-check-label fw-bold" for="p6">
                                Pelajaran Komputer
                            </label>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <?php
                //   $id = $_GET['id'];
                $data = mysqli_query($conn, "SELECT * from mapel_data where mapel_id='$id'");
                $row = mysqli_fetch_array($data); // iseng pakai if
                if ($row['p1'] == null || $row['p2'] == null || $row['p3'] == null || $row['p4'] == null || $row['p5'] == null || $row['p6'] == null) {
                    $cek = 1;
                    // echo "Kosong";
                } else {
                    $cek = 0;
                    // echo "Tersedia";
                }
                ?>
                <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold" name="submit" type="submit">SIMPAN</button>
            </form>
        </div>
    </div>
</main>
<?php
if (isset($_POST['submit'])) {
    // $kd_barang = $_POST['kd_barang']; no pakai
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];
    mysqli_query($conn, "INSERT into mapel_data (mapel_id,p1,p2,p3,p4,p5,p6)
    values('$id','$p1','$p2','$p3','$p4','$p5','$p6')");
    usleep(500000);
    // echo "<script>window.location = '?mi=data'</script>";
    // echo "<script>window.location.reload(</script>";
    echo "<script>history.back(0);</script>";
}
if (isset($_POST['submit2'])) {
    // $kd_barang = $_POST['kd_barang']; no pakai
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];
    mysqli_query($conn, "UPDATE mapel_data set p1= '$p1',p2='$p2',p3= '$p3',p4= '$p4',p5= '$p5',p6= '$p6' where mapel_id= '$id'");
    usleep(500000);
    echo "<script>history.back(0);</script>";
    // echo "<script>window.location = '?mi=data'</script>";
    // echo "<script>window.location.reload(</script>";
    // echo "<script>history.back(0);</script>";
}
?>