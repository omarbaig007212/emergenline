<?php 
session_start();
if(empty($_SESSION["name"])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/> 
<meta http-equiv="Content-Type" content="charset=utf-8" />
    <title>Info</title>
    <style>
*{
    padding: 16px;
    padding-top: 16px;
    padding-right: 16px;
    padding-bottom: 16px;
    padding-left: 16px;
    margin: -2px;
}
body {
    font-family: Arial;
    text-align: center;
    background-image: url("123.png");
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.demo-content {
    margin: 30px;
    padding: 20px;
    display: inline-block;
}

</style>
    </head>
<body>
<div class="demo-content">
    <div>
         Welcome doc.<?php echo $_SESSION["name"]; ?>! Click to <a href="logout.php">Logout</a>.
        <br><br>
        <button style="background-color:black;border-radius: 20px;"><a href="dashboard.php"style="color:orange;padding:5px;">Appointment Form</a></button>   
    <?php
    echo "<h1 style='color:red;'>Emergency Records</h1>";
    echo "<table style='max-width: 100%;margin:0;>";
    echo "<tr><th style=' padding:2px;background-color:#777;color: #fff;'></th><th style=' padding:2px;background-color:#777;color: #fff;'>First_name</th><th style=' padding:2px;background-color: #777;color: #fff;'>Last_name</th><th style=' padding:2px;background-color: #777;color: #fff;padding: 0.5em 1em;'>gender</th><th style=' padding:2px;background-color: #777;color: #fff;'>date_of_birthday</th><th style=' padding:9px;background-color: #777;color: #fff;'>PhoneNumber</th><th style=' padding:2px;background-color: #777;color: #fff;'>Address</th><th style=' padding:2px;background-color: #777;color: #fff;'>city</th><th style=' padding:2px;background-color: #777;color: #fff;'>Homephone</th></tr>";
    
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 250px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}


$servername = "remotemysql.com";
$username = "dZlqhGsQpi";
$password = "iWJZMyqgQm";
$dbname = "dZlqhGsQpi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM emergency_form");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
</div>
</div>
</body>
</html>
