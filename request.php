<?php

 
session_start();
include("connection.php");
include("function.php");


?>
<!DOCTYPE html>

<head>
  <title>dash board</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body style="overflow: scroll;">
<div >
<a href="#default"> <img  class="logohead" src="images\logo.png"></a>

<!-- <img class="req-img" src="images\req.webp" style="    height: 646px;
    width: 1520px;">
 
</div> -->

  <!-- <div class="card">
  <div class="card-body">
    This is some text within a card body. -->



  <div class="box">
    <form action="" method="POST">
      <p class="head"> how can we HELP you....! </p>
      <!-- <span class="text-center">login</span> -->
      <div class="input-container">
        <input type="text" required="" name="name"/>
        <label>Full Name</label>
        
      </div>
      <div class="input-container">
        <input type="mail" required="" name="email" id="yourEmail" />   <!--value="<?php echo  $_GET['email']; ?>"-->
        <label>Email</label>
      </div>




      <div class="col-12">
        <label for="yourmessage" class="input-container">Message</label>
        <div class="input-group has-validation">
        <!-- <input type="message" required="" name="msg"  /> -->
          <textarea name="msg" cols="50" rows="10"></textarea>
          <!-- <div class="invalid-feedback">Please enter your message.</div> -->
        </div>
      </div>


      <!-- <button type="button" class="btn">submit</button> -->
      <!-- <div class="col-12">
                      <input class="btn-req" type="submit" name ="signup" ></input>
                    </div> -->
                    <div class="input_field">
                      <input type="submit" value="submit"
                      class="btn" name="submit">
                      
                    </div>
                    
    </form>
  </div>
</body>

</html>
<?php
    // $login = '';
    if( isset($_POST['submit']))
    {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $msg = $_POST['msg'];
      $ticketid = rand(10,10000);
      // $password =  $_POST['password'];
      

      
     $query = "insert into ticket(name,email,message,ticketid ) values('$name','$email','$msg','$ticketid' )";
     $data = mysqli_query($conn,$query);

     if ($query){
      $to_email = $_POST['email'];
      
      // $partnerid = $_POST['partnerid'];

      // $url = "http://localhost/NiceAdmin/NiceAdmin/signup.php"; 
      // $usernme = "?email=$to_email";
      // $pid="&partnerid=$partnerid";  
      // $complete_url= $url.$usernme.$pid;
     $subject = "Wellcome to Halooworld"; 
     $body = "Thank You for contacting us Your Ticket id is :$ticketid your message: $msg  ";
     $headers = "From:nitesh.haloocom@gmail.com";

     if (mail($email, $subject, $body, $headers)) {
         echo "Email successfully sent to $to_email...";
     } else {
         echo "Email sending failed...";
}
   }

     header("location: request.php");
    exit;
     
    }
    
    
?>