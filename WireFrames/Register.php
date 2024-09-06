

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
						<img src="https://img.freepik.com/free-psd/cyber-monday-sale-element-isolated_23-2151041950.jpg?t=st=1725002874~exp=1725006474~hmac=adeb601f09cc59c21d85f67f18e8cc99d943236643fd9b56648bd62a9be76bbf&w=740" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form  id="myForm" onsubmit="submitForm(event)" >
					<div class="alert alert-info custom-alert" id="alert" hidden>
                      <strong id="response"></strong>
                    </div>
                    <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-id-card"></i></span>
							</div>
							<input type="text" name="userid" id="autoCodeInput" class="form-control input_user" >
						</div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn" >Register</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already have an account? <a href="Login.php" class="ml-2">Login</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
<script>
        // Function to generate a random letter
        function generateRandomLetter() {
            const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            return letters.charAt(Math.floor(Math.random() * letters.length));
        }

        // Function to generate a random digit
        function generateRandomDigit() {
            return Math.floor(Math.random() * 10);
        }

        // Function to generate the 8-character code (3 letters + 5 digits)
        function generateCode() {
            let code = "";
            // Generate 3 random letters
            for (let i = 0; i < 3; i++) {
                code += generateRandomLetter();
            }
            // Generate 5 random digits
            for (let i = 0; i < 5; i++) {
                code += generateRandomDigit();
            }
            return code;
        }

        // Insert the generated code into the input field
        document.getElementById("autoCodeInput").value = generateCode();
    </script>
	<!--unloadable script-->

	<script>
        function submitForm(event) {
            event.preventDefault(); // Prevent the default form submission

            // Collect form data
            const formData = new FormData(document.getElementById("myForm"));

            // Send the POST request
            fetch("AuthRegister.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Handle the response data (you can update the DOM or display a message)
                document.getElementById("response").innerHTML = data;
				document.getElementById("alert").hidden = false;
            })
            .catch(error => console.error('Error:', error));
        }
		</script>
</html>
