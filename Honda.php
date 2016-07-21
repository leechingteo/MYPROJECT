<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Honda</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
    <body id="Honda">
       <?php
        session_start();
        include_once 'dbconnect.php';
        define('TITLE','Honda');
        require('Menu.php');
       ?>
        
        <div class="container">
        
        
        <div class="panel-heading panel-heading-blue">
    <h3 class="panel-title">Honda Categories</h3>
    
</div>
<div class="panel-body">
    <div class="row">
       <div class="row">
                <div class="col-md-6">
                    <a href="HONDA_ACCORD_SEDAN.php" class="thumbnail"><img src="imageH/2013_honda_accord_sedan_front34.jpg" alt="honda_accord_sedan">
                    <p>Honda Accord Sedan</p>
                    </a>
        	</div>
                <div class="col-md-6">
          		<a href="HONDA_ACCORD_COUPE.php" class="thumbnail"><img src="imageH/2016-Honda-Accord-Coupe-concept.jpg" alt="Honda-Accord-Coupe">
                        <p>Honda Accord Coupe</p>
                        </a>
        	</div>
      	</div>
        
         <div class="row">
                <div class="col-md-6">
                    <a href="HONDA_CIVIC_SEDAN.php" class="thumbnail"><img src="imageH/WH.jpg" alt="Honda Civic Sedan">
                        <p>Honda Civic Sedan</p>
                        </a>
        	</div>
                <div class="col-md-6">
          		<a href="HONDA_ACCORD_HYBRID.php" class="thumbnail"><img src="imageH/maxresdefault.jpg" alt="Honda Accord Hybrid">
                        <p>Honda Accord Hybrid</p>
                        </a>
        	</div>
               
        	
      	</div>
      	</div>
        </div>
    </div>
        </div>
        <br><br>
        <br><br>
        
        
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script src="js/script.js"></script>
       <?php require('Footer.php');?>
    </body>
</html>
