<?php
    $connect = @mysql_connect("localhost","root","hanium") or die("error");
    $dbname = "queen";
    $dbconn = mysql_select_db($dbname,$connect);

    $subject_name = $_POST['subject_name'];

    $query1 = "select * from Subject where subject_name = '".$subject_name. "'";
    //$query1 = "select * from Subject where subject_name = 'Cloud Computing'";
    $exec1 = mysql_query($query1) or die(mysql_error());
    
    while ($row1 = mysql_fetch_row($exec1)) {
        echo "$row1[1]<BR>";  //subject_name
        echo "$row1[2]<BR>";  //start_time
        echo "$row1[3]<BR>";  //end_time
        echo "$row1[4]<BR>";  //subject_date
        echo "$row1[5]<BR>";  //subject_classnum
        echo "$row1[6]<BR>";  //prof
    }
    
    //$query2 = "select a.date from Sem_date a, Subject b where a.subject_date = b.subject_date AND b.subject_name = 'SERVER ADMINISTRATION AND SECURITY'";
    $query2 = "select a.date from Sem_date a, Subject b where a.subject_date = b.subject_date AND b.subject_name = '".$subject_name. "'";
    $exec2 = mysql_query($query2) or die(mysql_error());
    
    $rows2 = mysql_num_rows($exec2);
    
    echo "$rows2<BR>";
    
    while ($row2 = mysql_fetch_row($exec2)) {
        echo "$row2[0]<BR>"; //date      
    }
?>

