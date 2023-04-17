<?php
$level = $_SESSION['lv'];
$id = $_SESSION['id'];
if ($level == 1) {
    $desc = "SISWA";
} else if ($level == 2) {
    $desc = "PEMBIMBING";
} else {
    $desc = "ADMINISTRATOR";
}
?>
<!-- <body style="background-image: url('./assets/img/kota2.jpg'); background-repeat: repeat; background-size:auto;"> -->

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse bg-transparent">
    <div class="position-sticky pt-5">
        <div class="container">
            <h4><?= $desc; ?></h4>
        </div>
        <?php if ($level == 1) { ?>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == null) {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="./">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "biodata") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=biodata">
                        <span data-feather="layers"></span>
                        Biodata
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data&id=<?= $id ?>&data_id=<?= $id ?>">
                        <span data-feather="bar-chart-2"></span>
                        Data Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "jadwal") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=jadwal&id=<?= $id ?>&data_id=<?= $id ?>">
                        <span data-feather="users"></span>
                        Jadwal Pelajaran
                    </a>
                </li>
            </ul>
        <?php } else if ($level == 2) { ?>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == null) {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="./">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "biodata") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=biodata">
                        <span data-feather="layers"></span>
                        Biodata
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "jadwal") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=jadwal">
                        <span data-feather="users"></span>
                        Jadwal Pelajaran
                    </a>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == null) {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="./">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_user") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_user">
                        <span data-feather="bar-chart-2"></span>
                        Data Member
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "jadwal") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=jadwal">
                        <span data-feather="users"></span>
                        Jadwal Pelajaran
                    </a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>
<!-- </body> -->