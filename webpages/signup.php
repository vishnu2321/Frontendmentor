<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUp</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital@1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg d-flex">
            <div class="flex-grow-1">
                    <a class="navbar-brand" href="./index.php">Project</a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item p-1 m-1 sign">
                    <a href="./signin.php" class="nav-link">Sign In</a>
                </li>
                <li class="nav-item p-1 m-1 sign">
                    <a href="./signup.php" class="nav-link">Sign Up</a>
                </li>
            </ul>
        </nav>
       <div class="_form">
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>  method="POST">
                <div class="form-floating row m-4">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="row"><?php echo $email_error ?></div>
                <div class="form-floating row m-4">
                    <input type="password" class="form-control" id="floatingInput" name="password" placeholder="empty">
                    <label for="floatingInput">Password</label>
                </div>
                <div class="row"><?php echo $password_error ?></div>
                <button class="btn-success m-4 p-1 submit">SUBMIT</button>
            </form>
       </div>

        <?php
            require 'S3.php';

            $email_error="";
            $password_error="";

            function remove_special_chars($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $email = remove_special_chars($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email_error="*Email format is incorrect!";
                }
                $password = remove_special_chars($_POST["password"]);
        
                if(!preg_match("/^[a-zA-Z0-9]+[@#$]/",$password)){
                    $password_error="*Password should contain atleast one capital,one small and a number";
                }
            }
        ?>

    </body>
</html>