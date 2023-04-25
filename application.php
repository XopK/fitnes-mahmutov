<?php
include("header.php");
session_start();
$userSession = $_SESSION['idUser'];
$con = mysqli_connect("localhost", "root", "root", "fitnes");
$sql_query = "select id_user, surname, name, patronymic from users where role = 3";
$result = mysqli_query($con, $sql_query);
$query_first = "select id_user from users limit 1";
$result_first = mysqli_fetch_array(mysqli_query($con, $query_first));
$user_id = !empty($userSession)?$userSession:$result_first['id_user'];
?>
<div class="container add-trener">
    <h2>Заявка</h2>
    <form action="/applicationDB.php" method="post">
        <input type="hidden" id= "id_user" name = "idUser" value = "<?=$user_id?>">
        <div class="input-group"><label for="surname">Выберите тренера</label><select name="treners" id="treners">
                <option value="0" disabled selected>Тренеры</option>
                <?php
                while ($trener = mysqli_fetch_array($result)) {
                ?>
                    <option value="<?=$trener['id_user'];?>"><?=$trener['surname'] . " " . $trener['name'] . " " .  $trener['patronymic']?></option>
                <?php

                }
                ?>
            </select>
        </div>
        <div class="input-group"><label for="surname">Цель</label><textarea name="goal" id="goal" cols="20" rows="5"></textarea></div>
        <div class="input-group"><input type="submit" value="Отправить"></div>
    </form>
</div>