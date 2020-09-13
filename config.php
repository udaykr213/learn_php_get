<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','ROOT');
define('DB_PASSWORD','');
define('DB_NAME','LOGIN');
&conn=mysqli_connnect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
IF($conn==false){
    dir("error:cannot connect");
}

?>