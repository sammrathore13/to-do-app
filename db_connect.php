<? php
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','todo');
$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
// connetion is setup with mysql

$dbcon = mysql_select_db(DBNAME);

if (!conn){

	die("connection failed :".mysql_error());
}

   if (!dbcon){


die('database cannot link:'.mysql_error());

   }
  // else {

   //	echo('connected to db');     <th scope="row"><?php  echo $row['id'] ?></th>
   //     }
?>
