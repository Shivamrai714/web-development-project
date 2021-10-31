<?php

session_start();

if(isset($_SESSION['user_id'])) 
                                         // to cancel  conn ,check it is present or not.
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");     
                                // redirect to login.php
die;