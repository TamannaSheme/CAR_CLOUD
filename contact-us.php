<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Contact Us </title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/59c5db4307.js" crossorigin="anonymous"></script>
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap');

:root{
    --blue:#3c6382;
    --dark-blue:#0a3d62;
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border:none;
<!--    text-transform: capitalize;-->
    transition: all .3s cubic-bezier(.38,1.15,.7,1.12);
}


textarea {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

* {
  box-sizing: border-box;
}

.wrapper {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .wrapper {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .wrapper {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .wrapper {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .wrapper {
    max-width: 1140px;
  }
}

.d-grid {
  display: grid;
}

.text-center {
  text-align: center;
}

.text-left {
  text-align: left;
}

.text-right {
  text-align: right;
}

button,
select {
  outline: none;
  appearance: none;
  -webkit-appearance: none;
}

button,
.btn,
select {
  cursor: pointer;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

a {
  text-decoration: none;
}

iframe {
  border: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  padding: 0;
  color:var(--blue);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

p {
  margin: 0;
  padding: 0;
}
.section-gap {
  padding: 4.5rem 0;
}

@media screen and (max-width:767px) {
  .section-gap {
    padding: 3.5rem 0;
  }
}

@media screen and (max-width:480px) {
  .section-gap {
    padding: 3rem 0;
  }
}
h3.global-title {
  font-size: 40px;
  line-height: 45px;
  color: #16191e;
  margin-bottom: 50px;
<!--  text-transform: capitalize;-->
}

@media screen and (max-width:767px) {
  h3.global-title {
    font-size: 40px;
    line-height: 45px;
  }
}

@media screen and (max-width:600px) {
  h3.global-title {
    font-size: 35px;
    line-height: 40px;
  }
}

@media screen and (max-width:500px) {
  h3.global-title {
    font-size: 30px;
    line-height: 35px;
  }
}

.contact-form {
  background: f1f5fe;
}

.field {
  margin-bottom: 20px;
}

.form-mid {
  background: f1f5fe;
  padding: 3rem;
  border: 2px solid #c8e8e9;
  border-radius: 4px;
}

.form-mid form input,
.form-mid form textarea {
  background: #f8f9fa;
  border: 2px solid rgba(216, 216, 216, 0.3);
  color: var(--blue);
  font-size: 16px;
  padding: 12px 15px;
  width: 100%;
  border-radius: 4px;
  height: 55px;
}

.form-mid form textarea {
  resize: none;
  min-height: 140px;
}

.form-mid form input:focus,
.form-mid form textarea:focus {
  outline: none;
  border: 2px solid #051b35;
  background: #fff;
  box-shadow: none;
}

button.btn-contact {
  border: none;
  font-size: 20px;
  padding: 15px 30px;
  margin: 20px auto 0;
  color: #fff;
  background: red;
  border-color: var(--blue);
  display: inline-block;
  font-weight: 400;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

@media(max-width: 568px) {
  .form-mid {
    padding: 1.5rem;
  }
}
    </style>
</head>
<body>
<?php include('includes/colorswitcher.php');?>       
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Contact Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
<section class="w3l-simple-contact-form1">
    <div class="contact-form section-gap">
      <div class="wrapper">
        <div class="text-center">
      
      </div>
        <div class="contact-form" style="max-width: 450px; margin: 0 auto;">
          <div class="form-mid">
            <form action="javascript:sendmail()" method="post">
              <div class="field">
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" required="">
              </div>
              <div class="field">
                <input type="email" class="form-control" name="Sender" id="Sender" placeholder="Email"
                  required="">
              </div>
              <div class="field">
                <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject"
                  required="">
              </div>
              <textarea name="Message" class="form-control" id="Message" placeholder="Message"
                required=""></textarea>
              <button type="submit" class="btn btn-contact">Send Message</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
    $(document).ready(function(){

  $('#menu').click(function(){
    $(this).toggleClass('fa-times');
    $('.navbar').toggleClass('nav-toggle');
  });

  $(window).on('load scroll',function(){

    $('#menu').removeClass('fa-times');
    $('.navbar').removeClass('nav-toggle');

    if($(window).scrollTop() > 0){
      $('header').addClass('sticky');
    }else{
      $('header').removeClass('sticky');
    }

    if($(window).scrollTop() > 0){
      $('.scroll-top').show();
    }else{
      $('.scroll-top').hide();
    }


    $('section').each(function(){

      let top = $(window).scrollTop();
      let offset = $(this).offset().top - 200;
      let id = $(this).attr('id');
      let height = $(this).height();

      if(top > offset && top < offset + height){
        $('.navbar a').removeClass('active');
        $('.navbar').find(`[href="#${id}"]`).addClass('active');
      }

    });

  });

  // smooth scrolling

  $('a[href*="#"]').on('click',function(e){

    $('html, body').animate({

      scrollTop : $($(this).attr('href')).offset().top,

    },
      500,
      'linear'
    );

  });

});
</script>
<script>

     function sendmail(){

			var name = $('#Name').val();
			var email = $('#Sender').val();
			var subject = $('#Subject').val();
      var message = $('#Message').val();

			var Body='Name: '+name+'<br>Email: '+email+'<br>Subject: '+subject+'<br>Message: '+message;
	

			Email.send({
        SecureToken:"fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f",
				To: 'shemesyedatamanna@gmail.com',
				From: "shemesyedatamanna@gmail.com",
				Subject: "New message on contact from "+name,
				Body: Body
			}).then(
				message =>{
				
					if(message=='OK'){
					alert('Your mail has been send. Thank you for connecting.');
					}
					else{
						console.error (message);
						alert('There is error at sending message. ')

					}

				}
			);



		}

    </script>


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
