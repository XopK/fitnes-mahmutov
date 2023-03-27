<?php
$con = mysqli_connect("localhost","root", "root", "fitnes");

if(!empty($_POST)){
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = !empty($_POST['patronymic']) ? $_POST['patronymic'] : '-';
    $birthday = $_POST['date_birthday'];
    $phone = $_POST['phone_number'];
    $photo = $_FILES['photo'] ['name'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];
    $achievements = !empty($_POST['achievements']) ? $_POST['achievements'] : "-";
    $created_at = date("Y-m-d H-i-s");
    $query = "insert into users(id_user, surname, name, patronymic, phone_number, password, role, date_birthday, photo, gender, date_create, achievements) value (null, '$surname', '$name', '$patronymic', '$phone', '$pass', '3', '$birthday', '$photo', '$gender', '$created_at', '$achievements')";
    $result = mysqli_query($con, $query);

    if(isset($_FILES['photo'] ['tmp_name'])){
        $name = 'img/' . $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $name);
    }

    if($result){
        echo "<script>alert('Запись добавлена!'); location.href ='/'; </script>";
    } else{
        echo "<script>alert('Ошибка!');</script>";
        echo mysqli_error($con);
    }
}
?>