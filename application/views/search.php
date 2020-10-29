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

    <div class="container mt-5 mb-5">
        <div class="card p-3">
            <div class="card-body">


            <div class="container">
<center><h3> ค้นหารายชื่อ  </h3></center>
<br>
  <table class="table">
  <thead class="thead-dark">
  <tr>
		<th >
			<div class="event_location"  align="center">รหัสนักศึกษา</div>
            </th>
            <th >
				<div class="event_location" align="center">หมู่เรียน</div>
			</th>
			<th 
			<th >
				<div class="event_location" align="">ชื่อ-นามสกุล</div>
			</th>
            <th >
				<div class="event_location" align="center">ปีการศึกษาที่เข้า</div>
			</th>
			<th >
			<div class="event_location" align="center">จังหวัด</div>
			</th>

			
      <th width="150">
	  <div class="event_location"  align="center">รายละเอียด</div>
			</th>
</tr>

                <?php if (!isset($_SESSION['s_id'])) { ?>
                    <div class='alert alert-info alert alert-danger pb-0'>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p id="show">กรุณาเข้าสู่ระบบเพื่อดูรายละเอียดเพิ่มเติมของศิษย์เก่า</p>
                    </div>
                <?php } else { ?>
                    <center><form name="searchform" id="searchform" method="POST" action="../Alumni/search" class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
                        <input name="searchalumni" id="searchalumni" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="ค้นหารายชื่อศิษย์เก่า เช่น ชื่อ-นามสกุล / รหัสนักศึกษา / ปีการศึกษาที่เข้า / หมู่เรียน / จังหวัด" aria-label="Search">
                        <button type="button" style="display: none;" class="btn btn-primary" id="btnSearch">
                            <span class="glyphicon glyphicon-search"></span>
                            ค้นหา
                        </button>
                    </form></center>
                <?php } ?>
<br>
                <div class="loading"></div>

                <div id="list-default">
                    <?php
                    $result = $user->num_rows();
                    if ($result == 0) {
                    ?>
                        <div class="text-center">
                            <h2>ไม่มีรายชื่อศิษย์เก่านี้</h2>
                        </div>
                        <?php
                    } else {
                        foreach ($user->result_array() as $result) {
                        ?>
                           
                           <tr>
    <tr>
    <td><div class="event_location" align="center"><?php echo $result["s_generation"]; ?></td>
    <td><div class="event_location"  align="center"><?php echo $result["s_class"]; ?></div></td>

    <td><div class="event_location"  align=""><?php echo $result["s_fname"]; ?>  <?php echo $result["s_lname"]; ?></td>
    <td><div class="event_location"  align="center"><?php echo $result["s_year"]; ?></div></td>

				<td><div class="event_location"  align="center"><?php echo $result["address4"]; ?></div></td>

        <td>
        <?php if (isset($_SESSION['s_id'])) { ?>
                                    <a class="btn btn-sm btn-primary" role="submit" href="information?id=<?php echo $result['s_id'] ?>">ดูรายละเอียด</a>
                                <?php } else { ?>
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อดูรายละเอียดเพิ่มเติม">
                                        <button class="btn btn-sm btn-primary" style="pointer-events: none;" type="button" disabled>ดูรายละเอียด</button>
                                    </span>
    
           </tr>  <?php } ?>
                            </div>

                    <?php } ?>
                </div>
                <?php } ?>
                </div>

                <div id="list-data">

                </div>

            </div>

        </div>
    </div>
    </div>

    </div>

</div>

</div>
</div>
</div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

    <script>
        // $(document).ready(function() {
        //     $("#btnSearch").click(function() {
        //         $("#list-default").hide();
        //     });
        // });

        // $(function() {
        //     $("#btnSearch").click(function() {
        //         let u_std = $("#u_std").val();
        //         $.ajax({
        //             url: "<?php base_url() ?>index.php/Alumni/search",
        //             type: "post",
        //             data: {
        //                 u_std: u_std
        //             },
        //             beforeSend: function() {
        //                 $(".loading").show();
        //             },
        //             complete: function() {
        //                 $(".loading").hide();
        //             },
        //             success: function(response) {
        //                 // document.write(response)
        //                 // $("#list-data").html(response);
        //                 var len = response.length;
        //                 $('#suname,#sname,#semail').text('');
        //                 if (len > 0) {
        //                     // Read values
        //                     var uname = response[0].u_std;
        //                     var name = response[0].u_fname;
        //                     var email = response[0].u_email;

        //                     $('#suname').text(uname);
        //                     $('#sname').text(name);
        //                     $('#semail').text(email);

        //                 }
        //             }
        //         });
        //     });
        //     $("#searchform").on("keyup keypress", function(e) {
        //         var code = e.keycode || e.which;
        //         if (code == 13) {
        //             $("#btnSearch").click();
        //             return false;
        //         }
        //     });
        // });
        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>