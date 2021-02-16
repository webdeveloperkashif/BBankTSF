<?php


$mysqli=new mysqli('localhost','root','Bank')

$mysqli->query("INSERT into customer (name) values('kashif')")

$id=$mysqli->inser_id;


$mysqli->query("INSERT into cust_details (assign_user,details) values('$id','Cust Name')")


?>