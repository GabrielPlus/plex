<?php

@include 'configure.php' ;

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $waste_type = $_POST['waste_type'];

    $select = " SELECT * FROM waste WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $error[] = 'User already exist!';

    }else {

        if($pass != $cpass) {
            $error[] = 'Password not matched!';
        }else{
            $insert = "INSERT INTO waste(name, email, password, waste_type) VALUES('$name','$email','$pass','$waste_type')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit E-waste form</title>
    <link rel="stylesheet" href="assets\css\user.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
           <h3>Deposit E-waste now</h3>
           <?php

           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
                             
            }
           }

           ?>

           <input type="text" name="name" required placeholder="Enter your name"> 
           <input type="email" name="email" required placeholder="Enter your email">
           <input type="password" name="password" required placeholder="Enter your password">
           <input type="password" name="cpassword" required placeholder="confirm your password">
           <select name="waste_type">
                <option value="Home">Home</option>
                <option value="Industrial">Industrial</option>
           </select>
           <input type="submit" name="submit" value="register now" class="form-btn">
           <p>already have an account at E-waste? <a href="login.php">login now</a></p>
        </form>
    </div>
</body>
</html>