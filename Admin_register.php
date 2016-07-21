<html>
    <head>
             <title> Admin Register</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport" >
            <link rel="stylesheet" href="style.css"/>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        
    </head>
    <body>
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
         <fieldset>
        <legend> Admin Register Here:</legend>
       
        <form method='post'>
             <?php
             if(isset($_POST['submit'])){
                 $username=$_POST['username'];
                 $password=md5($_POST['password']);
                 
                 if(empty($username) or empty($password)){
                     echo "<p>Fields empty!</p>";
                     
                 }else{
                     
                     mysqli_query($con,"INSERT INTO admin (username,password) VALUES('" . $username . "', '" .($password) . "')");
                     echo "<p>Successfully Registered!</p>";
                   
                 }
             
             }
             
             ?>
        
            <div class="form-group">
            <label for="name">Username</label>
            <input type='text' name='username' required class="form-control"/>
            </div>
            <div class="form-group">
            <label for="name">Password</label>
             <input type='password' name='password' required class="form-control"/>
            </div>
              <div class="form-group">
            <input type='submit' name='submit' value='Register' class="btn btn-primary" />
            </div>
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