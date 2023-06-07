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
            <div class="col-12 fs-3" style="text-align: center; color: #c00832">
                <p><b>สรุปข้อมูลการสมัครเรียน</b></p>
            </div>

            <div class="col-12">
                <hr
                    style="height:4px !important; opacity: 1 !important; margin-top: 0 ;background: #c00832; background-size: 100%;">
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="topic fs-5"
                        style="background-color: #03AC13; padding: 5px 8%;border-radius: 5px 5px 0 0; border: none; color: white;">
                        <b>ข้อมูลทั่วไป</b></button>
                </div>

                <div class="col-12">
                    <hr
                        style="height: 4px !important; opacity: 1 !important; margin-top: 0 ;background: #03AC13; background-size: 100%;">
                </div>

                <div class="col-lg-12">
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

                    <div class="col-12">
                        <button class="topic fs-5"
                            style="background-color: #03AC13; padding: 5px 8%;border-radius: 5px 5px 0 0; border: none; color: white;">
                            <b>หลักฐานการจบการศึกษาและผลการสอบ</b></button>
                    </div>

                    <div class="col-12">
                        <hr
                            style="height: 4px !important; opacity: 1 !important; margin-top: 0 ;background: #03AC13; background-size: 100%;">
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <form>

                                <div class="row">
                                    <div class="col-sm-5 mt-2">
                                        <label for="cgpa" class="mb-0">ผลการเรียนระดับชั้นมัธยมศึกษาตอนปลาย</label>
                                    </div>
                                    <div class="col-sm-7 mt-2 text-muted">
                                        3.80
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5 mt-2">
                                        <label class="mb-0">ผลการสอบภาษาอังกฤษ</label>
                                    </div>
                                    <div class="col-sm-7 mt-2 text-muted">
                                        TU GET (PBT) : 880
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5 mt-2">
                                        <label for="resulttest" class="mb-0">อัพโหลดผลการทดสอบภาษาอังกฤษ</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <img src="<?php echo base_url('/assets/tuget.jpeg') ?>"
                                            class="rounded float-start" style="width: 50%" alt="idcard">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5 mt-2">
                                        <label for="copyidcard" class="mb-0">อัพโหลดสำเนาเอกสารบัตรประจำตัวประชาชน หรือ
                                            Passport</label>
                                    </div>
                                    <div class="col-sm-7">

                                        <img src="<?php echo base_url('/assets/idcard.jpeg') ?>"
                                            class="rounded float-start" style="width: 50%" alt="idcard">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <label for="photocolor" class="mb-0">อัพโหลดรูปถ่ายสีขนาด 1 นิ้ว (ถ่ายไว้ไม่เกิน
                                            6 เดือน)</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <img src="<?php echo base_url('/assets/photocolor.jpeg') ?>"
                                            class="rounded float-start" style="width: 50%" alt="idcard">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <label for="transcript" class="mb-0">อัพโหลดใบระเบียนผลการศึกษา
                                            (transcipt)</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <img src="<?php echo base_url('/assets/transcript.jpeg') ?>"
                                            class="rounded float-start" style="width: 50%" alt="idcard">
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

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

    </section>

    <section>
        <button id="btn-back-to-top" type="button" class="btn btn-danger btn-floating btn-lg"
            style="position: fixed; bottom: 20px; right: 20px; display: none;">
            <b class="fas fa-arrow-up">↑</b>
        </button>

        <script>
            let mybutton = document.getElementById("btn-back-to-top");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            mybutton.addEventListener("click", backToTop);

            function backToTop() {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
            }
        </script>


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