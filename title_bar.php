<html>
<head>
    <meta charset="UTF-8">
    <title></title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
    <!-- add header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Home.php">FJCAR</a>
    </div>
    <!-- menu items -->
    <div class="collapse navbar-collapse" id="navbar1">

        <ul class="nav navbar-nav navbar-right">

         <?php 
           if (loggedin()) { 
           ?>
            <li><a href='admain.php'>Home</a></li>
            <li><a href='addproduct.php'>Add Product</a></li>
            <li><a href='view_users.php'>View Users</a></li>
            <li><a href='view_comment.php'>View Comment</a></li>
            <li><a href='viewprodrecord.php.php'>View Record</a></li>
            <li><a href='adlogout.php'>Logout</a></li>  
            <?php } else { ?>
            <li><a href='admain.php'>Home</a></li>
            <li><a href='addproduct.php'>Add Product</a></li>
            <li><a href='view_users.php'>View Users</a></li>
            <li><a href='view_comment.php'>View Comment</a></li>
            <li><a href='viewprodrecord.php'>View Product</a></li>
            <li><a href='adlogin.php'>Logout</a></li>
            <?php } ?>




        </ul>



    </div>

</div>
</nav>


</body>
</html>
