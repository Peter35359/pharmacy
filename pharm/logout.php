<?php
if(session_status()==php_SESSION_NONE)
{session_start();//start session if session not started
}
unset($_SESSION['ogged-id']);
unset($_SESSION['logged_type']);

if(!isset($_SESSION['logged_id'])){
    header('location: index.php');
}//end isset
    