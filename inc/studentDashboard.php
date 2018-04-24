<?php
$page['title'] = "Student Dashboard";
include_once (realpath('templates/stapped/header.php'));
include_once (realpath('templates/stapped/navbar.php'));
?>
    <body>
	<!--Background พื้นหลัง -->
	<style type="text/css">	
		body{
			background-image:url(pic/BG1.jpg);
			background-size:cover;
			background-attachment:fixed;	
		}
		.content{
			background:black;
			width : 50%;
			padding:40px;
			margin:100px auto;
		}
		p{
			font-size :25px;
			color :black;
		}
	</style>
	<br><br><br><br><br>
	<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
	<div class="card border-primary mb-3" style="max-width: 50rem;">
			<div class="card-body"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-11">
							<div class="row">
							<div class="col-md-1">
							</div>
							<div class="col-md-8">
								<h2>
								Recent update course
								</h2>
							</div>
							<div class="col-md-1.7">
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
										Sort by
									</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						 			<a class="dropdown-item disabled" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
						</div>
						<div class="col-md-1">
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
									Filter
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						 			<a class="dropdown-item disabled" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
						</div>
						<div class="col-md-5">
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
							</div>
							<div class="col-md-11">
								<div class="jumbotron">
									<h5>
									261xxx  LOL in Everyday life
									</h5>					
								<div class="row">
									<div class="col-md-4">
									</div>
									<div class="col-md-5">
									</div>
									<div class="col-md-1">									 
										<button type="button" class="btn btn-primary">
											View assignment	
										</button>
									</div>
									<div class="col-md-7">
									</div>
								</div> 
							</div>
						<div class="jumbotron">
							<h5>
								262xxx  Printciple of black desert RNG
							</h5>					
							<div class="row">
									<div class="col-md-4">
									</div>
									<div class="col-md-5">
									</div>
									<div class="col-md-1">			 
										<button type="button" class="btn btn-primary">
											View assignment	
										</button>
									</div>
									<div class="col-md-5">
									</div>
								</div> 
							</div>
						<div class="jumbotron">
							<h5>
								263xxx  Frame rate management
							</h5>						
							<div class="row">
									<div class="col-md-4">
									</div>
									<div class="col-md-5">
									</div>
									<div class="col-md-1">
										<p src="1.png" alt="image description" title="You are not enroll in this course"/>		 
										<button type="button" class="btn disabled btn-primary">
											View assignment	
										</button>
									</div>
									<div class="col-md-5">
									</div>
								</div> 
							</div>
							<div class="row">
									<div class="col-md-5">
									</div>
								<div class="col-md-5">
								</div>
								<div class="col-md-1">						 
									<button type="button" class="btn  btn-primary">
										See all
									</button>
								</div>
								<br><br>
								<div class="col-md-5">
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
    	<script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
    	<script src="js/scripts.js"></script>
  	</body>
</html>