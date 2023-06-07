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


    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="col-12">
                <button class="topic"
                    style="background-color: #c00832; padding: 5px 7%;border-radius: 5px 5px 0 0; border: none; color: white;font-size: 1.4rem; ">
                    <b>ประวัติส่วนตัว</b></button>
            </div>

            <div class="col-12">
                <hr
                    style="height: 5px !important; opacity: 1 !important; margin-top: 0 ;background: #c00832; background-size: 100%;">
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h5 class="my-3">
                                <?php echo $users->firstname ?>
                                <?php echo $users->lastname ?></span>
                            </h5>
                            <hr>
                            <p class="text-muted mb-1">
                                <?php echo $users->email ?>
                            </p>
                            <p class="text-muted mb-4">
                                <?php echo $users->telephonenumber ?>
                            </p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-warning">แก้ไขข้อมูล</button>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">ชื่อ - นามสกุล</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php echo $users->firstnamethai ?>
                                        <?php echo $users->lastnamethai ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">อีเมล</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php echo $users->email ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">หมายเลขบัตรประจำตัวประชาชน/หมายเลข Passport</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php if ($users->idType == 'idCard'): ?>
                                            <?php echo $users->idCardInput; ?>
                                        <?php elseif ($users->idType == 'idPassport'): ?>
                                            <?php echo $users->idPassportInput; ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">วัน/เดือน/ปีเกิด</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php $birthday = $users->birthday ?>
                                        <?php echo date("d-m-Y", strtotime($birthday)); ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">ที่อยู่</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php echo $users->address; ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">หมายเลขโทรศัพท์</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php echo $users->telephonenumber; ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">โรงเรียนที่จบการศึกษาชั้นมัธยมศึกษาตอนปลาย</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php echo $users->schoolname; ?>
                                    </p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Grade Point Average (GPA of 6 semesters)</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class="text-muted mb-0">
                                        <?php echo $users->grade; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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