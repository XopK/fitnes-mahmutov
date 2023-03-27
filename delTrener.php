<?php
$con = mysqli_connect("localhost","root", "root", "fitnes");
    $trener_id = !empty($_GET['trener'])?$_GET['trener']:null;
    if($trener_id !== null){
        $query = "DELETE FROM users where id_user = '$trener_id'";
    
    $result = mysqli_query($con, $query);

    if($result){
        echo "<script>alert('Запись удалена!'); location.href ='/'; </script>";
    } else{
        echo "<script>alert('Ошибка!');</script>";
        echo mysqli_error($con);
    }
}
?>