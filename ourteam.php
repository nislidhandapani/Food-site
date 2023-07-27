<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Developers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'user_header.php'; ?>

<!-- <div class="heading">
   <h3>Developers</h3>
   <p> <a href="index.php">home</a> / about </p>
</div> -->

<section class="authors">

   <h1 class="title">Developers</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\Our Team\Nagul.JPG" alt="">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100056023110372" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/nagulks03" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/__nagul__kvg__/" class="fab fa-instagram"></a>
            <a href="https://in.linkedin.com/in/nagul-k-s-b0047a217" class="fab fa-linkedin"></a>
         </div>
         <h3>Nagul K S</h3>
      </div>

      <div class="box">
         <img src="images\Our Team\Naveen.JPG"v alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://instagram.com/_naveen_am?igshid=ZGUzMzM3NWJiOQ==" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Naveen A M</h3>
      </div>

      <div class="box">
         <img src="images\Our Team\Sakthi.jpg"alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sakthi Sundaram A</h3>
      </div>

     
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
