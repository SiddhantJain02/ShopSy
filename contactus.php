<?php 

include 'config/db.php';

error_reporting(0);
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone'];
	$message = $_POST['message'];
 
			$sql = "INSERT INTO enquiries (name, email, phone_no, message)
					VALUES ('$name', '$email', '$phone_no','$message')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Thankyou Feedbak Submitted.')</script>";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<link rel="stylesheet" type="text/css" href="contactus.css">
<body>
<div class="container">
  <form action="" method="POST">

    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email here..">

    <label for="phone">Contact Number</label>
    <input type="text" id="phone" name="phone" placeholder="Your Contact Number..">

    <label for="subject">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value = "submit" name="submit">

  </form>
</div>
</body>
</html>