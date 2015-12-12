<div class="progress">
      <div class="indeterminate"></div>
  </div>

 
<?php
    session_start();

 $host_db = "127.0.0.1";
 $user_db = "root";
 $pass_db = "root";
 $db_name = "food";
 $tbl_name = "usuarios";

// Connect to server and select databse.
mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");

mysql_select_db("$db_name")or die("Cannot Select Data Base");

// sent from form
$username = $_POST['txtusuario'];
$password = $_POST['txtpassword'];

$sql= "SELECT * FROM $tbl_name WHERE username = '$username' and password='$password'";

$result=mysql_query($sql);

// counting table row
$count = mysql_num_rows($result);
// If result matched $username and $password

if($count == 1){

 $_SESSION['loggedin'] = true;
 $_SESSION['username'] = $username;
 $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

echo "<br> Bienvenido! " . $_SESSION['txtusuario'];
header("Location:inicio.php");
}
 else {
 echo "<br/>Username o Password estan incorrectos.<br>";

 echo "<a href='prueba.html'>Volver a Intentarlo</a>";
}
mysql_close();
?>
   
        
  

