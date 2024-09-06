<?php
 session_start();
 if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
 }
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    Welcome, <?php echo htmlspecialchars($_SESSION['username']);  ?>!
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="SalesSection.php">
                        <i class="pe-7s-cash"></i>
                        <p>Sales Section</p>
                    </a>
                </li>
                <li>
                    <a href="InventoryManagement.php">
                        <i class="pe-7s-note2"></i>
                        <p>Inventory Management</p>
                    </a>
                </li>
                <li>
                    <a href="UserManagement.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>User Management</p>
                    </a>
                </li>
                <li>
                    <a href="Reports.php">
                        <i class="pe-7s-science"></i>
                        <p>Reports</p>
                    </a>
                </li>
                <li>
                    <a href="Settings.php">
                        <i class="pe-7s-settings"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Product Search Bar -->
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Product Search</h4>
                    </div>
                    <div class="content">
                        <input type="text" class="form-control" id="productSearch" placeholder="Search for products...">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Product List -->
            <div class="col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Product List</h4>
                    </div>
                    <div class="content table-responsive table-full-width" style="height: 450px; overflow-y: auto;">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity in Stock</th>
                                <th>Add to Cart</th>
                            </thead>
                            <tbody id="productList">
                                <!-- Sample Product Row -->
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Product A</td>
                                    <td>$10.00</td>
                                    <td>15</td>
                                    <td><button class="btn btn-success btn-sm" onclick="addToCart(1)">Add to Cart</button></td>
                                </tr>

                                <!-- More product rows will be dynamically added here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-md-5">
                <div class="card" style="height: 500px;">
                    <div class="header">
                        <h4 class="title">Cart Summary</h4>
                    </div>
                    <div class="content" style="height: calc(100% - 120px); overflow-y: auto;">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </thead>
                            <tbody id="cartSummary">
                                <!-- Sample Cart Item -->
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>Product A</td>
                                    <td>
                                        <input type="number" value="1" min="1" class="form-control" style="width: 60px;" onchange="updateCart(1)">
                                    </td>
                                    <td>$10.00</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(1)">Remove</button></td>
                                </tr>
                                <!-- More cart items will be dynamically added here -->
                            </tbody>
                        
                    </div>
                    
                   
                </div>
                
            </div>
            </table>
            <div class="text-middle">
                            <strong>Total: $<span id="cartTotal">10.00</span></strong>
                        </div>
                        
                   <!-- Payment Options -->
                   <div class="content">
                        <h5 class="title">Payment Options</h5>
                        <select class="form-control" id="paymentMethod">
                            <option value="cash">Cash</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="mobile_payment">Mobile Payment</option>
                        </select>
                        <button class="btn btn-success btn-block" style="margin-top: 10px;" onclick="processPayment()">Check Out</button>
                    </div>
                       

        </div>
    </div>
</div>

<script>
    // Sample functions to handle cart actions (You would replace these with actual logic)
    function addToCart(productId) {
        console.log('Added product to cart:', productId);
        // Add product to cart logic
    }

    function updateCart(productId) {
        console.log('Updated cart item:', productId);
        // Update cart item logic
    }

    function removeFromCart(productId) {
        console.log('Removed product from cart:', productId);
        // Remove product from cart logic
    }

    function checkout() {
        console.log('Checkout process initiated');
        // Checkout process logic
    }

    function processPayment() {
        console.log('Payment processing');
        // Payment processing logic
    }
</script>





        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
