<?php

require 'User.php';

$admin = new User (1,"admin","admin");

echo $admin -> getId();
echo $admin -> getusername();
echo $admin -> getpassword();

$user = new User (2, "user","user");

echo $user -> getId();
echo $user -> getusername();
echo $user ->getpassword();


?>