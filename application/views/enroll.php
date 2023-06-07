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
                    style="background-color: #c00832; padding: 5px 8%;border-radius: 5px 5px 0 0; border: none; color: white;font-size: 1.4rem; ">
                    <b>สมัครเรียน</b></button>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="col-12">
                        <button class="topic fs-5"
                            style="background-color: gray; padding: 5px 8%;border-radius: 5px 5px 0 0; border: none; color: white;">
                            <b>ข้อมูลส่วนตัว</b></button>
                    </div>

                    <div class="col-12">
                        <hr
                            style="height: 4px !important; opacity: 1 !important; margin-top: 0 ;background: gray; background-size: 100%;">
                    </div>
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
                            style="background-color: gray; padding: 5px 8%;border-radius: 5px 5px 0 0; border: none; color: white;">
                            <b>หลักฐานการจบการศึกษาและผลการสอบ</b></button>
                    </div>

                    <div class="col-12">
                        <hr
                            style="height: 4px !important; opacity: 1 !important; margin-top: 0 ;background: gray; background-size: 100%;">
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <form>

                                <div class="row">
                                    <div class="col-sm-6 mt-2">
                                        <label for="cgpa" class="mb-0">ผลการเรียนระดับชั้นมัธยมศึกษาตอนปลาย</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="cgpa" placeholder="CGPA">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mb-0">ผลการสอบภาษาอังกฤษ</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-outline">
                                            <div class="form-check form-check-inline  mt-2 mb-3">
                                                <input class="form-check-input" type="radio" name="engscore_type"
                                                    id="tuget_p" value="tuget_p" onclick="showInput('tuget_p')">
                                                <label class="form-check-label" for="engscore_type">TU GET(PBT)</label>
                                            </div>
                                            <div class="form-check form-check-inline  mt-2 mb-3">
                                                <input class="form-check-input" type="radio" name="engscore_type"
                                                    id="tuget_c" value="tuget_c" onclick="showInput('tuget_c')">
                                                <label class="form-check-label" for="engscore_type">TU GET(CBT)</label>
                                            </div>
                                            <div class="form-check form-check-inline  mt-2 mb-3">
                                                <input class="form-check-input" type="radio" name="engscore_type"
                                                    id="toefl_p" value="toefl_p" onclick="showInput('toefl_p')">
                                                <label class="form-check-label" for="engscore_type">TOEFL(PBT)</label>
                                            </div>
                                            <div class="form-check form-check-inline mt-2 mb-3">
                                                <input class="form-check-input" type="radio" name="engscore_type"
                                                    id="toefl_i" value="toefl_i" onclick="showInput('toefl_i')">
                                                <label class="form-check-label" for="engscore_type">TOEFL(IBT)</label>
                                            </div>
                                            <div class="form-check form-check-inline mt-2 mb-3">
                                                <input class="form-check-input" type="radio" name="engscore_type"
                                                    id="ielts" value="ielts" onclick="showInput('ielts')">
                                                <label class="form-check-label" for="engscore_type">IELTS</label>
                                            </div>
                                        </div>

                                        <div class="form-outline mt-2">
                                            <label for="engscore" class="form-label" id="tugetLabelP"><b>TU
                                                    GET(PBT)</b></label>
                                            <input type="text" class="form-control" id="tugetInputP" name="engscore"
                                                placeholder="TU GET(PBT)" style="display: none;">
                                        </div>

                                        <div class="form-outline mt-2">
                                            <label for="engscore" class="form-label" id="tugetLabelC"><b>TU
                                                    GET(CBT)</b></label>
                                            <input type="text" class="form-control" id="tugetInputC" name="engscore"
                                                placeholder="TU GET(CBT)" style="display: none;">
                                        </div>

                                        <div class="form-outline mt-2">
                                            <label for="engscore" class="form-label"
                                                id="toeflLabelP"><b>TOEFL(PBT)</b></label>
                                            <input type="text" class="form-control" id="toeflInputP" name="engscore"
                                                placeholder="TOEFL(PBT)" style="display: none;">
                                        </div>

                                        <div class="form-outline mt-2">
                                            <label for="engscore" class="form-label"
                                                id="toeflLabelI"><b>TOEFL(IBT)</b></label>
                                            <input type="text" class="form-control" id="toeflInputI" name="engscore"
                                                placeholder="TOEFL(IBT)" style="display: none;">
                                        </div>

                                        <div class="form-outline mt-2 mb-2">
                                            <label for="engscore" class="form-label"
                                                id="ieltsLabel"><b>IELTS</b></label>
                                            <input type="text" class="form-control" id="ieltsInput" name="engscore"
                                                placeholder="IELTS" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6 mt-2">
                                        <label for="resulttest" class="mb-0">อัพโหลดผลการทดสอบภาษาอังกฤษ</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" id="resulttest" multiple>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="copyidcard" class="mb-0">อัพโหลดสำเนาเอกสารบัตรประจำตัวประชาชน หรือ
                                            Passport</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">
                                            <input class="form-control" type="file" id="copyidcard" multiple>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="photocolor" class="mb-0">อัพโหลดรูปถ่ายสีขนาด 1 นิ้ว (ถ่ายไว้ไม่เกิน
                                            6 เดือน)</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">
                                            <input class="form-control" type="file" id="photocolor" multiple>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="transcript" class="mb-0">อัพโหลดใบระเบียนผลการศึกษา
                                            (transcipt)</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">
                                            <input class="form-control" type="file" id="transcript" multiple>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" id="submit"
                            class="btn btn-primary btn-block mb-4 pt-2 pb-2 ps-5 pe-5">สมัครเรียน</button>

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

    <div class="modal fade" id="alert_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-style">
                <div class="modal-header modal-header-style" style="background-color: black;">
                </div>
                <div class="modal-body" style="text-align: -webkit-center;">
                    <div class="btn-close-modal">
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <h5 class="alert_modal_response" style="text-align: center;"></h5>
                    <button class="btn" type="button" data-bs-dismiss="modal" aria-label="Close"
                        style="border-radius: 49px !important; width: 30%;height: 40.59px;background: #1A1560;color: white;">ตกลง</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.6.0.js') ?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        function showInput(option) {
            if (option === 'tuget_p') {
                document.getElementById('tugetLabelP').style.display = 'block';
                document.getElementById('tugetInputP').style.display = 'block';
                document.getElementById('tugetLabelC').style.display = 'none';
                document.getElementById('tugetInputC').style.display = 'none';
                document.getElementById('toeflLabelP').style.display = 'none';
                document.getElementById('toeflInputP').style.display = 'none';
                document.getElementById('toeflLabelI').style.display = 'none';
                document.getElementById('toeflInputI').style.display = 'none';
                document.getElementById('ieltsLabel').style.display = 'none';
                document.getElementById('ieltsInput').style.display = 'none';
                document.getElementById('tugetInputP').value = '';
            } else if (option === 'tuget_c') {
                document.getElementById('tugetLabelP').style.display = 'none';
                document.getElementById('tugetInputP').style.display = 'none';
                document.getElementById('tugetLabelC').style.display = 'block';
                document.getElementById('tugetInputC').style.display = 'block';
                document.getElementById('toeflLabelP').style.display = 'none';
                document.getElementById('toeflInputP').style.display = 'none';
                document.getElementById('toeflLabelI').style.display = 'none';
                document.getElementById('toeflInputI').style.display = 'none';
                document.getElementById('ieltsLabel').style.display = 'none';
                document.getElementById('ieltsInput').style.display = 'none';
                document.getElementById('tugetInputC').value = '';
            } else if (option === 'toefl_p') {
                document.getElementById('tugetLabelP').style.display = 'none';
                document.getElementById('tugetInputP').style.display = 'none';
                document.getElementById('tugetLabelC').style.display = 'none';
                document.getElementById('tugetInputC').style.display = 'none';
                document.getElementById('toeflLabelP').style.display = 'block';
                document.getElementById('toeflInputP').style.display = 'block';
                document.getElementById('toeflLabelI').style.display = 'none';
                document.getElementById('toeflInputI').style.display = 'none';
                document.getElementById('ieltsLabel').style.display = 'none';
                document.getElementById('ieltsInput').style.display = 'none';
                document.getElementById('toeflInputP').value = '';
            } else if (option === 'toefl_i') {
                document.getElementById('tugetLabelP').style.display = 'none';
                document.getElementById('tugetInputP').style.display = 'none';
                document.getElementById('tugetLabelC').style.display = 'none';
                document.getElementById('tugetInputC').style.display = 'none';
                document.getElementById('toeflLabelP').style.display = 'none';
                document.getElementById('toeflInputP').style.display = 'none';
                document.getElementById('toeflLabelI').style.display = 'block';
                document.getElementById('toeflInputI').style.display = 'block';
                document.getElementById('ieltsLabel').style.display = 'none';
                document.getElementById('ieltsInput').style.display = 'none';
                document.getElementById('toeflInputI').value = '';
            } else if (option === 'ielts') {
                document.getElementById('tugetLabelP').style.display = 'none';
                document.getElementById('tugetInputP').style.display = 'none';
                document.getElementById('tugetLabelC').style.display = 'none';
                document.getElementById('tugetInputC').style.display = 'none';
                document.getElementById('toeflLabelP').style.display = 'none';
                document.getElementById('toeflInputP').style.display = 'none';
                document.getElementById('toeflLabelI').style.display = 'none';
                document.getElementById('toeflInputI').style.display = 'none';
                document.getElementById('ieltsLabel').style.display = 'block';
                document.getElementById('ieltsInput').style.display = 'block';
                document.getElementById('ieltsInput').value = '';
            };

        };

        showInput('tuget_p');
        document.getElementById('tuget_p').checked = true;
        document.getElementById('tuget_c').checked = false;
        document.getElementById('toefl_p').checked = false;
        document.getElementById('toefl_i').checked = false;
        document.getElementById('ielts').checked = false;
    </script>


    <script>

        $("#submit").click(function (e) {
            e.preventDefault();


            var formData = new FormData();

            formData.append("cgpa", $("#cgpa").val());
            formData.append("engscore_type", $('input[name="engscore_type"]:checked').attr('id'));

            if ($('#tugetInputP').val() != '') {
                formData.append("engscore", $('#tugetInputP').val());
            } else if ($('#tugetInputC').val() != '') {
                formData.append("engscore", $('#tugetInputC').val());
            } else if ($('#toeflInputP').val() != '') {
                formData.append("engscore", $('#toeflInputP').val());
            } else if ($('#toeflInputI').val() != '') {
                formData.append("engscore", $('#toeflInputI').val());
            } else if ($('#ieltsInput').val() != '') {
                formData.append("engscore", $('#ieltsInput').val());
            }


            var picture_resulttest_files = $("#resulttest")[0].files;
            var picture_copyidcard_files = $("#copyidcard")[0].files;
            var picture_photocolor_files = $("#photocolor")[0].files;
            var picture_transcript_files = $("#transcript")[0].files;
            console.log(picture_resulttest_files);

            if (picture_resulttest_files.length > 0) {
                for (var i = 0; i < picture_resulttest_files.length; i++) {
                    formData.append("resulttest", picture_resulttest_files[0]);
                }
            }

            if (picture_copyidcard_files.length > 0) {
                for (var i = 0; i < picture_copyidcard_files.length; i++) {
                    formData.append("copyidcard", picture_copyidcard_files[0]);
                }
            }

            if (picture_photocolor_files.length > 0) {
                for (var i = 0; i < picture_photocolor_files.length; i++) {
                    formData.append("photocolor", picture_photocolor_files[0]);
                }
            }

            if (picture_transcript_files.length > 0) {
                for (var i = 0; i < picture_transcript_files.length; i++) {
                    formData.append("transcript", picture_transcript_files[0]);
                }
            }


            var send_data = {
                "url": "<?php echo base_url('Account/enroll') ?>",
                "method": "POST",
                "data": formData,
                "contentType": false,
                "processData": false

            }
            //console.log(send_data);

            $.ajax(send_data).done(function (response) {
                //console.log(response);
                if (response.code == "0x0000-00000") {
                    $(".alert_modal_response").text(response.message);
                    window.location.href = "<?php echo base_url('Account/enroll_show') ?>";
                } else if (response.code == "1x0000-00000") {
                    $(".alert_modal_response").text(response.message);
                } else if (response.code == "2x0000-00002") {
                    $(".alert_modal_response").text(response.message);
                }
                $('#alert_modal').modal('show');


            });
            return false;
        });
    </script>



</body>

</html>