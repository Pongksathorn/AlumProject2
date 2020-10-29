<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบลงทะเบียนศิษย์เก่า</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/title-npru.png" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300i&display=swap">

    <link rel="stylesheet" href="style.css">
</head>



<body>


    <?php include('header.php') ?>

  <div class="container">

        <!-- Default form login -->
        <form class="text-center mx-auto border border-light p-5 mt-5 mb-5 col-sm-6" id="form" method="POST" action="../Alumni/formlogin" novalidate>


            <h5 class="display-3 black-text" id="title">ล็อคอิน</h5>

            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
            <?php
            }
            ?>
            <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            
            <input type="email" id="defaultLoginFormEmail" name="s_email" id="s_email" class="form-control mb-4" autocomplete="off" placeholder="E-mail">
            <div class="invalid-feedback">
                
            </div>
            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" name="s_password" id="s_password" class="form-control mb-4" autocomplete="off" placeholder="Password">
            <div class="invalid-feedback">
                
            </div>
            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    </div>
                </div>
               
            </div>

            <!-- Sign in button -->
            <button class="btn btn-success btn-lg active" name="but" type="submit">เข้าสู่ระบบ</button>
<br>
            <!-- Register -->
         

        </form>
        <!-- Default form login -->
    </div>

    <script type="text/javascript">
        $(function() {
            $("#form").on("submit", function() {
                var form = $(this)[0];
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

</body>


</html>