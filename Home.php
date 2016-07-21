<html>
<head>
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    $("li a[href='" + location.href.substring(location.href.lastIndexOf("/") + 1, 255) + "']").addClass("active");
});
</script>
    <style>
       .carousel-inner > .item > img,
       .carousel-inner > .item > a > img {
        width: 80%;
        margin: auto;
        
        
  }
  </style>
</head>
    <body id="Home">
       <?php
        session_start();
        include_once 'dbconnect.php';
        define('TITLE','Home');
        require('Menu.php');
       ?>
        
       <div class="container">
    <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <a href="Mercedes.php"><img src="imageM/white-mercedes-benz-cls-63-amg-1440x900.jpg" alt="mercedes" width="460" height="345"></a>
      </div>

      <div class="item">
          <a href="Honda.php"><img src="imageH/honda-accord-coupe-concept-1920x1200-wallpaper366200.jpg" alt="HONDA" width="460" height="345"></a>
      </div>
      


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <br><br>
    <br><br>
    <br><br>
        
        
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
       <?php require('Footer.php');?>
    </body>
</html>
