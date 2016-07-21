<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Welcome</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body id='adminwelcome'>
        <?php
        session_start();
        ?>
        <?php
        include 'dbconnect.php';
        ?>
        <?php
        include 'function.php';
        ?>
        <?php
        include 'title_bar.php';
        ?>
       
        <div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
        <form>
        <fieldset>
        <h1>Welcome to FJCAR Admin Page </h1>
                <?php
                
                 date_default_timezone_set('Asia/Kuala_lumpur');
                 print '<p>You have been logged in since: '. date('g:i a'). '</p>';
                 
                ?>
         </fieldset>
         </form>
             
        </div>
</div>
</div>
        
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

<?php require('Footer.php');?>
</body>
</html>
