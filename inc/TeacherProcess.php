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

		/* The switch - the box around the slider */
		.switch {
		  	position: relative;
		  	display: inline-block;
		  	width: 60px;
		  	height: 34px;
		}

		/* Hide default HTML checkbox */
		.switch input {display:none;}

		/* The slider */
		.slider {
		  	position: absolute;
		  	cursor: pointer;
		  	top: 0;
		  	left: 0;
		  	right: 0;
		  	bottom: 0;
		  	background-color: #ccc;
		  	-webkit-transition: .4s;
		  	transition: .4s;
		}

		.slider:before {
  			position: absolute;
			content: "";
  			height: 26px;
  			width: 26px;
  			left: 4px;
  			bottom: 4px;
  			background-color: white;
  			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider {
		  	background-color: #2196F3;
		}

		input:focus + .slider {
		  	box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
  			-webkit-transform: translateX(26px);
  			-ms-transform: translateX(26px);
  			transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
  			border-radius: 34px;
		}

		.slider.round:before {
		  	border-radius: 50%;
		}
	</style>
	<br><br><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class = "jumbotron">
					<h3>
						261xxx LOL in everyday life
					</h3>
					<br>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-body">
									<button type="button" class="btn-sm btn-Secondary float-right">
									<img src="pic/add.png" alt="icon">
										Add assignment	
									</button>
									<br><br>
									<div id="card-991483">
										<div class="card">
											<div class="card-header">
												<div class = "row">
													<div class ="col-md-9">
														<a class="card-link collapsed" data-toggle="collapse" data-parent="#card-991483" href="#card1">
															<h4> Assignment1 </h4>
														</a>
													</div>
													<div class ="col-md-3">
														<label class="switch">
  															<input type="checkbox">
  															<span class="slider"></span>
														</label>
													</div>
												</div>
											</div>
											<div id="card1" class="collapse">
												<div class="jumbotron"> 
													<p>
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxASSIGNMENT DETAILxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
													</p>
													<br>
													<button type="button" class="btn btn-primary float-right">
													<img src="pic/icon.png" alt="icon">
														Edit assignment	
													</button>
													<button type="button" class="btn float-right">
														View assignment
													</button> 
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header">
												<div class = "row">
													<div class ="col-md-9">
														<a class="card-link collapsed" data-toggle="collapse" data-parent="#card-991483" href="#card2">
															<h4> Assignment2 </h4>
														</a>
													</div>
													<div class ="col-md-3">
														<label class="switch">
  															<input type="checkbox">
  															<span class="slider"></span>
														</label>
													</div>
												</div>
											</div>
											<div id="card2" class="collapse">
												<div class="jumbotron"> 
													<p>
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxASSIGNMENT DETAILxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
													</p>
													<br>
													<button type="button" class="btn btn-primary float-right">
													<img src="pic/icon.png" alt="icon">
														Edit assignment	
													</button>
													<button type="button" class="btn float-right">
														View assignment
													</button> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>