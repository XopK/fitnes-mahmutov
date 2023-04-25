<?php
session_start();
include("header.php");
?>
</html>
<?php
$sess = $_SESSION["phoneUser"];
if (isset($sess)) {
    $con = mysqli_connect("localhost", "root", "root", "fitnes");
    $sql_query = "select surname, name, patronymic, photo from users where phone_number = '$sess'";
    $result = mysqli_query($con, $sql_query);
    $info = mysqli_fetch_array($result);
}
?>
<div class="container">
    <div class="acc">
        <h1>Здраствуй, <?= $info['name']; ?></h1>
        <img src="/img/<?= $info['photo']; ?>" alt="<?= $info['photo']; ?>">
    </div>
</div>