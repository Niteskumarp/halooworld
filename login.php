<?php 
session_start();
include("connection.php");
include("function.php");

error_reporting(E_ERROR | E_PARSE);

//php_info();exit;
// ini_set("display_errors",1);
// ini_set("display_start_errors",1);
// error_reporting(E_ALL);
 
 //echo "<pre>";
//echo print_r($_SERVER,1);
//echo "</pre>";
//exit;

if($_SERVER['REQUEST_METHOD'] == "GET")
{

  // check_login($conn); 
  // $name = $_REQUEST['name'];
  // $email = $_REQUEST['email'];
  // echo print_r($_REQUEST);exit; 
  // $email = '';
  // $password = '';
  // $submit = '';

  $email = $_GET['email'];
  $password = $_GET['password'];

  $submit = $_GET["submit"];
  if($submit == "login")
  {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

  $query = "INSERT INTO login_form ( email, password ) VALUES ('$email','$password')";
  $data = mysqli_query($conn,$query);
 // exit;
   
  }

  if( !empty($email) && !empty($password))
  {
    
     $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password';";
       
   $result = mysqli_query($conn,$query);
  $row_count = mysqli_num_rows($result);

    if($row_count > 0)
    {
//echo "helloooo";exit;
        $_REQUEST['email'] = $user_data['email'];
        header("Location: index.php");
        die;		
    }

    
  }else{
    echo"enter valid information";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img\logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/login.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a class="logo d-flex align-items-center w-auto">
                  <img src="images/logo.png" alt="">

                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <!-- <p class="text-center small">Enter your username & password to login</p> -->
                  </div>

                  <form class="row g-3 needs-validation" id="form-23456" value="ggfrm"  >
                  <!-- add the page redirect in place off # -->
                  <form action="index.php" method="POST" target="_self">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username/E-Mail</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="youremail" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                  
                      <input class="btn-login" type="submit" name="submit" value="login"> </input>
                      
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="signup.php">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <!-- <div class="credits">
                 All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ 
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div> -->

            </div>
          </div>
        </div>

      </section>
.

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>