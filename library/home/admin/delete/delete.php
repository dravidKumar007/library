<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete a book</h1>
   <pre>
    <form action="delete.php" method="get">
        <label for="access">Enter access no:</label><input type="text" name="access" id="acc"> <input type="submit" name="aces" value="DELETE">
        <label for="title">Enter title:</label><input type="text" name="title" id="tit"> <input type="submit" name="titl" value="DELETE">
        <?php
        if(isset($_GET['aces'])){
            try{
            $conn = mysqli_connect("localhost", "root", "admin@123", "db");
            $access=$_GET["access"]; 
            $query = "delete from books where access_no=$access;";
              mysqli_query($conn, $query);
              echo "<p style='color:green;'>DELETED SUCCESSFULLY</p>";
            }
             catch(Exception $e){
                echo "<p style='color:red;'>ERROR HAS OOCURE</p>";
             }
            mysqli_close($conn);
        }
        if(isset($_GET['titl'])){
            try{
            $conn = mysqli_connect("localhost", "root", "admin@123", "db");
            $title=$_GET["title"]; 
            $query = "delete from books where title='$title';";
              mysqli_query($conn, $query);
              echo "<p style='color:green;'>DELETED SUCCESSFULLY</p>";
            }
             catch(Exception $e){
                echo "<p style='color:red;'>ERROR HAS OOCURE</p>";
             }
            mysqli_close($conn);
        }
        ?>
    </form>
   </pre>

</body>
</html>