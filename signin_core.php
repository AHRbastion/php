<?php 
require_once("config.php");
if (isset($_REQUEST["emailaddr"]) && isset($_REQUEST["pwd"])){
    $emailaddr=$_REQUEST["emailaddr"];
    $pwd=md5(sha1($_REQUEST["pwd"]));

    
    $mathQuery="SELECT * FROM users WHERE email_addr='$emailaddr' AND usr_pwd='$pwd'";
    $runQuery=mysqli_query($conn,$mathQuery);
    $checkCount=mysqli_num_rows($runQuery);
    if ($runQuery==true) {
    while($data=mysqli_fetch_array($runQuery)){
        $fullname= $data["full_name"];
    }
        $authToken=md5(sha1($emailaddr.$fullname));
        if ($checkCount===1) {
            setcookie("PHPLGADP",$authToken,time()+86400*360);
            header("location:index.php");
        } else {
            header("location:signin.php?wrongUsrPwd");
        }
    }
    
   
    
}else{ 
    header("location:signin.php");
}

?>