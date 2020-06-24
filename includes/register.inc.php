<?php

if(isset($_POST['register-submit'])) {
    require 'connection.inc.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password-confirm'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordConfirm)) {
        header('Location: ../register.php?error=emptyfields&username=' . $username . '&email=' . $email );

        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../register.php?error=emptyfields&username=' . $username);

        exit();
    } elseif ($password != $passwordConfirm) {
        header('Location: ../register.php?error=passwordmismatch&username=' . $username . '&email=' . $email );

        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username=?";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../register.php?error=sqlerror');

            mysqli_stmt_close($stmt);

            mysqli_close($conn);

            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $username);

            mysqli_stmt_execute($stmt);

            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt) > 0) {
                header('Location: ../register.php?error=usertaken&email=' . $email);

                exit();
            } else {
                $sql = 'INSERT INTO users (username, email, password) VALUES (?, ?, ?);';

                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header('Location: ../register.php?error=sqlerror');

                    mysqli_stmt_close($stmt);

                    mysqli_close($conn);

                    exit();
                } else {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $passwordHash);

                    mysqli_stmt_execute($stmt);

                    header('Location: ../register.php?error=success');

                    mysqli_stmt_close($stmt);

                    mysqli_close($conn);

                    exit();
                }
            }
        }
    }
} else {
    header('Location: ../register.php');

    exit();
}