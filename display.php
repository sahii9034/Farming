<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "mydb");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$result = mysqli_query($con, "SELECT * FROM products");

// Check if there are records
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Farmer's Name</th>
            <th>Seed Name</th>
            <th>Size (kg)</th>
            <th>Count</th>
            <th>Price (₹)</th>
            <th>Address</th>
            <th>Contact Number</th>
          </tr>";

    // Fetch each row and display in table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['farmerName']) . "</td>
                <td>" . htmlspecialchars($row['seedName']) . "</td>
                <td>" . htmlspecialchars($row['size']) . "</td>
                <td>" . htmlspecialchars($row['count']) . "</td>
                <td>" . htmlspecialchars($row['price']) . "</td>
                <td>" . htmlspecialchars($row['address']) . "</td>
                <td><a href='tel:" . htmlspecialchars($row['contactNumber']) . "'>" . htmlspecialchars($row['contactNumber']) . "</a></td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

mysqli_close($con);
?>
