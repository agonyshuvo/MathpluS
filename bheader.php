<?php
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Courses</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
 
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  
 <a href="#" class="logo"><i class="fas fa-user-graduate"></i>LOGO</a>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav " style="font-size:2.3rem" text-algin="center">
      
      <li class="nav-item">
        
          <a class="nav-link active" href="home.php"  >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link active" href="course.php">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="teacher.php">Teacher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="command.php">Asked_question</a>
        </li>
      </ul>  
    </div>
  </div>
  <?php echo $_SESSION['username'] != null ? ' <h1>'.$_SESSION['username'].'</h1>' : ''; ?>  </span> 
<?php  if (!isset($_SESSION['username'])) { ?>
<a href="http://localhost/ap-test/account.php" class="logo"><i class="fas fa-user-circle"></i></a>
<?php } else{ ?>
<a href="http://localhost/ap-test/Logout.php" class="logo"><i class="fas fa-sign-out-alt"></i></a>   
<?php } ?>
</nav>

      
    <!-- Optional JavaScript -->
    
  </body>
</html>