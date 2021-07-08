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
    <title>Dashborad</title>
</head>
<style>
*{
    padding: 16px;
    margin: -5px
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
<body>
<div class="demo-content">
    <div>
        Welcome doc.<?php echo $_SESSION["name"]; ?>! Click to <a href="logout.php">Logout</a>.
        <br><br>
        <button style="background-color:black;border-radius: 20px;"><a href="emergency.php"style="color:orange;padding:5px;">Emergency Form</a></button>   
  <?php
    echo "<h1 style='color:red;'>Patients Appointment Info</h1>";
    echo "<table style='max-width: 80%;margin:0;>";
    echo "<tr><th style=' padding:2px;background-color:#777;color: #fff;'></th><th style=' padding:2px;background-color:#777;color: #fff;'>patient_id</th><th style=' padding:2px;background-color: #777;color: #fff;'>patient_name</th><th style=' padding:2px;background-color: #777;color: #fff;padding: 0.5em 1em;'>gender</th><th style=' padding:2px;background-color: #777;color: #fff;'>mobile_number</th><th style=' padding:9px;background-color: #777;color: #fff;'>date of birth</th><th style=' padding:2px;background-color: #777;color: #fff;'>street_address</th><th style=' padding:2px;background-color: #777;color: #fff;'>city</th><th style=' padding:2px;background-color: #777;color: #fff;'>zipcode</th><th style=' padding:2px;background-color: #777;color: #fff;'>country</th><th style=' padding:2px;background-color: #777;color: #fff;'>email</th><th style=' padding:2px;background-color: #777;color: #fff;'>Heart Checkup</th><th style=' padding:2px;background-color: #777;color: #fff;'>Heart Checkup</th><th style=' padding:2px;background-color: #777;color: #fff;'>Hearing Test</th><th style=' padding:2px;background-color: #777;color: #fff;'>Blood Test</th><th style=' padding:2px;background-color: #777;color: #fff;'>Normal Consulting</th><th style=' padding:2px;background-color: #777;color: #fff;'>Skin Care</th></tr>";
    
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


$servername = "http://remotemysql.com/";
$username = "dZlqhGsQpi";
$password = "iWJZMyqgQm";
$dbname = "dZlqhGsQpi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM patient_registration");
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