<?php
    $connect = @mysql_connect("localhost","root","hanium") or die("error");
    $dbname = "queen";
    $dbconn = mysql_select_db($dbname,$connect);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_search = "select subject_name from Subject";
    $query_exec = mysql_query($query_search) or die(mysql_error());
    
    $rows = mysql_num_rows($query_exec);

    echo $rows;
?>
