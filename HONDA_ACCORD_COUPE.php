<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
       session_start();
        include_once 'dbconnect.php';
        define('TITLE','Mercedes');
        require('Menu.php');
       ?>
        
        <div class="container">
        <div class="panel-heading panel-heading-blue">
            <h3 class="panel-title">MODEL</h3>
        
        </div>
        <div class="panel-heading panel-heading-blue">
        <h1 class="panel-title">ACCORD COUPE LX-S 2017</h1>
        </div>
            <hr>
            <div class="row">
            <div class="col-md-6">
                <a href="#"class="thumbnail"><img src="imageH/2016-Honda-Accord-Coupe-concept.jpg" alt="Honda-Accord-Coupe">
                </a>   
            </div>
                
                    <div class="col-md-6">
                    <table class="table table-hover">
  <thead>
  <h3 class="panel-title">Features</h3>
  <br>
    <tr>
      <th>#</th>
      <th>Model</th>
      <th>Engine Type</th>
      <th>Acceleration</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ACCORD COUPE LX-S 2017</td>
      <td>Gas</td>
      <td></td>
    </tr>
    <tr>
     <thead>
      <th>#</th>
      <th>Passenger Capacity</th>
      <th>Transmission Type</th>
      <th>City Fuel Capacity</th>
    </tr>
    </thead>
     <tr>
      <th scope="row">2</th>
      <td>5</td>
      <td>6-speed Manual</td>
      <td>23/32 mpg</td>
    </tr>
    
    
  </tbody>
</table>
                                         
                   
                    </div>
        	</div>
          <hr> 
        </div>
        
        
         <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script src="js/script.js"></script>
       <?php require('Footer.php');?>
    </body>
</html>
