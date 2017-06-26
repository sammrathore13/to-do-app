<?php

$dba = new Mysqli;

$dba->connect('localhost','root','','todo') ;

if($dba){


	echo 'success';
}
?>