<?php

$conn = mysqli_connect('localhost','root','','cuda_user');
// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}