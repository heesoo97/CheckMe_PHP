<?php
    $connect = @mysql_connect("localhost","root","hanium") or die("error");
    $dbname = "queen";
    $dbconn = mysql_select_db($dbname,$connect);

    $std_id = $_POST['std_id'];
    $subject_name = $_POST['subject_name'];

    $today = date("Y-m-d");
    //echo "$today<BR>";
    $str_today = strtotime($today);

    $query1 = "SELECT count(*) 
                 FROM Tag 
                 WHERE std_id='".$std_id. "' 
                     AND subject_name='".$subject_name. "'
                     AND date <= curdate()
                 GROUP BY date";
    
    /*$query1 = "SELECT count(*) 
               FROM Tag 
               WHERE std_id='2' 
                   AND subject_name='SERVER ADMINISTRATION AND SECURITY' 
                   AND date <= curdate()
               GROUP BY date";*/
    
    $exec1 = mysql_query($query1) or die(mysql_error());
    
    $row1 = mysql_num_rows($exec1);    
    
    //echo "$row1<BR>";
    
    while ($row1 = mysql_fetch_row($exec1)) {
        echo "$row1[0]<BR>";
    }
    
    $query2 = "SELECT count(*) 
               FROM Tag 
               WHERE std_id='2' 
                   AND subject_name='SERVER ADMINISTRATION AND SECURITY' 
                   AND date > curdate()
               GROUP BY date";
    
    $exec2 = mysql_query($query2) or die(mysql_error());
    
    $row2 = mysql_num_rows($exec2);    
    
    //echo "$row2<BR>";
    
    while ($row2 = mysql_fetch_row($exec2)) {
        echo "a<BR>";
    }
    /*
    for ($i = 0; $i < $mysql_fetch_row($exec1); $i++) {
        echo "$result[$i]<BR>";
    }*/
    
    /*while ($rows1 = mysql_fetch_row($exec1)) {
        echo "$rows1[0]<BR>";
    }*/
?>
