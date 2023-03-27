<?php
include("header.php");
$con = mysqli_connect("localhost","root", "root", "fitnes");
$sql_query = "select id_user, surname, name, patronymic, photo, achievements, phone_number, date_birthday, password, gender from users where role = 3";
$query_first = "select id_user from users where role = 3 limit 1";
$result_first_id = mysqli_fetch_array(mysqli_query($con, $query_first));
$result = mysqli_query($con, $sql_query);
$trener_id = !empty($_GET["trener"])?$_GET["trener"]:$result_first_id['id_user'];
$trener_info = mysqli_fetch_array(mysqli_query($con, "select * from users where id_user = $trener_id"));
?>
<div class="container">
    <div class="list-trener">
        <?php
            while($trener = mysqli_fetch_array($result)){
                ?>
                <div class="trener-item">
                    <p><?=$trener['surname']." ".$trener['name']." ".$trener['patronymic']?></p>
                    <a href="?trener=<?=$trener['id_user'];?>"><button class = "btn btn-edit">Редактировать</button></a>
                    <a href="/delTrener.php?trener=<?=$trener['id_user'];?>"><button class = "btn btn-delete">Удалить</button></a>
                </div>
                <?php
            }
        ?>
    </div>
    <div class="form-edit">
            <div class="container flex-column-center">
                <form action="editTrenerDB.php" method="POST" enctype = "multipart/form-data">
                <input type="hidden" id= "id_user" name = "id_user" value = "<?=$trener_id?>">
                <div class="input-group"><label for="surname">Введите фамилию</label><input value ="<?=$trener_info['surname']?>" type="text" required id="surname" name = "surname"></div>
                <div class="input-group"><label for="name">Введите имя</label><input value ="<?=$trener_info['name']?>" type="text" id="name" required name = "name"></div>
                <div class="input-group"><label for="patronymic">Введите отчество</label><input value ="<?=$trener_info['patronymic']?>" type="text" id="patronymic" name = "patronymic"></div>
                <div class="input-group"><label for="date_birthday">Введите дату рождения</label><input value ="<?=$trener_info['date_birthday']?>" type="date" required id="date_birthday" name = "date_birthday"></div>
                <div class="input-group"><label for="phone"></label>Введите номер телефона<input value ="<?=$trener_info['phone_number']?>" type="text" required id="phone_number" name = "phone_number"></div>
                <div class="input-group"><label for="photo"></label>Выберите фото<input value ="<?=$trener_info['photo']?>" type="file" id="photo" name = "photo"></div>
                <div class="input-group i-g-radio">
                    <label for="g-m">Муж</label><input value ="муж" <?=($trener_info["gender"] == "муж")?"checked":"";?> type="radio" id="g-m" name = "gender">
                    <label for="g-w">Жен</label><input value ="жен" <?=($trener_info["gender"] == "жен")?"checked":"";?> type="radio" id="g-w" name = "gender" >
                </div>
                <div class="input-group"><label for="password"> Пароль</label><input value ="<?=$trener_info['password']?>" type="password" id="password" required name = "password"></div>
                <div class="input-group"><label for="achievements">Достижения</label><input value ="<?=$trener_info['achievements']?>" type="text" id="achievements" name = "achievements"></div>
                <div class="input-group"><input type="submit" value ="Редактировать"></div>
                </form>
            </div>
    </div>
</div>