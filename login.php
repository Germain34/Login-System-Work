
<?php
session_start();


error_reporting(0);

if(isset($_POST['submit'])){


    $conn = mysqli_connect("localhost", "root", "", "login_system");

    extract($_POST);


    
    $sql = "SELECT * FROM `users` WHERE Email = '$Email' AND Password ='$Password'";
    $result = mysqli_query($conn, $sql);

    $CallDetails = mysqli_fetch_assoc($result);



    if($CallDetails['Email'] == $Email AND $CallDetails['Password'] == $Password){


        $_SESSION['Login'] =  $CallDetails['id'];
        $_SESSION['FirstName'] = $CallDetails['FirstName'];
        $_SESSION['LastName'] = $CallDetails['LastName'];
        $_SESSION['Email'] = $CallDetails['Email'];

        header("location:index.php");
      
        
    }else{


        echo "<script>alert('Wrong Email Or Password')</script>";

    }


}

?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
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
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="login-form">
                <h3 class="text-center mb-4">Login</h3>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Email</label>
                        <input type="text" class="form-control" id="username" name="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="Password" required>
                    </div>
                    <div class="btn-group-center">
                        <button type="submit" name="submit" class=" col-6 btn btn-primary">Log in</button>
                        <button type="button" class=" col-6 btn btn-outline-primary" onclick="location.href='index.php'">Cancel</button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
