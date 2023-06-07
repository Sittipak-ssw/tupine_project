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

                        <a class="navbar-brand mt-2 ms-2 ms-lg-0" href="<?php echo base_url('index') ?>">
                            <img src="<?php echo base_url('/assets/Logo_TU-PINE.png') ?>" height="100" alt="" />
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-secondary ps-4 pe-4" style="color: white;"
                                        href="<?php echo base_url('index') ?>">
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
        <div class="container"
            style="width: 100%; padding-right: 30%; padding-left: 30%;margin-right: auto; margin-left: auto;">
            <div class="row">


                <div class="col-12 pt-3">
                    <div class="topic mt-5 mb-5" style="text-align: center">
                        <h2 style="color: #c00832"><b>LOGIN</b></h2>
                    </div>
                    <hr style="height: 3px !important; opacity: 1 !important; margin-top: 0 ;background: linear-gradient(45deg, #c00832, #c00832, #c00832, #c00832, #333, #c00832, #c00832, #c00832, #c00832);
         background-size: 400% 400%; animation: gradient 8s ease infinite;">
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mt-4 mb-4">
                            <label for="email" class="form-label fs-5" style="color: #c00832"><b>Email
                                    address</b></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email address" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mt-4 mb-4">
                            <label for="password" class="form-label fs-5" style="color: #c00832"><b>Password</b></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" />

                        </div>

                        <!-- Submit button -->
                        <div style="text-align: center;">
                            <button id="submit" type="button" class="btn btn-primary btn-block mb-4 pt-2 pb-2 ps-5 pe-5"
                                style="background-color: #c00832; border: none;" name="login">LOGIN</button>
                        </div>

                        <!-- Register buttons -->
                        <div class="text-center mb-5">
                            <p>Not a Account? <a href="<?php echo base_url('Account/register') ?>">Register</a></p>

                        </div>
                    </form>
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

    <div class="modal fade" id="alert_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-style">
                <div class="modal-header modal-header-style" style="background-color: #c00832;">
                </div>
                <div class="modal-body" style="text-align: -webkit-center;">
                    <div class="btn-close-modal">
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <h5 class="alert_modal_response" style="text-align: center;"></h5>
                    <button class="btn" type="button" data-bs-dismiss="modal" aria-label="Close"
                        style="border-radius: 49px !important; width: 20%;height: 40.59px;background: #c00832;color: white; margin-top: 5%;">ตกลง</button>
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
        $("#submit").click(function (e) {
            e.preventDefault();
            console.log('test')
            var data = {
                "email": $("#email").val(),
                "password": $("#password").val(),
            }
            console.log(data);

            var send_data = {
                "url": "<?php echo base_url('Account/login') ?>",
                "method": "POST",
                "data": data
            }

            // console.log(response.message);

            $.ajax(send_data).done(function (response) {
                if (response.code == "0x0000-00000") {
                    $(".alert_modal_response").text(response.message);
                    window.location.href = "<?php echo base_url('Account/user') ?>";
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