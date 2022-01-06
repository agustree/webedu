<?php 
error_reporting(0);
$_POST = json_decode(file_get_contents('php://input'), true);
If ( !empty($_POST['name']) && !empty($_POST['mobile'] &&  
    !empty($_POST['email']))  
        {
            $msg="Submitted successfully";
        }
    else
        {
            $msg = "Invalid data ";
        }
    echo $msg;
?>