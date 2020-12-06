<?php

function delete($table,$colName, $id){
global $connection;
$query= mysqli_query($connection, "DELETE FROM $table WHERE $colName= $id");
if($query){
    return true;
}else{
    return false;
}

}



function redirect($page= 'index.php'){
    header("Location:".$page."");
}
?>