<?php
session_start();

// Check if there is an error parameter in the URL
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - J Studio</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css">
    <!-- Custom Styles -->
    <style>
        

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Login Form -->
                <div class="login-form">
                    <div class="login-header">
                    <img src="assets/logo.png" alt="Your Logo" style="max-width: 30%;">

                        <h2>Login</h2>
                    </div>
                    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div>
    <?php unset($_SESSION['error']); // Clear the error message after displaying ?>
    <?php endif; ?>
                    <form action="logindb.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope" style="color: white;"></i></span>
                                </div>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock" style="color: white;"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>    
                                    <?php if (isset($_GET['error'])): ?>
                                        <div class="text-danger" role="alert" style="width: 400px; margin-left: 70px; margin-top: 10px;">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        <?php echo $_GET['error']; ?>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </form>
                    <hr>
                    <p class="register-link">Create an account! <a href="#" id="registerLink"></a></p>

                    <button type="submit" class="btn btn-dark btn-block"id="registerButton">Sign up</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>

document.addEventListener("DOMContentLoaded", function () {
            const registerButton = document.getElementById('registerButton');

            registerButton.addEventListener('click', function () {
                // Add your registration logic here
                // For example, you can redirect to the registration page
                window.location.href = 'register.php';
            });
        });

        // Get a reference to the form and the loading spinner
const form = document.querySelector('form');
const loadingSpinner = document.getElementById('loadingSpinner');

// Add an event listener for the form submission
form.addEventListener('submit', function() {
  // Display the loading spinner when the form is submitted
  loadingSpinner.style.display = 'block';
});


    </script>
</body>

</html>
