<?php  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
setcookie("user", "", 1);
header("Location: Customer_Care.php");//use for the redirection to some page  
?> 