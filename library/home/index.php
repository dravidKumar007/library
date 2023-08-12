<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: block;
            margin: auto;
/*            background: linear-gradient(90deg, #ce1eed, #7f00d3);*/
background-color: white;
            width:300px;
            height:357px;
            margin-top: 30vh;
            box-shadow:0 0 10px #5f5f5f3b;
            border: 2px solid black;
        }
        form{
            margin-top: 50px;
        }
        input{
            display: block;
            margin: .1px auto ;
            font-size: larger;
            
        }
        
        input:hover{box-shadow: 0 0 20px #404040c7;}
        .button:hover{box-shadow:0 0 20px #faeffd;}
        label{
            font-size: x-large;
        }
    </style>
</head>
<body>
    <div id="content">
        
        <h1 style="padding-top:10px ; text-align: center;  text-shadow: 0 0 20px #45454537; font-size: 35px; ">Login</h1>
        <form  method="get" action="index.php">
            <pre>
    <label for="id">Enter Your ID</label>
            <input type="text" name="id" >

    <label for="pass" >Enter Password</label>
            <input type="password" name="pass">
            <input style=" border: 2px rgb(34, 34, 34) solid;
            border-radius: 10px;
            background-color: black;
            color:white;
            font-size: larger;" type="submit" name="login" value="Submit" id="button"> 
            </pre>
        </form>
        
        </div>
</body>
</html>
<?php
if (isset($_GET['login'])) {
    $conn = mysqli_connect("localhost", "root", "admin@123", "db");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $id =  $_GET['id'];
     $pass =  $_GET['pass'];

    $query = "SELECT * FROM `login` WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) { // Check if query was successful
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row["pass"] == $pass) {
                $newLocation = "admin/admin.html";
                header("Location: $newLocation");
            } else {
                echo "Wrong password";
            }
        } else {
            echo "Wrong ID. Please try again";
        }
    } else {
        echo "Query execution failed: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

