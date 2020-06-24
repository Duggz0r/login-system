<?php

define('DB_SERVER', 'fojvtycq53b2f2kx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
define('DB_USERNAME', 'kvrvdwhn4o8r8xov');
define('DB_PASSWORD', 'bb2aczsa6kl18p88');
define('DB_NAME', 'ztotu1laoq22fr8m');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}