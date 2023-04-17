<?php
$data = $_SESSION['id'];
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 800px;">
    <section id="dashboard" class="text-center">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <?php
            $row = mysqli_query($conn, "SELECT * from user where id='$data'");
            $row_array = mysqli_fetch_array($row);
            ?>
        </div>

        <p class="h1 text-center">
            Mohon Maaf, Anda Dilarang Mengakses Halaman Ini
        </p>
        <p class="h1 text-center">
            Terima Kasih
        </p>
    </section>


</main>