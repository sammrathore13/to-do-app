
<?php 
include 'db.php';

if(isset($_POST['send'])){


$name = $_POST['tasks'];


$sql = "insert into list (task) values ('$name')";

$val = $dba->query($sql);

if($val){

	header('location: index.php');
}else{

	echo "error";
}

}



 ?>