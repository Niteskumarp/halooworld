<?php
session_start();
include("connection.php");
include("function.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // $name = $_POST['name'];
  $email = $_REQUEST['email'];
  $partnerid = $_REQUEST['partnerid'];
  $password = $_REQUEST['password'];

  // ------------
  //$password = password_hash($password, PASSWORD_BCRYPT);
  $token = bin2hex(random_bytes(15));

  // $partnerid = rand(10);
  if (!empty($email) && !empty($partnerid) && !empty($password)) 
  {
    //save to db
    // $user_id = random_num(20);
    // --------------------
    $query = "INSERT INTO `signup`(`email`, `partner_id`, `password`,`token`,`status`) 
    VALUES ('$email','$partnerid','$password','$token','inactive')";

    mysqli_query($conn, $query);
    if ($query) {
      $to_email = $_POST['email'];

      $partnerid = $_POST['partnerid'];

      //  $url = "http://localhost/NiceAdmin/NiceAdmin/signup.php"; 
      //  $usernme = "?email=$to_email";
      //  $pid="&partnerid=$partnerid";  
      //  $complete_url= $url.$usernme.$pid;
      // $subject = "Wellcome to Halooworld"; 
      // $body = "Hi, This is your login credentials for HalooWorld Username:$to_email partner id:$partnerid  , $complete_url  ";
      // $headers = "From:nitesh.haloocom@gmail.com";

      //       if (mail($to_email, $subject, $body, $headers)) {
      //           echo "Email successfully sent to $to_email...";
      //       } else {
      //           echo "Email sending failed...";
      // }
    }
    header("Location: login.php");
    die;
  } else {
    echo "enter valid information";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
                <a href="" class="logo-reg d-flex align-items-center w-auto">
                  <img src="img/logo.png" alt="">
                  <!-- <span class="d-none d-lg-block">NiceAdmin</span> -->
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="#" method="POST">
                    <!-- <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div> -->

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" value="<?php echo  $_GET['email']; ?>" readonly>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Partner-ID</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">ID</span>
                        <input type="text" name="partnerid" class="form-control" value="<?php echo  $_GET['partnerid']; ?>" id="yourpartnerid" readonly>
                        <div class="invalid-feedback">Please choose a partnerid.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <input class="btn-reg" type="submit" name="signup"></input>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
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

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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



<?php
// $login = '';
if ($_POST['login']) {
  // $name = $_POST['name'];
  $email = $_POST['email'];
  $partnerid = $_POST['partnerid'];
  $password =  $_POST['password'];

  $query = "INSERT INTO signup VALUES('$email','$partnerid','$password')";
  $data = mysqli_query($conn, $query);
}
?>








<!-- kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk -->