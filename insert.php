<?php  
error_reporting(E_ALL); 
ini_set('display_errors',1); 

$link=mysqli_connect("localhost","root","hanium","queen"); 
if (!$link)  
{ 
   echo "MySQL 접속에러 : ";
   echo mysqli_connect_error();
   exit();
}  


mysqli_set_charset($link,"utf-8");  

//POST 값을 읽어옵니다.
$std_id=isset($_POST['std_id']) ? $_POST['std_id'] : '';  
$std_name=isset($_POST['std_name']) ? $_POST['std_name'] : '';
$std_mail=isset($_POST['std_mail']) ? $_POST['std_mail'] : '';
$std_telephone=isset($_POST['std_telephone']) ? $_POST['std_telephone'] : '';
$std_pw=isset($_POST['std_pw']) ? $_POST['std_pw'] : '';
 
if ($std_id !="" and $std_name !="" and $std_mail != "" and $std_telephone != "" and $std_pw != ""){   
  
    $sql="insert into Student(std_id, std_name, std_mail, std_telephone, std_pw) values('$std_id', '$std_name', '$std_mail', '$std_telephone', '$std_pw')";  
    $result=mysqli_query($link,$sql);  

    if($result){  
       echo "SQL문 처리 성공";  
    }  
    else{  
       echo "SQL문 처리중 에러 발생 : "; 
       echo mysqli_error($link);
    } 
 
} else {
    echo "데이터를 입력하세요";
}


mysqli_close($link);
?>

<?php

$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

if (!$android){
?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
   <body>
   
      <form action="<?php $_PHP_SELF ?>" method="POST">
         학번: <input type = "text" name = "std_id" /> <br/>
         이름: <input type = "text" name = "std_name" /> <br/>
	       메일: <input type = "text" name = "std_mail" /> <br/>
	       전화번호: <input type = "text" name = "std_telephone" /> <br/>
	       비밀번호: <input type = "text" name = "std_pw" /> <br/>
         <input type = "submit" />
      </form>
   
   </body>
</html>
<?php
}
?>
