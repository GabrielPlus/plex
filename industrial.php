<?php

@include 'configure.php';

session_start();

if(!isset($_SESSION['Home_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>industrial page</title>

   <!-- custom css file link  -->
   
   <link rel="stylesheet" href="assets/css/home.css">

</head>
<body >
<div class="container">

   <div class="content">
      <h1>welcome <span><?php echo $_SESSION['Industrial_name'] ?></span></h1>
      <p>Now you can depose your e-waste</p>
      <a href="user.php" class="btn">logout</a>
   </div>

   <div class="form">
   <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe0qbHkyJs6DUjZI9ZapU_i2D30NI55eqcVVeYlkLwh6tIBbg/viewform?embedded=true" width="640" height="947" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
   </div>
</div>

</body>
</html>