<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" /> 
	<title>library management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
	
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		 /* background-color: whitesmoke;  */
		 opacity:2;
	}
	#side_bar{
		 /* background-color: whitesmoke;  */
		 opacity: 1;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap'); 
*{  
	/* background:rgba(0,0,0,0.7) url(bg.jpg);
	background-size:cover; */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
	/* background-blend-mode:darken; */
}

	

.facilities{
	color:white;
	font-weight: bold;
}
.Not-registered-yet {
	color: white;
}
.btn{
	background-color:blueviolet;
	margin:8px;
	font-weight : bold;
}

</style>
<body>



	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Library Management System (LMS)</a>
			</div>

			<ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
			  <a href="Admin/index.php" class="btn btn-secondary"><i class="fa-solid fa-user-tie fa-lg"></i> Admin login</a>
		        
		      </li>
		      <li class="nav-item">
			  <a href="index.php" class="btn btn-secondary"><i class="fa-sharp fa-solid fa-users"></i>  User login</a>
		      </li>
		      <li class="nav-item" >
			  <a href="signup.php" class="btn btn-secondary"><i class="fa-solid fa-id-card fa-lg"></i>  Register</a>
		        
		      </li>
		    </ul>
		</div> 
	 </nav>

		    
	
	 <span class="maequee"><marquee><b>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span><br>

	 <div class="bg"
	 style=" background:rgba(0,0,0,0.7) url(bg.jpg); 
	background-blend-mode:darken;background-size:contain; ">    
	
	<div class="row">
	
		<div class= " col-md-3 col-lg-6" id="side_bar">
			
	<div class="facilities">
			<h5 class="facilities">Library Timing</h5>
			<ul>
				<li>Opening: 8:00 AM</li>
				<li>Closing: 8:00 PM</li>
				<li>(Sunday Off)</li>
			</ul>
			<h5 class="facilities">What We provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>
	
		</div>
		<div class= " col-md-3"> </div>
        <div class= "col-md-6 col-lg-6" id="main_content">
			<div class="facilities">

        <center><h3 class="facilities"> <b> <i class="fa-solid fa-id-card fa-lg"></i> REGISTRATION</b></h3></center>

			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text"placeholder="Enter your name :" name="name" class="form-control" required>
				</div><br>
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email"placeholder="Enter your e-mial id :" class="form-control" required>
				</div><br>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password"placeholder="Enter your password:" class="form-control" required>
				</div><br>
				<div class="form-group">
					<label for="mobile">Mobile:</label>
					<input type="text" name="mobile"placeholder="Enter your mobile no. :" class="form-control" required>
				</div><br>
				<div class="form-group">
					<label for="address">Address:</label>
					<textarea name="address"placeholder="Enter your full address :" class="form-control" required></textarea> 
				</div><br>
				<button type="submit "name ="register" class="btn btn-secondary">Register <i class="fa-solid fa-hand"></i></button>
				<a href="index.php" class="Not-registered-yet "> Already registered ?</a>	
					
			</form>

        
		</div>
	
	</div>
</div>
</div>		
            </body>
</html>