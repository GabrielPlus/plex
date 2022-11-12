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




        if($pass != $cpass) {
            $error[] = 'Password not matched!';
        }else{
            $insert = "INSERT INTO waste(name, email, password, waste_type) VALUES('$name','$email','$pass','$waste_type')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-waste form</title>
    <link rel="stylesheet" href="assets\css\user.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
           <h3>Dispose your E-waste here</h3>
           <?php

           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
                             
            }
           }

           ?>

           <input type="text" name="name" required placeholder="Enter your name"> 
           <input type="email" name="email" required placeholder="Enter your email">
           <input type="text" name="location" required placeholder="enter location">
           <p>E-waste to depose</p>
           <select name="waste_type">
                <option value="Home">Home</option>
                <option value="Industrial">Industrial</option>
                <option value="computers">computers</option>
                <option value="Vending machines">Vending machines</option>
           </select>
           <input type="submit" name="submit" value="submit" class="form-btn">
          
        </form>
    </div>
</body>
</html>