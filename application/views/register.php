<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TU-PINE: Faculty of Engineering</title>
    <link rel="icon" href="<?php echo base_url('/assets/logoWEB.png') ?>" class="favicon">

</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">

                        <a class="navbar-brand mt-2 ms-2 ms-lg-0" href="<?php echo base_url('index') ?>">
                            <img src="<?php echo base_url('/assets/Logo_TU-PINE.png') ?>" height="100" alt="" />
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-secondary ps-4 pe-4" style="color: white;" href="<?php echo base_url('Account/login') ?>">
                                        <b>BACK</b>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </nav>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="width: 100%; padding-right: 15%; padding-left: 15%;margin-right: auto; margin-left: auto;">
            <div class="row">
                <div class="col-12 pt-3">
                    <div class="topic mt-3 mb-3" style="text-align: center">
                        <h2 style="color: #c00832"> <b>REGISTER</b> </h2>
                    </div>
                    <hr style="height: 5px !important; opacity: 1 !important; margin-top: 0 ;background: linear-gradient(45deg, #c00832, #c00832, #c00832, #c00832, #333, #c00832, #c00832, #c00832, #c00832);
         background-size: 400% 400%; animation: gradient 8s ease infinite;">

                    <form method="post">

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label"><b>Email address</b></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mt-4 mb-4">
                            <label for="password" class="form-label"><b>Password</b></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />

                        </div>

                        <div class="form-outline mt-4 mb-4">
                            <label for="c_password" class="form-label"><b>Confirm Password</b></label>
                            <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Confirm Password" />
                        </div>

                        <div class="form-outline mb-4">
                            <label for="title" class="form-label"><b>Title</b></label> <br>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="title" id="Mr." value="Mr." checked>
                                <label class="form-check-label" for="Mr.">Mr.</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="title" id="Miss" value="Miss">
                                <label class="form-check-label" for="Miss">Miss</label>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="firstname" class="form-label"><b>Firstname</b></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
                        </div>

                        <div class="form-outline mb-4">
                            <label for="lastname" class="form-label"><b>Lastname</b></label>
                            <input type="text" class="form-control" id="lastname"  name="lastname" placeholder="Last name" />
                        </div>

                        <div class="form-outline mb-4">
                            <label for="firstnamethai" class="form-label"><b>First name ( for Thai students )
                                    กรุณากรอกเป็นภาษาไทย</b></label>
                            <input type="text" class="form-control" id="firstnamethai" name="firstnamethai" placeholder="First name" />
                        </div>

                        <div class="form-outline mb-4">
                            <label for="lastnamethai" class="form-label"><b>Lastname name ( for Thai students )
                                    กรุณากรอกเป็นภาษาไทย</b></label>
                            <input type="text" class="form-control" id="lastnamethai" name="lastnamethai" placeholder="Last name" />
                        </div>

                        <div class="form-outline mb-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="idType" id="idCard" value="idCard" onclick="showInput('idCard')">
                                <label class="form-check-label" for="idCard">Thai ID card</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="idType" id="idPassport" value="idPassport" onclick="showInput('passport')">
                                <label class="form-check-label" for="idPassport">Passport</label>
                            </div>
                        </div>

                        <div class="form-outline">
                            <label for="idCardInput" class="form-label" id="idCardLabel"><b>Thai ID Card</b></label>
                            <input type="text" class="form-control" maxlength="13" id="idCardInput" name="idCardInput" placeholder="Thai ID card" style="display: none;">
                        </div>

                        <div class="form-outline mt-4 mb-4">
                            <label for="idPassportInput" class="form-label" id="idPassportLabel"><b> ID
                                    Passport</b></label>
                            <input type="text" class="form-control" maxlength="13" id="idPassportInput" placeholder="ID Passport" name="idPassportInput" style="display: none;">
                        </div>
                </div>

                <div class="form-outline mb-4">
                    <label for="birthday" class="form-label"><b>Date of Birth</b></label>
                    <input type="date" class="form-control" id="birthday" name="birthday" />
                </div>

                <div class="form-outline mb-4">
                    <label for="telephonenumber" class="form-label"><b>Telephone number</b></label>
                    <input type="tel" class="form-control" id="telephonenumber" name="telephonenumber" placeholder="xxx-xxx-xxxx" />
                </div>

                <div class="form-outline mb-4">
                    <label for="address" class="form-label"><b>Address</b></label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                </div>

                <div class="form-outline mb-4">
                    <label for="schoolname" class="form-label"><b>School name</b></label>
                    <input type="text" class="form-control" id="schoolname" name="schoolname" placeholder="School name" />
                </div>

                <div class="form-outline mb-4">
                    <label for="grade" class="form-label"><b>Grade Point Average (GPA of 6 semesters)</b></label>
                    <input type="text" class="form-control" id="grade" name="grade" placeholder="Grade point average (GPA)" />
                </div>


                <div class="mb-4" style="display: flex; justify-content: center;">
                    <div class="g-recaptcha" data-sitekey="6LfJ7kgmAAAAABzOusLrafuV3Tb6wM0v8Sl87-gx" data-callback="onSubmit" data-action="submit">Submit</div>
                </div>

                <!-- Submit button -->
                <div style="text-align: center;">
                    <button id="submit" class="btn btn-primary btn-block mb-4 pt-2 pb-2 ps-5 pe-5" style="background-color: #c00832; border: none;">SAVE</button>
                </div>
                </form>
            </div>
        </div>
        </div>


    </section>
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

    <section>
    </section>

    <section>
        <button id="btn-back-to-top" type="button" class="btn btn-danger btn-floating btn-lg" style="position: fixed; bottom: 20px; right: 20px; display: none;">
            <b class="fas fa-arrow-up">↑</b>
        </button>

        <script>
            let mybutton = document.getElementById("btn-back-to-top");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
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
    <div class="modal fade" id="alert_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-style">
                <div class="modal-header modal-header-style" style="background-color: black;">
                </div>
                <div class="modal-body" style="text-align: -webkit-center;">
                    <div class="btn-close-modal">
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <h5 class="alert_modal_response" style="text-align: center;"></h5>
                    <button class="btn" type="button" data-bs-dismiss="modal" aria-label="Close" style="border-radius: 49px !important; width: 30%;height: 40.59px;background: #1A1560;color: white;">ตกลง</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.6.0.js') ?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

<script>
    function showInput(option) {
        if (option === 'idCard') {
            document.getElementById('idCardLabel').style.display = 'block';
            document.getElementById('idCardInput').style.display = 'block';
            document.getElementById('idPassportLabel').style.display = 'none';
            document.getElementById('idPassportInput').style.display = 'none';
            document.getElementById('idPassport').checked = false;
            document.getElementById('idCardInput').value = '';


        } else if (option === 'passport') {
            document.getElementById('idCardLabel').style.display = 'none';
            document.getElementById('idCardInput').style.display = 'none';
            document.getElementById('idPassportLabel').style.display = 'block';
            document.getElementById('idPassportInput').style.display = 'block';
            document.getElementById('idPassportInput').value = '';
            document.getElementById('idCard').checked = false;
        }
    }
    showInput('idCard');

    document.getElementById('idCard').checked = true;
    document.getElementById('idPassport').checked = false;
</script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
</script>

<script>
    $("#submit").click(function(e) {
        e.preventDefault();
        console.log('test')
        var data = {
            "id": null,
            "email": $("#email").val(),
            "password": $("#password").val(),
            "title": $('input[name="title"]:checked').val(),
            "firstname": $("#firstname").val(),
            "lastname": $("#lastname").val(),
            "firstnamethai": $("#firstnamethai").val(),
            "lastnamethai": $("#lastnamethai").val(),
            "idType": $('input[name="idType"]:checked').val(),
            "idCardInput": $("#idCardInput").val(),
            "idPassportInput": $("#idPassportInput").val(),
            "telephonenumber": $("#telephonenumber").val(),
            "address": $("#address").val(),
            "schoolname": $("#schoolname").val(),
            "birthday": $("#birthday").val(),
            "grade": $("#grade").val(),
            "urole": "student",
            "created_at": null,
        }
        console.log(data);

        var send_data = {
            "url": "<?php echo base_url('Account/register') ?>",
            "method": "POST",
            "data": data
        }

        // console.log(response.message);

        $.ajax(send_data).done(function(response) {
            if (response.code == "0x0000-00000") {
                $(".alert_modal_response").text(response.message);
                window.location.href = "<?php echo base_url('Account/login') ?>";
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