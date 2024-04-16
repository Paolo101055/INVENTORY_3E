<?php

include('db.php;');

function AccessName($id){
    global $conn;
    $query = 'SELECT accessName FROM accesstype where access_id=?';
    $stmt =  $conn->prepare($query);
    $stmt->bind_param('i',$id);
    $stmt-> execute();
    $stmt-> bind_result($accessName);
    $stmt->fetch();
    $stmt->close();
    return $accessName;


}

?>