<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomePage</title>
    <link rel ="stylesheet"href="welcome.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ShopSy</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="welcome.php">HOME</a></li>
                    <li><a href="display.php">PRODUCTS</a></li>
                    <li><a href="contactus.php">CONTACT</a></li>
                    <li><a href="aboutus.php">ABOUT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    
                </ul>
            </div>
            </div> 
            <div class='container2'>
		
	    <div style='margin-left:60px; ' class = 'content'>
	    <h1>Mobile Selling & <br><span>Buying</span> <br>Platform</h1>
            <p class="par">Let's get started. What are you buying and selling today? <br> Our Price Will Leave You Stumped!!!!
                <br>WOW!!! Get Your Dream Phone Here</p>
	    </div>
    </div>
            </div>
            
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
</body>
</html>
