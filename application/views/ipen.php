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
        <div class="container">
            <div class="row justify-content-center">
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
                            <ul class="navbar-nav ms-auto">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo $users->firstnamethai ?> <?php echo $users->lastnamethai ?>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item mb-2"
                                                href="<?php echo base_url('Account/profile') ?>">ประวัติส่วนตัว</a></li>
                                        <li><a class="dropdown-item mb-2"
                                                href="<?php echo base_url('Account/course') ?>">หลักสูตร</a></li>
                                        <li><a class="dropdown-item mb-2"
                                                href="<?php echo base_url('Account/enroll') ?>">สมัครเรียน</a></li>
                                        <hr class="dropdown-divider">
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">


                    <div class="card">
                        <div class="bg-image">
                            <img src="<?php echo base_url('./assets/I-Pen.jpeg') ?>" class="w-100"
                                alt="Card image">
                            <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <p class="text-white mb-0">Can you see me?</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="aaccordion accordion-flush w-100" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <b>ข้อมูลทั่วไป</b>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>หลักสูตรวิศวกรรมศาสตรบัณฑิต
                                                สาขาวิชาวิศวกรรมไฟฟ้าและการจัดการอุตสาหกรรม (iPEN) </strong><br>
                                            &nbsp; - จุดเด่นมุ่งเน้นในการพัฒนาบุคลากรด้านวิศวกรรมไฟฟ้าแบบบูรณาการ
                                            ร่วมกับองค์ความรู้ในด้านวิศวกรรมอุตสาหการควบคู่กัน<br>
                                            &nbsp; - เนื้อหาโดยรวม
                                            เนื้อหาหลักสูตรจะมุ่งเน้นให้นักศึกษาได้เรียนรู้และเข้าใจในระบบไฟฟ้า
                                            ระบบอิเล็กทรอนิกส์ กระบวนการและระบบควบคุมในโรงงานอุตสาหกรรม
                                            และมีความเข้าใจถึงระบบการผลิต
                                            การปรับปรุงประสิทธิภาพและการบริหารจัดการอุตสาหกรรมเข้าด้วยกัน
                                            เพื่อแก้ปัญหาทางด้านอุตสาหกรรมได้อย่างเหมาะสม <br>
                                            &nbsp; - ลักษณะพิเศษที่มุ่งพัฒนาให้มีขึ้นในตัวของนักศึกษา
                                            มุ่งพัฒนาบัณฑิตให้มีความรู้ความชำนาญด้านวิศวกรรมไฟฟ้าและมีทักษะด้านการจัดการทางอุตสาหกรรม
                                            เพื่อตอบสนองความต้องการของกลุ่มโรงงานอุตสาหกรรม
                                            และพัฒนาศักยภาพบัณฑิตผ่านการดูงานและบรรยายพิเศษ
                                            เพื่อเป็นบัณฑิตที่มีคุณภาพและคุณธรรม <br>
                                            &nbsp; - อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา <br>
                                            &nbsp; &nbsp; &nbsp; - วิศวกรไฟฟ้าหรือวิศวกรอุตสาหการ<br>
                                            &nbsp; &nbsp; &nbsp; - นักวิจัย นักวิชาการ<br>
                                            &nbsp; &nbsp; &nbsp; -
                                            หรือผู้เชี่ยวชาญทางด้านวิศวกรรมไฟฟ้าและวิศวกรรมอุตสาหการ<br>
                                            &nbsp; &nbsp; &nbsp; - ผู้จัดการโครงการ<br>
                                            &nbsp; &nbsp; &nbsp; -
                                            ประกอบธุรกิจส่วนตัวที่เกี่ยวข้องกับสาขาทางด้านวิศวกรรมไฟฟ้าและวิศวกรรมอุตสาหการ<br>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden
                                            by
                                            default,
                                            until the collapse plugin adds the appropriate classes that we use to
                                            style each
                                            element. These classes control the overall appearance, as well as the
                                            showing
                                            and
                                            hiding
                                            via CSS transitions. You can modify any of this with custom CSS or
                                            overriding
                                            our
                                            default variables. It's also worth noting that just about any HTML can
                                            go within
                                            the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden
                                            by
                                            default,
                                            until
                                            the collapse plugin adds the appropriate classes that we use to style
                                            each
                                            element.
                                            These classes control the overall appearance, as well as the showing and
                                            hiding
                                            via
                                            CSS
                                            transitions. You can modify any of this with custom CSS or overriding
                                            our
                                            default
                                            variables. It's also worth noting that just about any HTML can go within
                                            the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
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