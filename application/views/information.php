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

    <?php $this->load->view('header') ?>
    <?php
    foreach ($user->result_array() as $result) {
    ?>

    
<div class="container mt-5 mb-5">
            <div class="card p-3">
                <div class="card-body">
<h5><b>ข้อมูลส่วนตัว</b></h5>
<div class="form-group text-center">
                        <img src="<?php echo base_url() ?>public/upload/<?php echo $result['fileupload'] ?>" width="250" alt="">
                    </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    
   <div class="form-group col-sm-2">
                                        <label for="">เพศ</label>
                                        <input type="text" class="form-control" name="s_fname" value="<?php echo $result['s_gender'] ?>" autocomplete="off">
                                       
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="">ชื่อ</label>
                                        <input type="text" class="form-control" name="s_fname" value="<?php echo $result['s_fname'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">นามสกุล</label>
                                        <input type="text" class="form-control" name="s_lname" value="<?php echo $result['s_lname'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">ชื่อเล่น</label>
                                        <input type="text" class="form-control" name="s_nickname" value="<?php echo $result['s_nickname'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">วันเดือนปีเกิด</label>
                                        <input type="date" class="form-control" name="s_bday" value="<?php echo $result['s_bday'] ?>" autocomplete="off">
                                       
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="">เบอร์โทรศัพท์</label>
                                        <input type="text" class="form-control" name="s_phone" value="<?php echo $result['s_phone'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">Facebook</label>
                                        <input type="text" class="form-control" name="s_facebook" value="<?php echo $result['s_facebook'] ?>" autocomplete="off">
                                       
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="s_email" value="<?php echo $result['s_email'] ?>" autocomplete="off">
                                       
                                    </div>   </div>
                                    <br>
                                   
                                    <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
               
               
               
                                &nbsp;&nbsp;&nbsp;&nbsp;  <h5><b>ข้อมูลที่อยู่</b></h5>

                            <div class="col-sm-12">
                                <div class="row">
                                

                                    <div class="form-group col-sm-5">
                                        <label for="">บ้านเลขที่</label>
                                        <input type="text" class="form-control" name="address1" value="<?php echo $result['address1'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-5">
                                        <label for="">ตำบล</label>
                                        <input type="text" class="form-control" name="address2" value="<?php echo $result['address2'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-5">
                                        <label for="">อำเภอเมือง</label>
                                        <input type="text" class="form-control" name="address3" value="<?php echo $result['address3'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-5">
                                        <label for="">จังหวัด</label>
                                        <input type="text" class="form-control" name="address4" value="<?php echo $result['address4'] ?>" autocomplete="off">
                                       
                                    </div>
                                    <div class="form-group col-sm-5">
                                        <label for="">รหัสไปรษณีย์</label>
                                        <input type="text" class="form-control" name="address5" value="<?php echo $result['address5'] ?>" autocomplete="off">
                                       
                                    </div>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;  <h5><b>ข้อมูลที่ทำงาน-นักศึกษา</b></h5>
          <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
<div class="col-sm-12">
    <div class="row">
    
    <div class="form-group col-sm-5">
            <label for="">หมู่เรียน</label>
            <input type="text" class="form-control" name="s_generation" value="<?php echo $result['s_class'] ?>" autocomplete="off">
           
        </div> <div class="form-group col-sm-5">
            <label for="">ปีการศึกษาที่เข้า</label>
            <input type="text" class="form-control" name="s_generation" value="<?php echo $result['s_year'] ?>" autocomplete="off">
           
        </div>
        <div class="form-group col-sm-5">
            <label for="">รหัสนักศึกษา</label>
            <input type="text" class="form-control" name="s_generation" value="<?php echo $result['s_generation'] ?>" autocomplete="off">
           
        </div>

        <div class="form-group col-sm-5">
            <label for="">ที่อยู่ทำงาน</label>
            <input type="text" class="form-control" name="s_address" value="<?php echo $result['s_address'] ?>" autocomplete="off">
           
        </div>

        <div class="form-group col-sm-5">
            <label for="">ตำเเหน่ง</label>
            <input type="text" class="form-control" name="s_position" value="<?php echo $result['s_position'] ?>" autocomplete="off">
           
        </div>

        
           
        </div>
        </div>



                </div>

            </div>
        </div>
    </div>
    <?php } ?>


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