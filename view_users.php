<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>Users Information</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body id='viewusers'>
        <?php
        session_start();
        include 'dbconnect.php';
        
        
        include 'function.php';
        
        require ('title_bar.php');
       ?>
            <div class="container">
            <div class="row">
            <div class="col-md-8 ">
            <h2>Users Information</h2>
          
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "testdb";
             $conn = new mysqli($servername, $username, $password, $dbname);
             if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             } 
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
             
        
            if ($result->num_rows > 0) {
            echo "<table class='table table-hover'>";
            echo "<thead>";
            echo "<tr><th style='width:600px;border:1px solid black;'>ID</th>
                  <th style='width:600px;border:1px solid black;'>Username</th><th style='width:200px;border:1px solid black;'>Email</th></tr>";
            echo "</thead>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td style='width:600px;border:1px solid black;'>".$row["id"]."</td><td style='width:600px;border:1px solid black;'>".$row["username"]
                      ."</td><td style='width:200px;border:1px solid black;'>"." ".$row["email"]."</td></tr>";

            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
           
            
            
           
             </div>
    </div>
</div>
        
     
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <?php require('Footer.php');?>
    </body>
</html>
