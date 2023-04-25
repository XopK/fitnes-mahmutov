<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "fitnes");
$phone = $_POST['phone'];
$pass = $_POST['password'];
$query = "select id_user, role, password from users where phone_number = $phone";
$usersess = mysqli_fetch_array(mysqli_query($con, $query))[0];
$role = mysqli_fetch_array(mysqli_query($con, $query))[1];
$password = mysqli_fetch_array(mysqli_query($con, $query))[2];
if ($password == $pass) {
    $_SESSION['idUser'] = $usersess;
    $_SESSION['role'] = $role;
    $_SESSION['phoneUser'] = $phone;
    echo "<script>alert('Вы успешно авторизировались!'); location.href ='/account.php'; </script>";
} else {
    echo "<script>alert('Ошибка авторизации, проверьте введеные данные!'); location.href ='/authorization.php'; </script>";
}
