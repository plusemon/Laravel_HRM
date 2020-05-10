<!DOCTYPE html>
<html>
<head>
	<title>Check Email</title>
	<link rel="stylesheet" type="text/css" href="css/login/style.css">
	<link rel="stylesheet" type="text/css" href="css/login/swap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg3.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/avatar.svg">
				<h3 class="title">Enter Your Registered Email And Mobile Number</h3>
                <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope-open-text"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input">
           		   </div>
           		</div>

                <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-mobile"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Mobile Number</h5>
           		   		<input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{5}" required class="input">
           		   </div>
           		</div>

            	<input type="submit" class="btn" value="Submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login/a81368914c.js"></script>
    <script type="text/javascript" src="js/login/main.js"></script>
</body>
</html>
