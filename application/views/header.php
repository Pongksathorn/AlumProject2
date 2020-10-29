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

<div class="g"><img src="../../public/img/npru.png" class="img-fluid"  width="200" height="100"alt="Responsive image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp; ระบบลงทะเบียนสมาชิกศิษย์เก่ามหาวิทยาลัยราชภัฎนครปฐม
  </div>
  <style>
   .g {
  background-color: gray;
  font-size: 30px;
}
.dropbtn {
  background-color: green;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: green;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<BODY BGCOLOR="white">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">....................................
      </li>
      <li class="nav-item "<?php echo activate_menu('alumni/index'); ?>>
        <a class="nav-link" href="../alumni/index">หน้าเเรก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">........................
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">.....................................
      </li>
     
      <li class="nav-item">...........................
      </li>
      <li class="nav-item"<?php echo activate_menu('alumni/find'); ?>>
      <a class="nav-link"  href="../alumni/find">ค้นหารายชื่อศิษย์เก่า</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['s_id'])) { ?>
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ยินดีต้อนรับ คุณ <?php echo $_SESSION['s_email'] ?>  
                        </a>
                        <div class="dropdown-menu dropdown-primary text-center">
                            <a class="dropdown-item" href="../alumni/profile?id=<?php echo $_SESSION['s_id'] ?>">ข้อมูลส่วนตัว</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../Loginalumni/sendlogout">ออกจากระบบ</a>
                        </div>
                    </div>
                </li>
            <?php } else { ?>
                <a role="button" class="btn btn-sm btn-primary " href="../alumni/reg">ลงทะเบียน</a>
                <a role="button" class="btn btn-sm btn-primary " href="../alumni/login">เข้าสู่ระบบ</a>

            <?php } ?>
        </ul>
  </div>
</nav>
  