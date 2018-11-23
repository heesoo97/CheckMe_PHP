<?php
    $connect = @mysql_connect("localhost","root","hanium") or die("error");
    $dbname = "queen";
    $dbconn = mysql_select_db($dbname,$connect);

    $id = $_POST['id'];

    $query_search = "select * from Std_subject a, Subject b where a.subject_id = b.subject_id AND std_id = '".$id. "'";
    $query_exec = mysql_query($query_search) or die(mysql_error());
       
    $rows = mysql_num_rows($query_exec);
    
    echo "$rows<BR>";
    
    
    //$search_name = "select subject_name from Subject";
    //$exec_name = mysql_query($search_name) or die(mysql_error());    
    
    //while ($row = mysql_fetch_row($exec_name)) {
    //    echo "$row[0]<BR>";
    //}
?>
