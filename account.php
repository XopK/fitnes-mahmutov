<?php
include("header.php");
session_start();
$sess = $_SESSION["phoneUser"];
if(isset($sess)){
    $con = mysqli_connect("localhost", "root", "root", "fitnes");
    $sql_query = "select surname, name, patronymic, photo from users where phone_number = '$sess'";
    $result = mysqli_query($con, $sql_query);
    $info = mysqli_fetch_array($result);
}
?>
<div class="container">
    <h1>Здраствуй, <?=$info['surname'];?></h1>
    <img src="/img/<?=$info['photo'];?>" alt="<?=$info['photo'];?>" class = "accPhoto">
</div>
