<?php
$name = $_POST["name"];
$aadhar = $_POST["aadhar"];
$password = $_POST["password"];
$connection = mysqli_connect("localhost", "root", "", "mydb");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM farmer WHERE name = '$name' AND aadhar = '$aadhar' AND password = '$password'";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
    header('Location: sellings.html');
    exit();
} else {
    echo "<h1>Unsuccessful</h1>";
}
mysqli_close($connection);
?>
