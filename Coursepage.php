<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--For Name title each page-->
    <title><?=$page['title'];?></title> 
    <!--Bootstarp 4 css and Javascript-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <!-- Jasny Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>

</head>

<!--Background พื้นหลัง -->
<style type="text/css">	
	body{
		background-image:url(BG.jpg);
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


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
				<h2>
				</h2>
				<p>
				</p>		
				<div class="row">
						<div class="col-md-9">
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
						<div class="col-md-1">
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
						</div>
				</div>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<p>
					</p>
					<h2>
							<font color=“#FFFFFF”> Course page </font>
					</h2>
					<p>
					</p>

				
				</div>
				<div class="col-md-1">
				</div>
			</div>
			
			<h2>
			</h2>
			<p>
			</p>


			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
						<div class="row">
								<div class="col-md-4">
										<a class="btn" href="#">
											<div class="card">
												<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
													<div class="card-block">
														<h5 class="card-title">
															This location is perfect <br /> 
															for a weekend
														</h5>
													</div>
											</div>
										</a>
								</div>
								<div class="col-md-4">
										<a class="btn" href="#">
											<div class="card">
												<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
													<div class="card-block">
														<h5 class="card-title">
																This location is perfect <br /> 
																for a weekend
														</h5>
													</div>
											</div>
										</a>
								</div>
								<div class="col-md-4">
										<a class="btn" href="#">
											<div class="card">
												<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
													<div class="card-block">
														<h5 class="card-title">
																This location is perfect <br />  
																for a weekend
														</h5>
													</div>
											</div>
										</a>
								</div>
						</div>
					</div>
				<div class="col-md-1">
				</div>
			</div>
			<p>

			</p>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<div class="row">
							<div class="col-md-4">
									<a class="btn" href="#">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
												<div class="card-block">
													<h5 class="card-title">
															This location is perfect <br />  
															for a weekend
													</h5>
												</div>
										</div>
									</a>
							</div>
							<div class="col-md-4">
									<a class="btn" href="#">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
												<div class="card-block">
													<h5 class="card-title">
															This location is perfect <br /> 
															for a weekend
													</h5>
												</div>
										</div>
									</a>
							</div>
							<div class="col-md-4">
									<a class="btn" href="#">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
												<div class="card-block">
													<h5 class="card-title">
															This location is perfect <br />  
															for a weekend
													</h5>
												</div>
										</div>
									</a>
							</div>
					</div>
				</div>
				<p>

				</p>
				<div class="col-md-1">
				</div>
			</div>
			<p>

			</p>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
						<div class="row">
								<div class="col-md-4">
										<a class="btn" href="#">
											<div class="card">
												<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
													<div class="card-block">
														<h5 class="card-title">
																This location is perfect <br />  
																for a weekend
														</h5>
													</div>
											</div>
										</a>
								</div>
								<div class="col-md-4">
										<a class="btn" href="#">
											<div class="card">
												<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
													<div class="card-block">
														<h5 class="card-title">
																This location is perfect <br /> 
																for a weekend
														</h5>
													</div>
											</div>
										</a>
								</div>
								<div class="col-md-4">
										<a class="btn" href="#">
											<div class="card">
												<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
													<div class="card-block">
														<h5 class="card-title">
																This location is perfect <br />  
																for a weekend
														</h5>
													</div>
											</div>
										</a>
								</div>
						</div>
					</div>
				<div class="col-md-1">
				</div>
			</div>
			<p>

			</p>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<div class="row">
							<div class="col-md-4">
									<a class="btn" href="#">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
												<div class="card-block">
													<h5 class="card-title">
															This location is perfect <br />  
															for a weekend
													</h5>
												</div>
										</div>
									</a>
							</div>
							<div class="col-md-4">
									<a class="btn" href="#">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
												<div class="card-block">
													<h5 class="card-title">
															This location is perfect <br /> 
															for a weekend
													</h5>
												</div>
										</div>
									</a>
							</div>
							<div class="col-md-4">
									<a class="btn" href="#">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail First" src="coursepage.jpg" />
												<div class="card-block">
													<h5 class="card-title">
															This location is perfect <br /> 
															for a weekend
													</h5>
												</div>
										</div>
									</a>
							</div>
					</div>
				</div>
				<p>

				</p>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>