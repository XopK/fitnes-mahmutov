<?php
$con = mysqli_connect("localhost", "root", "root", "fitnes");;
if (!empty($_POST)) {
    $goal = $_POST['goal'];
    $user_req = $_POST['idUser'];
    $trener_req = $_POST['treners'];
    $created2 = date("Y-m-d H-i-s");
    $created_at = date("Y-m-d");
    // $select = mysqli_fetch_array(mysqli_query($con, "select id_request from requestes order by id_request desc"))[0];
    // $select++;
    $query = "insert into requestes(id_request, client_req, reason, trainer_req, date_req, purpose) values(null, '$user_req', '$goal', '$trener_req','$created_at', '-')";
    $result = mysqli_query($con, $query);

    $id_req = mysqli_insert_id($con);
    $query2 = "insert into status_request(id_request , stat, update_req) values($id_req, '1', '$created2')";
    $result2 = mysqli_query($con, $query2);
    if ($result && $result2) {
        echo "<script>alert('Заявка отправлена!'); location.href ='/'; </script>";
    } else {
        echo "<script>alert('Ошибка!');</script>";
        echo mysqli_error($con);
    }
}
