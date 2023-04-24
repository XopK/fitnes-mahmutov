<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "fitnes");
$phone = $_POST['phone'];
$pass = $_POST['password'];
$query = "select role, password from users where phone_number = $phone";
$role = mysqli_fetch_array(mysqli_query($con, $query))[0];
$password = mysqli_fetch_array(mysqli_query($con, $query))[1];
if ($password == $pass) {
    $_SESSION['role'] = $role;
    $_SESSION['phoneUser'] = $phone;
    echo "<script>alert('Вы успешно авторизировались!'); location.href ='/'; </script>";
} else {
    echo "<script>alert('Ошибка авторизации, проверьте введеные данные!'); location.href ='/authorization.php'; </script>";
}
