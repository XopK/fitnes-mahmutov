<?php
$con = mysqli_connect("localhost","root", "root", "fitnes");

if(!empty($_POST)){
    $trener_id = $_POST['id_user'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = !empty($_POST['patronymic']) ? $_POST['patronymic'] : '-';
    $birthday = $_POST['date_birthday'];
    $phone = $_POST['phone_number'];
    $photo = $_FILES['photo'] ['name'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];
    $achievements = !empty($_POST['achievements']) ? $_POST['achievements'] : "-";
    $query = "UPDATE users SET surname = '$surname', name = '$name', patronymic = '$patronymic', date_birthday = '$birthday', phone_number = '$phone', photo = '$photo', gender = '$gender', password = '$pass', achievements = '$achievements' WHERE id_user = '$trener_id'";
    $result = mysqli_query($con, $query);
    
    if(isset($_FILES['photo'] ['tmp_name'])){
        $name = 'img/' . $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $name);
    }
    
    if($result){
        echo "<script>alert('Запись обновлена!'); location.href ='/'; </script>";
    } else{
        echo "<script>alert('Ошибка!');</script>";
        echo mysqli_error($con);
    }
}
?>