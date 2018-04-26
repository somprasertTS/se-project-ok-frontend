<?php
$page['title'] = "Student Dashboard";
include_once (realpath('templates/stapped/header.php'));
include_once (realpath('templates/stapped/navbar.php'));
?>
<body>

	<?php
		include_once (realpath('templates/stapped/style.php'));
	?>
	
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
									<a href="addAssignment.php">
										<button type="button" class="btn-sm btn-Secondary float-right">
										<img src="pic/add.png" alt="icon">
											Add assignment	
										</button>
									</a>
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
													<a href="addAssignment.php">
														<button type="button" class="btn btn-dark float-right">
														<img src="pic/icon.png" alt="icon">
															Edit assignment	
														</button>
													</a>
													<a href="teacherProcessChart.php">
														<button type="button" class="btn float-right">
															View progress
														</button> 
													</a>
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
													<a href="addAssignment.php">
														<button type="button" class="btn btn-dark float-right">
														<img src="pic/icon.png" alt="icon">
															Edit assignment	
														</button>
													</a>
													<a href="teacherProcessChart.php">
														<button type="button" class="btn float-right">
															View progress
														</button> 
													</a>
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