<?php
include("header.php");
?>
<?php
$con = mysqli_connect("localhost","root", "root", "fitnes");
$sql_query = "select surname, name, patronymic, photo, achievements, phone_number from users where role = 3";
$result = mysqli_query($con, $sql_query);
?>

<div class="cards">
    <?php
    while($trener = mysqli_fetch_array($result)){
    ?>
    <div class="card">
        <img src="/img/<?=$trener['photo'];?>" alt="">
        <h2><?=$trener['surname']. " " .$trener['name']?></h2>
        <p><?=$trener['phone_number']?></p>
        <p><?=$trener['achievements']?></p>
    </div>
    <?php
    
    }
    ?>
</div>