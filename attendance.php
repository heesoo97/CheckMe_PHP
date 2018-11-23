<?php
  $connect=@mysql_connect("localhost","root","hanium") or die("error");
  $dbname="queen";
  $dbconn=mysql_select_db($dbname,$connect);
  
  $subject_name = $_POST['subject_name'];
  $date = $_POST['date'];
  $std_id = $_POST['std_id'];
    
      $query1 = "select attendance_result from Attendance2 where std_id='".$std_id. "' AND 
                 subject_name='".$subject_name."'";
      //$query1 = "select attendance_result from Attendance2 where std_id='1' AND 
                 //subject_name='SERVER ADMINISTRATION AND SECURITY'";
              
    $exec1 = mysql_query($query1) or die(mysql_error());
    
    $rows1 = mysql_num_rows($exec1);
    
    //echo "$rows1<BR>";
    
    while ($row1 = mysql_fetch_row($exec1)) {
        echo "$row1[0]a<BR>"; //출석 결과     
    }
?>
