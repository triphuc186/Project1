<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
</head>
<body>
	<?php 
	include("../include/header.php");
	include("../include/connection.php");
	 ?>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
		<div class="col-md-2" style="margin-left:-30px;">

			<?php 
			include("sidenav.php");
			 ?>
		</div>

		<div class="col-md-10">	
			<h4 class="my-2">Admin Dashborad</h4>

				<div class="col-md-12 my-1">
				<div class="row">
				<div class="col-md-3 bg-success mx-2" style="height: 130px;">
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-8 ">
							<?php 
							$ad = mysqli_query($connect,"SELECT * FROM admin");
							$num = mysqli_num_rows($ad);
							 ?>
							<h5 class="my-2 text-white" style="font-size: 30px;">
								<?php 
								echo $num;
							 ?>	
							 </h5>
							<h5 class="text-white">Total</h5>
							<h5 class="text-white">Admin</h5>				
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<a href="#">
								<i class="fa fa-user-cog fa-3x my-1" style="color: white;" ></i> 
							</a>
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 bg-info mx-2" style="height: 130px;">
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-8 ">
							<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
							<h5 class="text-white">Total</h5>
							<h5 class="text-white">Doctor</h5>				
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<a href="#">
								<i class="fa fa-user-md fa-3x my-1" style="color: white;" ></i> 
							</a>
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 bg-warning mx-2" style="height: 130px;">
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-8 ">
							<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
							<h5 class="text-white">Total</h5>
							<h5 class="text-white">Patient</h5>				
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<a href="#">
								<i class="fa fa-procedures fa-3x my-1" style="color: white;" ></i> 
							</a>
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-8 ">
							<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
							<h5 class="text-white">Total</h5>
							<h5 class="text-white">Report</h5>				
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<a href="#">
								<i class="fa fa-flag fa-3x my-1" style="color: white;" ></i> 
							</a>
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 bg-info mx-2 my-2" style="height: 130px;">
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-8 ">
							<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
							<h5 class="text-white">Total</h5>
							<h5 class="text-white">Job Request</h5>				
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<a href="#">
								<i class="fa fa-user-edit fa-3x my-1" style="color: white;" ></i> 
							</a>
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-8 ">
							<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
							<h5 class="text-white">Total</h5>
							<h5 class="text-white">Income</h5>				
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<a href="#">
								<i class="fa fa-money-check-alt fa-3x my-1" style="color: white;" ></i> 
							</a>
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
</html>