<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_opretions");


$connnection = mysqli_connect(HOSTNAME, USERNAME,PASSWORD,DATABASE);



if(!$connnection){
    die("Connection failed");
}

?>