<?php
session_start();
$connection = mysqli_connect("localhost","root","","register");

if(isset($_POST['registerbtn'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $academic_year = $_POST['academic_year'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO users (fname,lname,username,password,gender,academic_year,email,phone) VALUES ($fname, $lname,$username,$password,$gender,$academic_year,$email,$phone)";
    $query_run = mysqli_query($connection,$query);
}
?>