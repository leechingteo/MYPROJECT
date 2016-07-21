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
                
               
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Mercedes.php">Mercedes</a></li>
                <li><a href="Honda.php">Honda</a></li>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="Logout.php">Log Out</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="adlogin.php">Admin</a></li>
                <?php } else { ?>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Mercedes.php">Mercedes</a></li>
                <li><a href="Honda.php">Honda</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="Register.php">Sign Up</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="adlogin.php">Admin</a></li>
                <?php } ?>
                
                
               
            </ul>
            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>

            
        </div>
        
</div>
</nav>
 
    </body>
</html>
