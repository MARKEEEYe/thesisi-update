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
                <li>
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
                <li class="active">
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
                    <div class="col-md-12">
                        <div class="card">


                        <div class="content">

<style>
/* Set a fixed size for the chart */
#reportChart {
max-width: 600px; /* Fixed width */
max-height: 300px; /* Fixed height */
width: 100%; /* Ensures responsiveness */
height: auto; /* Maintains aspect ratio */
}
</style>
<h2>Generate Reports</h2>

<!-- Filter Section -->
<form id="reportForm">
  <div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="dateRange">Date Range:</label>
<select id="dateRange" class="form-control" onchange="updateChart()">
<option value="daily">Daily</option>
<option value="weekly">Weekly</option>
<option value="monthly">Monthly</option>
<option value="custom">Custom</option>
</select>
</div>


<div class="form-group" id="customDateRange" style="display: none;">
<label for="startDate">Start Date:</label>
<input type="date" id="startDate" class="form-control">
<label for="endDate">End Date:</label>
<input type="date" id="endDate" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="filterProduct">Product:</label>
<select id="filterProduct" class="form-control" onchange="updateChart()">
<option value="all">All Products</option>
<!-- Add more product options dynamically -->
</select>
</div></div>
<div class="col-md-3">
<div class="form-group">
<label for="filterCategory">Category:</label>
<select id="filterCategory" class="form-control" onchange="updateChart()">
<option value="all">All Categories</option>
<!-- Add more category options dynamically -->
</select>
</div></div>
<div class="col-md-3">
<div class="form-group">
<label for="filterPaymentMethod">Payment Method:</label>
<select id="filterPaymentMethod" class="form-control" onchange="updateChart()">
<option value="all">All Methods</option>
<option value="credit_card">Credit Card</option>
<option value="cash">Cash</option>
<option value="paypal">PayPal</option>
<!-- Add more payment methods dynamically -->
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<button type="button" class="btn btn-primary" onclick="updateChart()">Generate Report</button>
</div>
</div>


</form>

<!-- Chart Section -->
<canvas id="reportChart" width="300" height="400"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Initialize Chart.js
const ctx = document.getElementById('reportChart').getContext('2d');
let reportChart = new Chart(ctx, {
type: 'bar', // Can be 'bar', 'line', 'pie', etc.
data: {
labels: [], // Labels go here
datasets: [{
label: 'Sales',
data: [], // Data goes here
backgroundColor: 'rgba(75, 192, 192, 0.2)',
borderColor: 'rgba(75, 192, 192, 1)',
borderWidth: 1
}]
},
options: {
scales: {
y: {
beginAtZero: true
}
}
}
});

// Show or hide custom date range inputs
document.getElementById('dateRange').addEventListener('change', function() {
const customDateRange = document.getElementById('customDateRange');
customDateRange.style.display = this.value === 'custom' ? 'block' : 'none';
});

// Function to update the chart
function updateChart() {
const dateRange = document.getElementById('dateRange').value;
const startDate = document.getElementById('startDate').value;
const endDate = document.getElementById('endDate').value;
const product = document.getElementById('filterProduct').value;
const category = document.getElementById('filterCategory').value;
const paymentMethod = document.getElementById('filterPaymentMethod').value;

// Fetch data from backend (this is just a placeholder example)
// You'll need to implement the backend to return filtered data based on these parameters
fetch(`backend_endpoint.php?dateRange=${dateRange}&startDate=${startDate}&endDate=${endDate}&product=${product}&category=${category}&paymentMethod=${paymentMethod}`)
.then(response => response.json())
.then(data => {
// Update the chart with new data
reportChart.data.labels = data.labels;
reportChart.data.datasets[0].data = data.sales;
reportChart.update();
});
}

// Initial load
updateChart();
</script>










                            <div class="header">
                                <h4 class="title">202 Awesome Stroke Reports</h4>
                                <p class="category">Handcrafted by our friends from <a target="_blank" href="http://themes-pixeden.com/font-demos/7-stroke/index.html">Pixeden</a></p>
                            </div>
                            <div class="content all-icons">
                                <div class="row">
                                
                                 
                                
                           <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail">
                                     
                                      <!-- Image Display -->
                                      <img src="assets/img/faces/face-3.jpg" class="card-img-top" alt="Image Title">
                                     <div class="card-body text-center">
                                     <!-- Image Title -->
                                     <h5 class="card-title">Image Title</h5>
                                      <!-- Button to Open Modal -->
                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                      Open Modal
                                     </button>
                                    </div>
    
                                    </div>

                           </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-bandaid"></i>
                                      <input type="text" value="pe-7s-bandaid">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-car"></i>
                                      <input type="text" value="pe-7s-car">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-diamond"></i>
                                      <input type="text" value="pe-7s-diamond">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-door-lock"></i>
                                      <input type="text" value="pe-7s-door-lock">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-eyedropper"></i>
                                      <input type="text" value="pe-7s-eyedropper">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-female"></i>
                                      <input type="text" value="pe-7s-female">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-gym"></i>
                                      <input type="text" value="pe-7s-gym">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-hammer"></i>
                                      <input type="text" value="pe-7s-hammer">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-headphones"></i>
                                      <input type="text" value="pe-7s-headphones">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-helm"></i>
                                      <input type="text" value="pe-7s-helm">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-hourglass"></i>
                                      <input type="text" value="pe-7s-hourglass">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-leaf"></i>
                                      <input type="text" value="pe-7s-leaf">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-magic-wand"></i>
                                      <input type="text" value="pe-7s-magic-wand">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="pe-7s-male">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-map-2"></i>
                                      <input type="text" value="pe-7s-map-2">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-next-2"></i>
                                      <input type="text" value="pe-7s-next-2">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-paint-bucket"></i>
                                      <input type="text" value="pe-7s-paint-bucket">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-pendrive"></i>
                                      <input type="text" value="pe-7s-pendrive">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-photo"></i>
                                      <input type="text" value="pe-7s-photo">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-piggy"></i>
                                      <input type="text" value="pe-7s-piggy">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-plugin"></i>
                                      <input type="text" value="pe-7s-plugin">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-refresh-2"></i>
                                      <input type="text" value="pe-7s-refresh-2">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-rocket"></i>
                                      <input type="text" value="pe-7s-rocket">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-settings"></i>
                                      <input type="text" value="pe-7s-settings">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-shield"></i>
                                      <input type="text" value="pe-7s-shield">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-smile"></i>
                                      <input type="text" value="pe-7s-smile">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-usb"></i>
                                      <input type="text" value="pe-7s-usb">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-vector"></i>
                                      <input type="text" value="pe-7s-vector">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-wine"></i>
                                      <input type="text" value="pe-7s-wine">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-cloud-upload"></i>
                                      <input type="text" value="pe-7s-cloud-upload">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-cash"></i>
                                      <input type="text" value="pe-7s-cash">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-close"></i>
                                      <input type="text" value="pe-7s-close">
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-bluetooth"></i>
                                      <input type="text" value="pe-7s-bluetooth">
                                    </div>

                                 
                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail"><i class="pe-7s-video"></i>
                                      <input type="text" value="pe-7s-video">
                                    </div>

                                


                                  </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        


    </div>
</div>



</body>

<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal Title</h4>
      </div>
      <div class="modal-body">
        This is the content of the modal.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>




  


</html>
