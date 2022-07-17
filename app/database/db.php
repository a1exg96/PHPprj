<?php

require ('connect.php');
//
//$id = 'id';
//$admin = 'admin';
//$username = 'username';
//$email = 'email';
//$created = 'created';


function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';

}

function selectAll($table){
    global $connect;
    $sql = mysqli_query($connect, "SELECT * FROM $table");
    if ($sql->num_rows > 0) {
        return $sql->fetch_all(MYSQLI_ASSOC);
    }    else{
        echo "0 result";
    }

}

function selectOne($table, $params = []){
    global $connect;
//       $table = 'users';
    $sql = "SELECT * FROM $table";
    if (!empty($params)) {
//        return tt($params);
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
//    $sql = $sql . " LIMIT 1";
    tt($sql);
//    exit();
    echo '<br>';
      $query = $connect->prepare($sql);
      $query->execute();
//      var_dump($query);
      $result = $query->get_result();
      while ($row = mysqli_fetch_assoc($result)){
            foreach ($row as $r){
                echo '<pre>';
                print "$r";
                echo '</pre>';
            }
      }

}
$params = [
//    'admin' => 0,
//    'username' => 'Annya',
];

tt(selectOne('users', $params));
//selectOne('users', $params);

//tt(selectAll('users'));