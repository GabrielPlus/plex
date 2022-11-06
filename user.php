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
           <input type="text" name="name" required placeholder="Enter your name"> 
           <input type="email" name="email" required placeholder="Enter your email">
           <input type="password" name="password" required placeholder="Enter your password">
           <input type="password" name="cpassword" required placeholder="confirm your password">
           <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
           </select>
           <input type="submit" name="submit" value="register now" class="form-btn">
           <p>already have an account at E-waste? <a href="login.php">login now</a></p>
        </form>
    </div>
</body>
</html>