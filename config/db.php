<?php
$connection = mysqli_connect("localhost", "pisarjevsky", "BY_41147", "imbdb");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_query($connection, "SET NAMES utf8");

