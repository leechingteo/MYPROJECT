<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require('dbconnect.php');


?>
<html>
<head>
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
</head>
    <body id="Contact">
      
       <?php
        session_start();
        include_once 'dbconnect.php';
        define('TITLE','Contact');
        require('Menu.php');
       ?>
        <div class="container">
        <div class="row">
        <div class="col-md-5 col-md-offset-4 well">
            <form role="form" action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Contact Us</legend>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Your Name" required class="form-control" />
                        
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                       
                    </div>
        
                    
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea cols="20" rows="10" name="comment" placeholder="Your Comment" required class="form-control" ></textarea>
                       
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                    </div>
       
                    
                   
                    </fieldset>
                    </form>
                    <?php
                   
                   

                       if(isset($_POST['submit']))
                       {
                       $name=$_POST['name'] ;
                       $comment=$_POST['comment'];
                       if($name&& $comment)
                       {
                       $insert=mysqli_query($con,"INSERT INTO comment(name,comment) VALUES('$name','$comment')");
                       echo "Successfully sent";
                       }
                       else
                       {
                       echo "Please fill out all the fields";
                       }
        
                       }

                    
                    ?>
                    </div>
            
            </div>
            
            <br><br>
              <br><br>
                <br><br>
        </div>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script src="js/script.js"></script>
       <?php require('Footer.php');?>
    </body>
</html>