
<?php


if(isset($_POST['submit'])){

    $conn = mysqli_connect("localhost", "root", "", "login_system");

    extract($_POST);

    $sql = "INSERT INTO `users` VALUES (NULL, '$FirstName', '$LastName', '$Email', '$Phone', '$Address', '$Password')";
    $result = mysqli_query($conn, $sql);


    if($result){

        echo "<script>alert('User Account Created Successfully')</script>";
    }else{
        
        
        echo "<script>alert('Something Went Wrong'); windows.location('login.php')</script>";
        
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-link {
            color: #007bff; 
        }

        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }

        .btn-outline-primary {
            margin-right: 10px;
        }
        .navbar-brand img {
            height: 30px;
            width: 30px;
        }
        nav{

            box-shadow: 0  0 10px gray;
        }


    </style>

    


<style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
        }
        .login-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
     <style>
        .login-container {
            margin-top: 100px;
        }
        .login-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-group-center {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" alt="Logo">
        </a> 
        <h4>Best Store</h4>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                
            </ul>
            <form class="d-flex">
                <a href="register.php" class="btn btn-outline-primary">Register</a>
                <a href="login.php" class="btn btn-primary">Login</a>
            </form>
        </div>
    </div>
</nav>







<!-- Login Form -->
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-form">
                <h3 class="text-center mb-4">Register</h3>
                <form action="register.php" method="post">
                <div class="mb-3">
                        <label for="username" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="username" name="FirstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="username" name="LastName" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Email</label>
                        <input type="email" class="form-control" id="username" name="Email" required>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="username" name="Phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Address</label>
                        <input type="text" class="form-control" id="username" name="Address" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password" name="ConfirmPassword" required>
                    </div>
                    <!-- Button Group -->
                    <div class="btn-group-center">
                        <button type="submit"  name ="submit" class=" col-6 btn btn-primary">Sign Up</button>
                        <button type="button" class=" col-6 btn btn-outline-primary" onclick="location.href='index.php'">Cancel</button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>












<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
