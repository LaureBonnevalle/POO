<?php

require 'Character.php';

$Perso1 = new Character ($id=1);

echo $Perso1 -> getFullName();

$Perso2 = new Character ($id=2);

setfirstname("Sarah");
setlastname("Connor");

echo $Perso2 -> getId();




?>