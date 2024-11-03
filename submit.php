<?php
session_start();
?>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session
    $_SESSION['products'][] = [
        'weight' => $_POST['weight'],
        'count' => $_POST['count'],
        'size' => $_POST['size'],
        'seedName' => $_POST['seedName'],
        'contactNumber' => $_POST['contactNumber'],
        'farmerName' => $_POST['farmerName']
    ];

    // Redirect to display page
    header('Location: practice.php');
    exit();
}
?>
