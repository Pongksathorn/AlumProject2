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

<style>
   <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<?php $this->load->view('header'); ?>

<body>



<br>

<div class="events page_section">
<div class="container">
<br><br>
  <div class="row">
    <div class="col">
      <div class="section_title text-center">
        <h1>กิจกรรมประชาสัมพันธ์</h1>
      </div>
    </div>
  </div>
  
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../../public/img/pic1.jpg" style="width:100%">
 </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../../public/img/pic2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../../public/img/pic3.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

  
<br><br><br>
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