<?php
$conn = mysqli_connect("localhost", "root", "admin@123", "db");
if ($conn) {
    echo "Connection established";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

mysqli_query($conn, "USE db;");
try{
$query = "SELECT * FROM `login`;";
$result = mysqli_query($conn, $query);

}catch(Exception $e) {echo "reeor";}
if ($result) {
    // Process the query result here
    while ($row = mysqli_fetch_assoc($result)) {
        // Process each row of data
         echo $row['id'];
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
