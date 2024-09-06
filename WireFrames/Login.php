<?php
session_start(); // Start the session
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
  

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<!--Coded with love by Mutiullah Samim-->
<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card bg-image-1">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/img/favicon.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				

				<?php

$servername = "localhost";
$username = "root"; // default XAMPP MySQL user
$password = ""; // default XAMPP MySQL password
$dbname = "wfdb"; // Your database name

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$result = $db->query("SELECT COUNT(*) AS count FROM Users");
$row = $result->fetch_assoc();

if ($row['count'] == 0) { 


	?>
	<style>
        .loading-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            padding-top: 20%;
            font-size: 24px;
            z-index: 1000;
			
        }
		
        
    </style>
	<div class="d-flex justify-content-center form_container">
					<form id="myForm"  action="loading.php" method="POST">
					<div class="alert alert-info custom-alert" id="alert" hidden>
                      <strong id="response"></strong>
                    </div>
                    
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" placeholder="example123@email.com" required>
						</div>
						
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn" >Register</button>
				   </div>
				 
				   
					
					
					</form>
					
				
				</div>
				<div class="loading-overlay" id="loadingOverlay">Processing your request...</div>
				<div class="d-flex justify-content-center login_container" style="margin-top: 0.5rem;">
    <div class="alert alert-warning" role="alert" style="line-height: 1.2; padding: 0.25rem;">
        <strong>Login is unavailable.</strong> Please create an admin account using the registration form.
    </div>
</div>


	<?php
	
    
    }else  {
		?> 
		
		<div class="d-flex justify-content-center form_container">
				<form id="myForm2"   action="AuthLogin.php" method="POST">
				
				<?php
				if (isset($_SESSION['error_message'])) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
                    // Clear the error message after displaying it
                    unset($_SESSION['error_message']);
                }
                ?>
							
				<div class="d-flex justify-content-center mt-3 login_container">
				 	<strong><h2>Login</h2></strong>
				   </div>
								
							
							
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" required class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" required class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn" >Login</button>
				   </div>
				   
					</form>
				</div>
		<?php
	}
?>








				
			</div>
		</div>
	</div>
</body>


<script>
        function submitForm(events) {
            events.preventDefault(); // Prevent the default form submission

            // Collect form data
            const formData = new FormData(document.getElementById("myFormLogin"));

            // Send the POST request
            fetch("AuthLogin.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Handle the response data (you can update the DOM or display a message)
				if (data.trim() === "success") {
            // Redirect to another PHP page if login is true
            window.location.href = "dashboard.php"; // Replace "dashboard.php" with the page you want to redirect to
        } else {
            // Handle the response data (e.g., show an error message)
            document.getElementById("response").innerHTML = data;
            document.getElementById("alert").hidden = false;
        }
            })
            .catch(error => console.error('Error:', error));
        }
		
		//function submitForm(eventsR) {
			//eventsR.preventDefault(); 
		//	submitToPHP();

		//}
		document.getElementById("myForm").addEventListener("submit", function(event) {
            // Show the loading overlay
            document.getElementById("loadingOverlay").style.display = "block";
			
        });
		
		
		</script>
</html>
