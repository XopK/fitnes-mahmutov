
<?php
include("header.php");
?>
<div class="container add-trener">
    <h2>Добавление тренера</h2>
    <form action="addTrenerDB.php" method = "post" enctype = "multipart/form-data">
        <div class="input-group"><label for="surname">Введите фамилию</label><input type="text" required id="surname" name = "surname"></div>
        <div class="input-group"><label for="name">Введите имя</label><input type="text" id="name" required name = "name"></div>
        <div class="input-group"><label for="patronymic">Введите отчество</label><input type="text" id="patronymic" name = "patronymic"></div>
        <div class="input-group"><label for="date_birthday">Введите дату рождения</label><input type="date" required id="date_birthday" name = "date_birthday"></div>
        <div class="input-group"><label for="phone"></label>Введите номер телефона<input type="text" required id="phone_number" name = "phone_number"></div>
        <div class="input-group"><label for="photo"></label>Выберите фото<input type="file" id="photo" name = "photo"></div>
        <div class="input-group i-g-radio">
            <label for="g-m">Муж</label><input type="radio" id="g-m" name = "gender" value = "муж">
            <label for="g-w">Жен</label><input type="radio" id="g-w" name = "gender" value = "жен">
        </div>
        <div class="input-group"><label for="password"> Пароль</label><input type="password" id="password" required name = "password"></div>
        <div class="input-group"><label for="achievements">Достижения</label><input type="text" id="achievements" name = "achievements"></div>
        <div class="input-group"><input type="submit" value ="Добавить"></div>
    </form>
</div>