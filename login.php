<?php
    $connect = @mysql_connect("localhost","root","hanium") or die("error");
    $dbname = "queen";
    $dbconn = mysql_select_db($dbname,$connect);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_search = "select * from Student where std_id = '".$username."' AND std_pw = '".$password. "'";
    $query_exec = mysql_query($query_search) or die(mysql_error());
    
    $rows = mysql_num_rows($query_exec);

    if($rows == 0) {
        echo "a<BR>";
    }
    else  {
        echo "b<BR>";
    }
    
    $query_search2 = "select subject_name from Std_subject a, Subject b where a.subject_id = b.subject_id AND std_id = '".$username. "'";
    $query_exec2 = mysql_query($query_search2) or die(mysql_error());
       
    $rows2 = mysql_num_rows($query_exec2);
    
    echo "$rows2<BR>";
    
    //$search_name = "select subject_name from Subject";
    //$exec_name = mysql_query($search_name) or die(mysql_error());    
    
    while ($rows2 = mysql_fetch_row($query_exec2)) {
        echo "$rows2[0]<BR>";
    }
?>
