<?php
$page['title'] = "Student Process";
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
									<br><br>
									<div id="card-991483">
										<div class="card">
											<div class="card-header">
												<a class="card-link collapsed" data-toggle="collapse" data-parent="#card-991483" href="#card1">
													<h4> Assignment1 </h4>
												</a>
											</div>
											<div id="card1" class="collapse">
												<div class="progress">
													<br>
  													<div class="progress-bar bg-success progress-bar-striped" role="progressbar" href="#process1" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="jumbotron"> 
													<p>
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxASSIGNMENT DETAILxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
													</p>
													<form>
															<div id="process1" class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																Get snacks
    															</label>
  															</div>
															<div class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																Get home
    															</label>
  															</div>
															<div class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																eat diner
    															</label>
  															</div>
															<div class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																go to sleep
    															</label>
  															</div>
													</form>
													<br>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header">
												<a class="card-link collapsed" data-toggle="collapse" data-parent="#card-991483" href="#card2">
													<h4> Assignment2 </h4>
												</a>
											</div>
											<div id="card2" class="collapse">
												<div class="progress">
													<br>
  													<div class="progress-bar bg-success progress-bar-striped" href="#process2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="jumbotron"> 
														<p>
															xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
															xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
															xxxxxxxASSIGNMENT DETAILxxxxxxxxxxxx
															xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
															xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
														</p>
														<br><br>
														<form>
															<div id="process2" class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																Get snacks
    															</label>
  															</div>
															<div class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																Get home
    															</label>
  															</div>
															<div class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																eat diner
    															</label>
  															</div>
															<div class="form-check">
    															<label class="form-check-label">
      																<input type="checkbox" class="form-check-input" value="25">
      																go to sleep
    															</label>
  															</div>
														</form>
													<br>
													<a href="studentProcessChart.php">
														<button type="button" class="btn float-right">
															View Process
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
	<script>
		$('input').on('click', function(){
  		var valeur = 0;
  		$('input:checked').each(function(){
           valeur =  valeur+25;
  	   });
  	   $('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur);    
	   });
	</script>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>