

    <?php
     /*La conexion entre php y mysql, se realizo utilizando PDO*/

    echo $email = (string) $_POST["txtemail"];
    echo "  ";
        echo $nombre = (string)$_POST["txtnombre"];
        echo "  ";
            echo $ape =(string) $_POST["txtapellido"];
    echo "  ";

    echo $user = (string)$_POST["txtusername"];
    echo "  ";
    echo $pass = $_POST["txtpassword"];
    echo "  ";
        echo $edad = (int)$_POST["txtedad"];
     echo "  ";
            echo $sexo = (string)$_POST["sexo"];
    echo "  ";



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "food";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
     mysql_query ("SET email 'utf8'");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuarios (username, password, email, nombre,apellidos,edad,sexo)
    VALUES ('$user', '$pass', '$email', '$nombre','$ape',$edad,'$sexo');";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location:index.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;





    ?>

