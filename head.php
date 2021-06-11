<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Solution</title>
      <!-- google fonts cdn link  -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="http://localhost/ap-test/css/style.css">
</head>
<body>
<!-- header section starts  -->

<header>

<div id="menu" class="fas fa-bars"></div>

<a href="#" class="logggo"><i class="fas fa-user-graduate"></i>LOGO</a>

<nav class="navbar">
    <ul>
        <li><a href="./home.php">home</a></li>
        <li><a href="./about.php">about</a></li>
        <li><a href="./course.php">course</a></li>
        <li><a href="./teacher.php">teacher</a></li>
        <li><a href="./command.php">Asked_question</a></li>
    </ul>
</nav>


<span>  <?php echo $_SESSION['username'] != null ? '<h1>'.$_SESSION['username'].'</h1>' : ''; ?>  </span> 
<?php  if (!isset($_SESSION['username'])) { ?>
<a href="http://localhost/ap-test/account.php" class="logggo"><i class="fas fa-user-circle"></i></a>
<?php } else{ ?>
<a href="http://localhost/ap-test/Logout.php" class="logggo"><i class="fas fa-sign-out-alt"></i></a>   
<?php } ?>


</header>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<!--<script src="js/script.js"></script>-->

    
</body>
</html>