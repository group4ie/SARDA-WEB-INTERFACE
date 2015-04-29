<?php
 $config= array ('db_username' =>'root',
                  'db_password'=>'',
                  'db_host'=>'localhost');


$conn= new PDO("mysql:host=localhost;
               dbname=sarda",$config['db_username'],$config['db_password'] );
?>
