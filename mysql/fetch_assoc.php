<?php
if(!function_exists('mysql_err_fun')){
    include "config.php";
}



// with zero id
/*
mysql_0id_fetch_assoc('table_name', $con)
*/

function mysql_0id_fetch_assoc(String $table_name, $con)
{


    $search_q = mysqli_query($con, "SELECT * FROM `$table_name` ");
    if (!$search_q) {
        mysql_err_fun("Server Error: mysql_0id_fetch_assoc (search_q)=" . $table_name);
    }
    // count 
    $count = mysqli_num_rows($search_q);

    if ($count != 1) {
        mysql_err_fun("Server Error: mysql_0id_fetch_assoc (count)=" . $count);
    }

    $data = mysqli_fetch_assoc($search_q);
    return $data;
}

// with one id
/*
mysql_1id_fetch_assoc('id_name_1', $id_value_1,'table_name', $con)
*/

function mysql_1id_fetch_assoc(String $id_name_1, $id_value_1, String $table_name, $con)
{
  

    $search_q = mysqli_query($con, "SELECT * FROM `$table_name` WHERE `$id_name_1`='$id_value_1'");
    if (!$search_q) {
        mysql_err_fun("Server Error: mysql_1id_fetch_assoc (search_q)=" . $id_name_1);
    }
    // count 
    $count = mysqli_num_rows($search_q);

    if ($count != 1) {
        mysql_err_fun("Server Error: mysql_1id_fetch_assoc (count)=" . $count);
    }

    $data = mysqli_fetch_assoc($search_q);
    return $data;
}

// with two id
/*
mysql_2id_fetch_assoc('id_name_1', $id_value_1,'id_name_2', $id_value_2,'table_name', $con)
*/

function mysql_2id_fetch_assoc(String $id_name_1, $id_value_1,String $id_name_2, $id_value_2, String $table_name, $con)
{
  

    $search_q = mysqli_query($con, "SELECT * FROM `$table_name` WHERE `$id_name_1`='$id_value_1' AND `$id_name_2`='$id_value_2'");
    if (!$search_q) {
        mysql_err_fun("Server Error: mysql_2id_fetch_assoc (search_q)=" . $id_name_1.$id_name_2);
    }
    // count 
    $count = mysqli_num_rows($search_q);

    if ($count != 1) {
        mysql_err_fun("Server Error: mysql_2id_fetch_assoc (count)=" . $count);
    }

    $data = mysqli_fetch_assoc($search_q);
    return $data;
}

// with three id
/*
mysql_3id_fetch_assoc('id_name_1', $id_value_1,'id_name_2', $id_value_2,'id_name_3', $id_value_3,'table_name', $con)
*/

function mysql_3id_fetch_assoc(String $id_name_1, $id_value_1,String $id_name_2, $id_value_2, String $id_name_3, $id_value_3,String $table_name, $con)
{
  

    $search_q = mysqli_query($con, "SELECT * FROM `$table_name` WHERE `$id_name_1`='$id_value_1' AND `$id_name_2`='$id_value_2'AND `$id_name_3`='$id_value_3'");
    if (!$search_q) {
        mysql_err_fun("Server Error: mysql_3id_fetch_assoc (search_q)=" . $id_name_1.$id_name_2.$id_name_3);
    }
    // count 
    $count = mysqli_num_rows($search_q);

    if ($count != 1) {
        mysql_err_fun("Server Error: mysql_3id_fetch_assoc (count)=" . $count);
    }

    $data = mysqli_fetch_assoc($search_q);
    return $data;
}













