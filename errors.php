<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'emptyfields') {
        echo '<p class="alert alert-danger">Please fill in all fields</p>';
    }

    if ($_GET['error'] == 'passwordmismatch') {
        echo '<p class="alert alert-danger">Your passwords do not match</p>';
    }

    if ($_GET['error'] == 'sqlerror') {
        echo '<p class="alert alert-danger">SQL Error</p>';
    }

    if ($_GET['error'] == 'usertaken') {
        echo '<p class="alert alert-danger">User already exists</p>';
    }

    if ($_GET['error'] == 'success') {
        echo '<p class="alert alert-success">Registration Successful, please log in</p>';
    }

    if ($_GET['error'] == 'incorrectpwd') {
        echo '<p class="alert alert-danger">Incorrect Password</p>';
    }

    if ($_GET['error'] == 'nouser') {
        echo '<p class="alert alert-danger">User not found</p>';
    }
}

?>