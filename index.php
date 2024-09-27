<?php

session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
.banner-section {
    background-color: #005f85;
    color: white;
    padding: 50px 0;
}

.banner-section h1 {
    font-size: 3em;
    font-weight: bold;
}

.banner-section p {
    font-size: 1.2em;
}

#register, #login {
    margin-left: 10px;
}

    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://img.icons8.com/ios-filled/50/000000/shopping-bag.png" alt="Best Store" width="30" height="24" class="d-inline-block align-text-top">
                Best Store
            </a>


            <?php
            $SessionId = $_SESSION['Login'];

            $SessionCheck  = strlen($SessionId );

            if($SessionCheck > 0){

                echo'



                      
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://img.icons8.com/ios-filled/50/000000/user-male-circle.png" alt="Profile" width="40" height="40" class="rounded-circle me-2">
                    <div>
                        <strong>'. $_SESSION['FirstName'] .' '. $_SESSION['LastName'] .'</strong> <br>
                        <span>Member</span>
                    </div>
                </a>
               
                <ul class="dropdown-menu" aria-labelledby="dropdownProfile">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout.php" id="logout">Logout</a></li>
                </ul>
            </div>
                
                
                ';
            }else{

                echo '
                
                
            <div>
                <a href="register.php" class="btn btn-primary" id="register">Register</a>
                <a href="login.php" class="btn btn-primary" id="login">Login</a>
            </div>
            ';
            }
?>        
    </nav>
    <div class="container-fluid banner-section">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <h1>Best Shop of Electronics</h1>
                <p>Find a large selection of newest electronic devices from most popular brands and with affordable prices.</p>
            </div>
            <div class="col-md-6">
                <img src="image/samsung.png" alt="Electronic Device" class="img-fluid">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    <script>
        document.getElementById("logout").onclick = function() {
            alert("You have been logged out!");
        };
    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
