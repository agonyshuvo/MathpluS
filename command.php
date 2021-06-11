<?php
include  'head.php'
?>

<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>command</title>
</head>
<body >
<style>
       body{
        background-image: url(img/ccc.jpeg);
        background-repeat: no-repeat;
        /*background-attachment: fixed;*/
        background-size: cover;}
   </style>


    <!--commmt start-->
 <center>
     <section class="any query" id="any query">
        <h1 style="font-size:40px; text-align: center;">Asked_question <i class="fas fa-question-circle"></i></h1>
        <p style="font-size: 3.0rem;   margin:1rem auto;"> "যারা নিবন্ধনে করেছেন শুধুমাত্র তারা প্রতিউত্তর পাবেন " </p>
        <div class="wrapper">
            <form action="" method="POST" class="form">
                <div class="row">
                    <div class="input-group">
                        <label for="name"> <i class="fa fa-user" aria-hidden="true"></i> Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="input-group">
                        <label for="email"> <i class="fas fa-envelope"></i> Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                    </div>
                </div>
                <div class="input-group textarea">
                    <label for="comment"> <i class="fas fa-comment"></i>Comment</label>
                    <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn" > <i class="fas fa-comment"></i> Comment</button>
                </div>
            </form>
            <div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php
            	}
			}
			?>
		</div>
        </div>
    </section>

</center>



    <!--commt end-->


</body>
<?php
include 'foot.php'?>
</html>