<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Mercedes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
    <body id="Mercedes">
       <?php
       session_start();
        include_once 'dbconnect.php';
        define('TITLE','Mercedes');
        require('Menu.php');
       ?>
        <div class="container">
        
        
        <div class="panel-heading panel-heading-blue">
    <h3 class="panel-title">Mercedes Categories</h3>
    
</div>
<div class="panel-body">
    <div class="row">
       <div class="row">
      		<div class="col-md-6">
                    <a href="Sclass_sedan.php" class="thumbnail"><img src="imageM/2014-S-CLASS-SEDAN-092-CCF-D.jpg" alt="S CLASS SEDAN">
                    <p>S-CLASS SEDAN</p>
                    </a>
        	</div>
           
           <div class="col-md-6">
          		<a href="CLA_COUPE.php" class="thumbnail"><img src="imageM/2015-CLA-CLASS-CLA45-AMG-015-CCF-D.jpg" alt="CLA COUPE" >
                        <p>CLA COUPE</p>
                        </a>
        	</div
      	</div>
        <br><br>
         <div class="row">
                <div class="col-md-6">
                    <a href="M_AMG.php" class="thumbnail"><img src="imageM/mercedes-amg-gt-front-xlarge-large_trans++rWYeUU_H0zBKyvljOo6zlkYMapKPjdhyLnv9ax6_too.jpg" 
                                                               alt="mercedes-amg-gt">
                     <p>MERCEDES AMG GT</p>
                     </a>
        	</div>
      		<div class="col-md-6">
                    <a href="C_CLASS_SEDAN.php" class="thumbnail"><img src="imageM/2015-C-CLASS-SEDAN-GALLERY-009-WR-T.jpg" alt="C CLASS SEDAN" >
                    <p>C-CLASS SEDAN</p>
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
