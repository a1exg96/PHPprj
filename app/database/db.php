<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect = mysqli_connect('mysql','root','root','db','3306');
//require 'connect.php';

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

//function dbCheckErr($query){
//    $errInfo = $query->error;
//    if ($errInfo[0] !== PDO::ERR_NONE){
//        echo $errInfo[2];
//        exit();
//    }
//    return true;
//}

//Запит на отримання всіх строк з таблиці
function selectAll($table){
    global $connect;
    $sql = mysqli_query($connect, "SELECT * FROM $table");
    if ($sql->num_rows > 0) {
        return $sql->fetch_all(MYSQLI_ASSOC);
    }    else{
        echo "0 result";
    }
}
//Запит на отримання однії строки з таблиці
function selectOne($table, $params = []){
    global $connect;
//       $table = 'users';
    $sql = "SELECT * FROM $table";
    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . "  WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";
//    echo '<br>';

      $query = mysqli_query($connect, $sql);
      return mysqli_fetch_array($query, MYSQLI_ASSOC);
//      $query = $connect->prepare($sql);
//      $query->execute();
//      $result = $query->get_result();
//      while ($row = mysqli_fetch_assoc($result)){
//            foreach ($row as $r){
//                return $r;
//            }
//      }

}
//$params = [
//    'admin' => 0,
//    'username' => 'Annya',
//];

//Запис в таблицю
function insert($table, $params){
    global $connect;
    $i=0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $coll = $coll . "$key";
            $mask = $mask . "'$value'";
        } else{
            $coll = $coll . ", $key";
            $mask = $mask . ", '$value'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    $connect->query($sql);
    return $connect->insert_id;
}

$arrData = [
    'admin' => '0',
    'username' => '4ik4aryk',
    'email' => '4ik@4ik.4ik',
    'password' => 'sfkens'
];

//Оновлення даних строки в таблиці
function update($table, $id, $params){
    global $connect;
    $str = '';
    $i=0;
    foreach ($params as $key => $value){
        if ($i === 0){
            $str = $str . $key . " = '". $value."'";
        } else{
            $str = $str .", ". $key . " = '". $value."'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
//    tt($sql);
    $connect->query($sql);
}
//Видалення запису в таблиці
function delete($table,$id){
    global $connect;
    $sql = "DELETE FROM $table WHERE id = ". $id;
//    tt($sql);
    $connect->query($sql);
}