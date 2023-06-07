<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>TU-PINE: Faculty of Engineering</title>
    <link rel="icon" href="<?php echo base_url('/assets/logoWEB.png') ?>" class="favicon">
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">

                        <a class="navbar-brand mt-2 ms-2 ms-lg-0" href="<?php echo base_url('Account/user') ?>">
                            <img src="<?php echo base_url('/assets/Logo_TU-PINE.png') ?>" height="100" alt="" />
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto ">
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo $users->firstnamethai ?> <?php echo $users->lastnamethai ?>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item mb-2"
                                                href="<?php echo base_url('Account/profile') ?>">ประวัติส่วนตัว</a></li>
                                        <li>
                                        <li><a class="dropdown-item mb-2"
                                                href="<?php echo base_url('Account/course') ?>">หลักสูตร</a></li>
                                        <li><a class="dropdown-item mb-2"
                                                href="<?php echo base_url('Account/enroll') ?>">สมัครเรียน</a></li>
                                        <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url('Account/logout') ?>">ออกจากระบบ</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </div>

                    </div>

                </nav>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="padding-right: 15px; padding-left: 15px; margin-left: auto; margin-rigth: auto;">

            <div class="container-fluid">
                <div class="row justify-content-evenly mt-5 mb-5">
                    <div class="col-md-6 col-md-4 col-lg-3 p-3">
                        <a href="<?php echo base_url('Account/ipen') ?>"><button class="btn">
                                <div class="card" style="width: 18rem; height: 22rem;">
                                    <img src="<?php echo base_url('./assets/I-Pen.jpeg') ?>" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#c00832;"><b>iPen-iEE</b></h5>
                                        <hr>
                                        <p class="card-text">Engineering Program in Industrial Electrical Engineering
                                        </p>
                                    </div>
                                </div>
                            </button></a>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3 p-3">
                        <button class="btn">
                            <div class="card" style="width: 18rem; height: 22rem;">
                                <img src="<?php echo base_url('./assets/EBM.jpeg') ?>" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#c00832;"><b>EBM</b></h5>
                                    <hr>
                                    <p class="card-text">Engineering Program in Civil Engineering and Construction
                                        Management
                                    </p>

                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3 p-3">
                        <button class="btn">
                            <div class="card" style="width: 18rem; height: 22rem;">
                                <img src="<?php echo base_url('./assets/Soft-En.jpg') ?>" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#c00832;"><b>Soft-En</b></h5>
                                    <hr>
                                    <p class="card-text">Engineering Program in Software Engineering</p>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3 p-3">
                        <button class="btn">
                            <div class="card" style="width: 18rem; height: 22rem;">
                                <img src="<?php echo base_url('./assets/V-TECH.jpeg') ?>" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#c00832;"><b>V-TECH</b></h5>
                                    <hr>
                                    <p class="card-text">Automotive Engineering and Industrial Automation</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">

                    <div class="container">

                        <a class="navbar-brand mt-2 ms-2 ms-lg-0" href="#">
                            <img src="<?php echo base_url('/assets/TUlogo.png') ?>" height="50" alt="" />
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto" style="text-align:left;">
                                <li class="nav-item">
                                    <p class=""><b>คณะวิศวกรรมศาสตร์</b> <br> 99 หมู่ 18 ถ.พหลโยธิน ต.คลองหนึ่ง
                                        อ.คลองหลวง จ.ปทุมธานี
                                        12120 <br> Tel. +66 (0) 2564 3001-9</p>
                                </li>
                            </ul>
                        </div>

                    </div>

                </nav>
            </div>
        </div>

    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>