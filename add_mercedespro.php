<!DOCTYPE html>
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
<?php      
//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['submit'])) {

$image=$_POST['image'];
$image_name = $_POST['name'];




//name can contain only alpha characters and space
if (!preg_match("/^[a-zA-Z ]+$/",$image_name)) {
    $error = true;
    $username_error = "Name must contain only alphabets and space";
}

if (!$error) {
    if(mysqli_query($con, "INSERT INTO add_mercedes(image,image_name) VALUES('". $image . "','". $image_name . "')")) {
        $successmsg = "Successfully upload";
        header("Location:view_mercedes.php");
    } else {
        $errormsg = "Error in uploading!";
    }
}
}
?>

<html>
<head>
<title>Upload page</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>
<body id="index">



<div class="container">
<div class="row">
    <div class="col-md-4 col-md-offset-4 well">
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="uploading" enctype="multipart/form-data">
            <fieldset>
                <legend>Add New Mercedes Information</legend>

                <div class="form-group">
                    <label for="name">Select Image</label>
                     <input type="file" name='image' placeholder="Choose the Image" required value="<?php if($error) echo $image; ?>" class="form-control" />
                    <label for="name">Image Name:</label>
                    <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $image_name; ?>" class="form-control" />

                </div>


                <div class="form-group">
                    <input type="submit" name="submit" value="upload" class="btn btn-primary" />
                </div>
            </fieldset>
        </form>
         <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
        <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
    </div>
</div>

</div>
</div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <?php require('Footer.php');?>
</body>
</html>