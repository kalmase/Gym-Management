<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head> 

    
    <title>Gym | Dashboard </title>

    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
     <style>
    	.page-container .sidebar-menu #main-menu li#dash > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()" id="body">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content" id="image1">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>					
						
							<li>
								<a href="logout.php" style="color: whitesmoke;">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

			<h2 id="dash">Gym Dashboard</h2>

			<hr>

			<div class="col-sm-3"><a href="revenue_month.php">			
				<div class="tile-stats tile-red" id="income">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Income</h2>
						<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$revenue = 0;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							    	$query1="select * from plan where pid='".$row['pid']."'";
							    	$result1=mysqli_query($con,$query1);
							    	if($result1){
							    		$value=mysqli_fetch_row($result1);
							        $revenue = $value[4] + $revenue;
							    	}
							    }
							}
							echo "".$revenue;
							?>
						</div>
				</div></a>
			</div>
			

			<div class="col-sm-3"><a href="table_view.php">			
				<div class="tile-stats tile-green " id="total">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Total Members</h2>	
							<?php
							$query = "select COUNT(*) from users";

							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>	
				
			<div class="col-sm-3"><a href="over_members_month.php">			
				<div class="tile-stats tile-aqua" id="new">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>New Members</h2>
							<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

							//echo $query;
							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>			
			</div>

			<div class="col-sm-3"><a href="view_plan.php">			
				<div class="tile-stats tile-blue" id="available">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Available Plans</h2>	
							<?php
							$query = "select COUNT(*) from plan where active='yes'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$i = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>
			

    	<?php include('footer.php'); ?>
</div>
 <style>
#income{
	background-image: linear-gradient( 45deg,blue,rgba(0,10,0,0.5));
	opacity: 0.8;
	color: whitesmoke;
	margin-top: 200px;

}
#total{
	background-image: linear-gradient(45deg,#002040,rgba(0,0,20,0.5));
	opacity: 0.8;
	margin-top: 200px;
}
#new{
	background-image: linear-gradient(45deg,purple,rgba(80,0,80,0.5));
	opacity: 0.9;
	margin-top: 200px;
}
#available{
	background-image: linear-gradient(45deg,#000020,white);
	opacity: 0.7;
	margin-top:200px;
}
#body{
	background-image: url("scpott.jpg");
	overflow: hidden;
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	height: 600px;
}
#image1{
	
	background-color: rgba(0, 0, 0, 0.1);
	color: whitesmoke;
}
#dash{
	margin-top: -20px;
}

 </style>
  
    </body>
</html>
