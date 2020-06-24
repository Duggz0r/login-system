<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Simple Registration System</title>

    <link rel="stylesheet" href="app.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid nav-bar">
    <header>
        <div class="row">
            <div class="col-md-6">
                <a href="#"><h3>Simple Registration System</h3></a>
            </div>

            <div>
                <?php
                if(!isset($_SESSION['userid'])) {
                    echo '<form action="includes/login.inc.php" method="post">
                    <div class="form-group">
                        <div class="col-md-2">
                            <input type="text" name="username-email" placeholder="Username/E-Mail" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" name="login-submit" class="btn btn-primary btn-block">Log in</button>
                        </div>
                    </div>
                </form>
                <div class="col-md-1">
                    <a href="register.php" class="btn btn-primary btn-block">Register</a>';
                } else {
                    echo '
                        <form action="includes/logout.inc.php" method="post">
                            <div class="form-group">
                                <div class="col-md-5"></div>
                                <div class="col-md-1">
                                    <button type="submit" name="logout-submit" class="btn btn-primary btn-block" class="form-control">Logout</button>
                                </div>
                            </div>
                    </form>
                    </div>';
                }
                ?>
                </div>
            </div>
        </div>

    </header>
</div>