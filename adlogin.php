<html>
    <head>
        <title> Admin Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body id='adminlogin'>
        <?php
        define('TITLE','Login');
        require('Menu.php');
        ?>
        <?php
        include 'dbconnect.php';
        ?>
        <?php
        include 'function.php';
        ?>
        
        
         <div class="container">
         <div class="row">
         <div class="col-md-4 col-md-offset-4 well">
         <fieldset>
        <legend> Admin Login Here:</legend>
        
        <form method='post'>
             <?php
             if(isset($_POST['submit'])){
                 $username=$_POST['username'];
                 $password=md5($_POST['password']);
                 
                 if(empty($username) or empty($password)){
                     echo "<p>Fields empty!</p>";
                     
                 }else{
                     
                    $result = mysqli_query($con,"SELECT id FROM admin WHERE username= '" . $username. "' and password = '" . $password . "'");
                    
                    if ($row = mysqli_fetch_array($result)) {
                         $_SESSION['user_id'] = $row['id'];
                         header("Location: admain.php");
                        
                    }
                    else {
                           echo "<p>Incorrect Name or Password!!!";
                      }
                    
                    
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
            <input type='submit' name='submit' value='Login' class="btn btn-primary" />
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
