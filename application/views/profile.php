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

    <?php $this->load->view('header.php') ?>
    <?php foreach ($user->result_array() as $result) { ?>
        <div class="container mt-5 mb-5">
            <div class="card p-3">
                <div class="card-body">

              
               

                    <h3 class="text-center">แก้ไขข้อมูล</h3>
                    <hr class="mx-auto" width="300">

                    <form id="myform1" name="myform1" method="post" action="../Alumni/Update?id=<?php echo $result['s_id'] ?>" enctype="multipart/form-data" onsubmit="return Repassword()">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                           
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <center> <div class="form-group text-center col-sm-8">
                                        <figure class="figure">
                                            <img src="<?php echo base_url() ?>public/upload/<?php echo $result['fileupload'] ?>" id="imgUpload" style="width:140px;" class="rounded" alt="">
                                            <input type="hidden" name="hdnOldFile" value="<?php echo $result['fileupload']; ?>">
                                        </figure>
                                        <div class="custom-file">
                                            <input type="file" style="display: none;" class="custom-file-input form-control" id="u_picture" name="fileupload" onchange="readURL(this)">
                                            <div class="invalid-feedback">
                                                กรุณาเลือกไฟล์
                                            </div>
                                            <button class="btn btn-sm btn-primary" type="button" id="button" name="button" value="Upload" onclick="thisFileUpload();">กรุณาเลือกไฟล์</button>
                                        </div>
                                    </div></center>
                                </div>
                            </div>
                        </div>


                        <h5><b>ข้อมูลส่วนตัว</b></h5>
                        <div class="row">
                        
                            <div class="col-sm-12">
                       
                                <div class="row">
                                    <div class="form-group col-sm-2">
                                        <label for="">คำนำหน้า</label>
                                        <select class="browser-default custom-select" name="s_title">
                                            <option value="<?php echo $result['s_title'] ?>" selected><?php echo $result['s_title'] ?> </option>
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            กรุณาเลือกคำนำหน้า
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="">เพศ</label>
                                        <select class="browser-default custom-select" name="s_gender">
                                            <option value="<?php echo $result['s_gender'] ?>" selected><?php echo $result['s_gender'] ?> </option>
                                            <option value="ชาย">ชาย</option>
                                            <option value="หญิง">หญิง</option>
                                            <option value="อื่นๆ">อื่นๆ</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            กรุณาเลือกเพศ
                                        </div>
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
                                

                                    <div class="form-group col-sm-4">
                                        <label for="">บ้านเลขที่</label>
                                        <input type="text" class="form-control" name="address1" value="<?php echo $result['address1'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">ตำบล</label>
                                        <input type="text" class="form-control" name="address2" value="<?php echo $result['address2'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">อำเภอเมือง</label>
                                        <input type="text" class="form-control" name="address3" value="<?php echo $result['address3'] ?>" autocomplete="off">
                                       
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">จังหวัด</label>
                                        <input type="text" class="form-control" name="address4" value="<?php echo $result['address4'] ?>" autocomplete="off">
                                       
                                    </div>
                                    <div class="form-group col-sm-4">
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
                                        <select class="browser-default custom-select" name="s_class">
                                            <option value="<?php echo $result['s_class'] ?>" selected><?php echo $result['s_class'] ?> </option>
                                            <option value="61/47">61/47</option>
                                            <option value="61/100">61/100</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group col-sm-5">
                                        <label for="">ปีที่เข้า</label>
                                        <select class="browser-default custom-select" name="s_year">
                                            <option value="<?php echo $result['s_year'] ?>" selected><?php echo $result['s_year'] ?> </option>
                                            <option value="2544">2544</option>
  <option value="2545">2545</option>
  <option value="2546">2546</option>
   <option value="2547">2547</option>
    <option value="2548">2548</option>
    <option value="2549">2549</option>
    <option value="2550">2550</option>
    <option value="2551">2551</option>
    <option value="2552">2552</option>
    <option value="2553">2553</option>
    <option value="2554">2554</option>
    <option value="2555">2555</option>
    <option value="2556">2556</option>
    <option value="2557">2557</option>
    <option value="2558">2558</option>
    <option value="2559">2559</option>
    <option value="2560">2560</option>
    <option value="2561">2561</option>
    <option value="2562">2562</option>
    <option value="2563">2563</option>
    <option value="2564">2564</option>
                                        </select>
                                        
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

                        <div id="table_2" style="display:none"></div>
                        <div id="table_3" style="display:none"></div>

                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <div class="text-center mt-3 mb-1">

                            <div style="display:none" class='alert alert-info alert-dismissable pb-0'>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p id="show"></p>
                            </div>

                            <button type="submit" name="sub" class="btn btn-sm btn-primary">ยืนยัน</button>
                            <button type="button" class="btn btn-sm btn-primary">ยกเลิก</button>
                        </div>
                    </form>

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

    <script src="js/repass.js"></script>

  

    <script>
        function readURL(input) { // ตอนอัพโหลด แสดงให้ขึ้นรูป
            var reader = new FileReader();

            reader.onload = function(e) {
                console.log(e.target.result)
                $('#imgUpload').attr('src', e.target.result).width(140)
            }

            reader.readAsDataURL(input.files[0]);
        }
    </script>

    <script language="javascript">
        function show_content(id) {
            if (id == 1) {
                document.getElementById("table_1").style.display = "";
                document.getElementById("table_2").style.display = "none";
                document.getElementById("table_3").style.display = "none";
            } else if (id == 2 || id == 3) {
                document.getElementById("table_1").style.display = "none";
                document.getElementById("table_2").style.display = "none";
                document.getElementById("table_3").style.display = "none";
            }
        }
    </script>

    <script>
        function thisFileUpload() {
            document.getElementById("u_picture").click();
        };
    </script>

</body>

</html>