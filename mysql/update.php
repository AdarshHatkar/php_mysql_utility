<?php
if(!function_exists('mysql_err_fun')){
    include "config.php";
}
/*


 depreciated 
mysql_1d_1id_update() => mysql_1data_1id_update()
*/





// with one data and one id
/*
$mysql_1data_1id_update=mysql_1data_1id_update('data_name_1', $data_value_1, 'id_name_1',  $id_value_1, 'table_name', $con);
*/

function mysql_1data_1id_update(String $data_name_1, $data_value_1, String $id_name_1,  $id_value_1, String $table_name, $con)
{
    


    $update_q = mysqli_query($con, "UPDATE `$table_name` SET `$data_name_1`='$data_value_1' WHERE `$id_name_1`='$id_value_1'");

    if (!$update_q) {
        mysql_err_fun("Server Error: mysql_1data_1id_update (update_q)=" . $data_name_1 + $id_name_1);
    }

    return true;
}





function mysql_1data_2id_update(String $data_name_1, $data_value_1, String $id_name_1,  $id_value_1,String $id_name_2,  $id_value_2, String $table_name, $con)
{
    


    $update_q = mysqli_query($con, "UPDATE `$table_name` SET `$data_name_1`='$data_value_1' WHERE `$id_name_1`='$id_value_1' and  `$id_name_2`='$id_value_2' ");

    if (!$update_q) {
        mysql_err_fun("Server Error: mysql_1data_1id_update (update_q)=" . $data_name_1 + $id_name_1 + $id_name_2);
    }

    return true;
}

