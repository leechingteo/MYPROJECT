
<html>
<head>
 <title>Add Product </title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body id='addproduct'>
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
    <div class="col-md-4 col-md-offset-4 well">
        <h5>Choose to add:</h5>

        <center><a href='add_mercedespro.php'><h5>Mercedes<h5></a> 
                <a href='add_hondapro.php'><h5>Honda</h5></a></center>

    </div>

</div>
</div>
     <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <?php require('Footer.php');?>
</body>
</html>
