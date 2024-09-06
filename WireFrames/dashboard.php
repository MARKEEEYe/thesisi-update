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

	<title>POS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />





    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    

  


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

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
                    Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
                </a>
            </div>

            <ul class="nav">
                <li class="active"> 
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
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Stocks Update</h4>
                                <p class="category">Inventory Percentage</p>
                            </div>
                            <div class="content">
                            <!--      <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> -->

                               
                              
               <!--                <script type="text/javascript" >

$(document).ready(function(){

demo.initChartist();
var dataPreferences = {
            series: [
                [25, 30, 20, 25]
            ]
        };

        var optionsPreferences = {
            donut: true,
            donutWidth: 40,
            startAngle: 0,
            total: 100,
            showLabel: false,
            axisX: {
                showGrid: false
            }
        };
        Chartist.Pie('#chartPreferences', dataPreferences, optionsPreferences);

        Chartist.Pie('#chartPreferences', {
         labels: ['622%','3221%'],
         series: [622, 3221]
       });
    
    });
  </script> -->


                               
                                <div class="progress">
      <div id="myProgressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <div class="progress">
      <div id="myProgressBar2" class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <script>
    // Set the desired percentage here
    const prog1Instock = 75; // Change this value as needed
    const prog2Lowstock = 75; // Change this value as needed

    function updateProgressBar1(percentage) {
      const progressBar = document.getElementById('myProgressBar');
      progressBar.style.width = `${percentage}%`;
      progressBar.setAttribute('aria-valuenow', percentage);
      progressBar.textContent = `${percentage}%`;
      progressBar.style.backgroundColor = '#1DC7EA';

    }
    function updateProgressBar2(percentage) {
      const progressBar = document.getElementById('myProgressBar2');
      progressBar.style.width = `${percentage}%`;
      progressBar.setAttribute('aria-valuenow', percentage);
      progressBar.textContent = `${percentage}%`;
      progressBar.style.backgroundColor = '#ff4a55';
      
    }

    // Initialize the progress bar with the desired percentage ff4a55
    updateProgressBar1(prog1Instock);
    updateProgressBar2(prog2Lowstock);
  </script>

    <style>
    .progress {
      height: 30px; /* Adjust height as needed */
    }
    .progress-bar {
      line-height: 30px; /* Center text vertically */
      text-align: center; /* Center text horizontally */
    }
  </style>
    
                             

                                <div class="footer">
                                    <div class="legend">
                                        <a href="#"><i class="fa fa-circle text-info"></i>view </a>InStock
</br>                                    <a href="#"><i class="fa fa-circle text-danger"></i>view </a> Low in Stock
                                        
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-warning"></i> "Please contact the manufacturer for updates if the quantity of low-stock items exceeds in-stock items."
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Top Products</h4>
                                <p class="category">Most Purchased</p>
                            </div>
                            <div class="content">




                            <style>
        /* Set the height of the carousel */
        .carousel-inner > .item > .row > .col-xs-4 > img {
            height: 200px; /* Adjust the height as needed */
            width: 100%; /* Make sure the images fill the container */
            object-fit: cover; /* Ensures the image covers the container */
        }
        .carousel-caption-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 5px 15px;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            color: white; /* Text color */
            text-align: center;
        }


    </style>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
                <div class="col-xs-4">
                <div class="carousel-caption-top">Inter Core i7 5th gen</div>
                    <img src="assets/img/cpu1.jpg" alt="Image 1">
                </div>
                <div class="col-xs-4">
                <div class="carousel-caption-top">Ryzen 5 3600</div>
                    <img src="assets\img\cpu2.jpg" alt="Image 2">
                </div>
                <div class="col-xs-4">
                <div class="carousel-caption-top">Ryzen 7 5600</div>
                    <img src="assets\img\cpu3.jpg" alt="Image 3">
                </div>
            </div>
        </div>

        <div class="item">
            <div class="row">
                <div class="col-xs-4">
                <div class="carousel-caption-top">ASUS ROG Mboard Z490</div>
                <img src="assets\img\mboard.jpg" alt="Image 4">
                </div>
                <div class="col-xs-4">
                <div class="carousel-caption-top">Gigabyte B560M Gaming HD LGA1200 Motherboard</div>
                    <img src="assets\img\mboard3.jpg" alt="Image 5">
                </div>
                <div class="col-xs-4">
                <div class="carousel-caption-top">ASUS ROG Strix Zx20</div>
                    <img src="assets\img\mboard2.jpg" alt="Image 6">
                </div>
            </div>
        </div>

        <div class="item">
            <div class="row">
                <div class="col-xs-4">
                <div class="carousel-caption-top">FURY Kingston Beast 16gb</div>
                    <img src="assets\img\ram.jpg" alt="Image 7">
                </div>
                <div class="col-xs-4">
                <div class="carousel-caption-top">Fury Kingston RAM DDR5 32gb</div>
                    <img src="assets\img\ram2.jpg" alt="Image 8">
                </div>
                <div class="col-xs-4">
                <div class="carousel-caption-top">Vgen Tyunami RAM 16gbx2</div>
                    <img src="assets\img\ram3.jpg" alt="Image 9">
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>





                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                           
                            <div class="content">

                            <style>
        /* Set a fixed size for the chart */
        #dailySalesChart {
            max-width: 800px; /* Fixed width */
            max-height: 400px; /* Fixed height */
            width: 100%; /* Ensures responsiveness */
            height: auto; /* Maintains aspect ratio */
            margin: 0 auto; /* Center the chart */
        }
    </style>
                            <div class="content">
    <h2>Daily Sales Chart</h2>

    <!-- Chart Section -->
    <canvas id="dailySalesChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Example daily sales data
    const salesData = {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        datasets: [{
            label: 'Total Sales',
            data: [120, 150, 180, 220, 160, 190, 230], // Replace with actual sales data
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Initialize Chart.js
    const ctx = document.getElementById('dailySalesChart').getContext('2d');
    const dailySalesChart = new Chart(ctx, {
        type: 'bar', // 'bar' for bar chart, you can change to 'line' for a line chart
        data: salesData,
        options: {
            responsive: true,
            maintainAspectRatio: false, // Ensures the fixed height/width is respected
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

                                <div class="footer">
                                    <div class="legend">
                                    <a href="InventoryManagement.php">
                                    
                                                    <button type="button" rel="tooltip" title="Adding a New Product" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>
                                                    <a href="SalesSection.php">
                                                    <button type="button" rel="tooltip" title="Processing a Sale" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    </a>
                                                    <a href="Reports.php">
                                                    <button type="button" rel="tooltip" title="Generate a Reports" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-book"></i>
                                                    </button>
                                                    </a>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!-- <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Tasks</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox1" type="checkbox">
						  							  	<label for="checkbox1"></label>
					  						  		</div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox2" type="checkbox" checked>
						  							  	<label for="checkbox2"></label>
					  						  		</div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox3" type="checkbox">
						  							  	<label for="checkbox3"></label>
					  						  		</div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
												</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox4" type="checkbox" checked>
						  							  	<label for="checkbox4"></label>
					  						  		</div>
                                                </td>
                                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox5" type="checkbox">
						  							  	<label for="checkbox5"></label>
					  						  		</div>
                                                </td>
                                                <td>Read "Following makes Medium better"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox6" type="checkbox" checked>
						  							  	<label for="checkbox6"></label>
					  						  		</div>
                                                </td>
                                                <td>Unfollow 5 enemies from twitter</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>


        

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script type="text/javascript" src="assets\js\demo.js" ></script>

    

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome back,<strong> <?php echo htmlspecialchars($_SESSION['username']); ?></strong>! Let's make today productive and impactful. "

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
