<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignIn</title>
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
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="POST">
                <div class="row m-4 p-2">
                    <img src="./images/user-solid.svg" alt="email" class="col-md-4" style="height: 25px;">
                    <input class="col-md-8" type="email" name="mail" required>
                </div>
                <div class="row m-4 p-2">
                    <img src="./images/key-solid.svg" alt="password" class="col-md-4" style="height: 25px;">
                    <input class="col-md-8" type="password" name="password" required>
                </div>
                <button class="btn-success m-4 p-1 submit">LOGIN</button>
            </form>
       </div>

    <?php



    ?>

    </body>
</html>