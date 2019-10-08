<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>AVIATION AND COMMUNICATION </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./css/bootstrap-social/bootstrap-social.css" />
  <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />
   <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
   <link rel="stylesheet" href="css/main.css">
   <link  rel="stylesheet" href="css/font.css">
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>
    <div class="bg-image">
    </div>
    <?php

    if(isset($_COOKIE["user"])) {
      class loginInfo {
      }
      $objData = $_COOKIE['user'];
      $obj = unserialize($objData);
      if (!empty($obj)) {
          $email = $obj->email;
          $pass = $obj->pass;
      }
      else {
        $email="";
        $pass="";
      }
    }
    else {
      $email="";
      $pass="";
    }
     ?>
    <div class="main">
      <style>
      body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      .bg-image {
        position: absolute;
        /* The image used */
        background-image: url("./images/background.jpg");

        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(8px);

        height: 100%;
        width: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

      }
      </style>
      <div class="navbar" style=" background-color: black ">
        <div class="nav-brand" style=" color: red">
          <a href="../index.html"><img src="../images/logo.jpg" width="140vh" height="80vh" style="margin-left: 80%;"></a>
        </div>
      </div>
      <style>
        #imageDiv img {
          padding: 0% 0% 0% 0%;
          width: 90vh;
          height: 95vh;
        }
        .carousel-indicators > li {
          border-radius: 100%;
          height: 2vh;
          width: 2vh;
        }
      </style>
      <div class="container">
          <div class="row">
              <div id="imageDiv" class="col-md-5 d-none d-md-block" style= "border-radius: 60px;">
                <div id="carousel-login" class="carousel slide" data-ride="carousel" style="width:100%">
                  <!--Indicators-->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-login" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-login" data-slide-to="1" ></li>
                  </ol>
                  <!--/.Indicators-->
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <img src="./images/imageLogin2.jpg" style="z-index: -1;width:100%;"
                        alt="First slide" >
                        <img src="./images/logo.jpg" style=" border-radius: 100%; margin-top:-90vh; margin-left:25%; height:40%; width:50% ">
                        <div style="color: #FFF; margin-top: -40vh; margin-left: 10%; margin-right:10%; height:40vh;">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nisl dui, sollicitudin ultrices hendrerit vel, dignissim in arcu. Phasellus bibendum aliquet pellentesque. Curabitur aliquet scelerisque tempor. Pellentesque aliquam elit a metus imperdiet euismod. Sed a metus a felis consectetur consequat. Ut a bibendum elit, vitae mattis velit</p>
                        </div>
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100"  src="./images/imageLogin1.jpg"
                        alt="Second slide">
                    </div>
                    <!--/Second slide-->
                  </div>
                </div>
              </div>
              <div class="col-md-7 mx-auto" style="height:100vh; width: 100%">
                <div class="card card-signin" style="height:95%; width:100%; margin-left: -10%">
                  <div class="card-header" style=" font-size: 1.5em;" >
                    <style>
                    li .nav-link{
                      color: grey;
                    }
                    li .active {
                      border-bottom: 3px solid;
                      color: #259;
                    }
                    </style>
                    <ul class="nav tabs-2" style="margin-left:20%;" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab" ><i class="fa fa-user mr-1 fa-lg"></i>
                          Login
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab" ><i class="fa fa-user-plus mr-1 fa-lg"></i>
                          Register
                        </a>
                      </li>
                    </ul>
                  </div>
                  <style>
                  form {
                    overflow: auto;
                    max-height: 70vh;
                  }
                  </style>
                  <div class="card-body" style= " font-size: 1.4em; max-height: 100%">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="panel1" role="tabpanel">
                        <form class="form-signin" action="login.php?q=connect.php" method="POST">
                          <div class="form-label-group">
                            <label for="inputEmail">Email address</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?php echo $email; ?>" required autofocus>
                          </div>

                          <div class="form-label-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value="<?php echo $pass; ?>" required>
                          </div>
                          <div class="options text-center text-md-right mt-1">
                            <p style="color: blue;">Not a member? <a href="#panel2" data-toggle="tab" role="tab" style="color: rgb(171, 194, 219);">Sign Up</a></p>
                            <p style="color: blue;">Forgot <a href="#" style="color:rgb(169, 190, 214);">Password?</a></p>
                          </div>

                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="chkMe" value="PassSave">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >Sign in</button>
                          <hr class="my-4">
                        </form>
                      </div>
                      <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <form class="form-signin" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
                          <div class="form-label-group">
                            <label for="inputName">Your Name</label>
                            <input type="text" id="inputName" name="name" class="form-control" placeholder="Username" required autofocus>
                          </div>

                          <div class="form-label-group">
                            <label for="inputGender">Gender</label>
                            <select id="inputGender" name="gender" class="form-control">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>

                          <div class="form-label-group">
                            <label for="inputCollege">Enter your College name</label>
                            <input type="text" id="inputCollege" name="college" class="form-control" placeholder="College Name" required autofocus>
                          </div>

                          <div class="form-label-group">
                            <label for="inputEmail">Email address</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                          </div>

                          <div class="form-label-group">
                            <label for="inputNumber">Phone Number</label>
                            <input type="text" name="mob" id="inputNumber" class="form-control" placeholder="Eneter your phone number here" required autofocus>
                          </div>

                          <div class="form-label-group">
                            <label for="inputPass">Make a Password</label>
                            <input type="password" name="password" id="inputPass" class="form-control" placeholder="Make a password" required autofocus>
                          </div>

                          <div class="form-label-group">
                            <label for="inputPassword">Confirm pass</label>
                            <input type="password" name="cpassword" id="inputConfirm" class="form-control" placeholder="Confirm your password" required>
                          </div>
                          <?php if(@$_GET['q7'])
                          { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}
                          ?>
                          <div class="options text-center text-md-right mt-1">
                            <p style="color: blue;">Already Member? <a data-toggle="tab" href="#panel1" role="tab" style="color: rgb(171, 194, 219);">Sign Up</a></p>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
                          <hr class="my-4">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!--Footer start-->
      <div class="row footer">
      <div class="col-md-4 box">
      <a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
      <div class="col-md-4 box">
      <a href="#" data-toggle="modal" data-target="#developers">Developer</a>
      </div>
      <div class="col-md-4 box">
      <a href="feedback.php" target="_blank">Feedback</a></div></div>
      <!-- Modal For Developers-->
      <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developer</span></h4>
            </div>

            <div class="modal-body">
              <p>
      		<div class="row">
      		<div class="col-md-4">
      		 <img src="#" width=100 height=100 alt="ABHINAV VERMA" class="img-rounded">
      		 </div>
      		 <div class="col-md-5">
      		<a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Abhinav Verma</a>
      		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 8791189792</h4>
      		<h4 style="font-family:'typo' ">abhiverma1819@gmail.com</h4>
      		<h4 style="font-family:'typo' ">jaypee institute of information and Technology , Noida</h4></div></div>
      		</p>
            </div>

          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <!--Modal for admin login-->
      	 <div class="modal fade" id="login">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
            </div>
            <div class="modal-body title1">
      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <form role="form" method="post" action="admin.php?q=connect.php">
      <div class="form-group">
      <input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/>
      </div>
      <div class="form-group">
      <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
      </div>
      <div class="form-group" align="center">
      <input type="submit" name="login" value="Login" class="btn btn-primary" />
      </div>
      </form>
      </div><div class="col-md-3"></div></div>
            </div>
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>-->
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--footer end-->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
