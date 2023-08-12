<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <h1>ADD a Book</h1>

        <form action="add.php" method="get">
            <label for="access">Enter Access number:</label>
            <input type="text" name="access" id="acc">
            <label for="title">Enter Title :</label>
            <input type="text" name="title" id="tit">
            <label for="author">Enter Author name:</label>
            <input type="text" name="author" id="auth">
            <input type="submit" value="Submit" name="submit">
        </form>
    </pre>
<?php
    if(isset($_GET["submit"])){
        try{
        $conn = mysqli_connect("localhost", "root", "admin@123", "db");
        $access=$_GET["access"];
        $title=$_GET["title"];
        $author=$_GET["author"];


        $query = "insert into books(access_no,title,author) values($access,'$title','$author')";
         mysqli_query($conn, $query);
        echo "<p style='color:green;'>ADDED SUCCESSFULLY</p>";
        }
         catch(Exception $e){
            echo "<p style='color:red;'>ERROR HAS OOCURE</p>";
         }
         mysqli_close($conn);
    }
?>
</body>
</html>
