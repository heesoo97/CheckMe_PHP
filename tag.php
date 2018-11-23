<?php
    $connect = @mysql_connect("localhost","root","hanium") or die("error");
    $dbname = "queen";
    $dbconn = mysql_select_db($dbname,$connect);

    $subject_name = $_POST['subject_name'];
    $date = $_POST['date'];
    $std_id = $_POST['std_id'];
    
    $query1 = "select * from Tag where std_id='".$std_id. "' AND 
              subject_name='".$subject_name. "' AND date='".$date. "'";
              
    $exec1 = mysql_query($query1) or die(mysql_error());
    
    $rows1 = mysql_num_rows($exec1);
    
    echo "$rows1<BR>";
    
    if ($rows1 == '4') {
        $query2 = "UPDATE Attendance2 SET attendance_result='cs' WHERE std_id='".$std_id. "' AND 
              subject_name='".$subject_name. "' AND date='".$date. "'";
        
        $exec2 = mysql_query($query2) or die(mysql_error());
    }
    else if ($rows1 == '1') {
        $query2 = "UPDATE Attendance2 SET attendance_result='ks' WHERE std_id='".$std_id. "' AND 
              subject_name='".$subject_name. "' AND date='".$date. "'";
        
        $exec2 = mysql_query($query2) or die(mysql_error());
    }
    else {
        echo "no<BR>";
    }
?>
