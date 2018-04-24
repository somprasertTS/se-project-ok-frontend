<?php
$page['title'] = "Student Dashboard";
include_once (realpath('templates/stapped/header.php'));
include_once (realpath('templates/stapped/navbar.php'));
?>
<body>
	<?php
		include_once (realpath('templates/stapped/public or private style.php'));
	?>
    <br><br><br>
    <div class="container-fluid">
    	<div class="row">
	    	<div class="col-md-1">
		    </div>
	    	<div class="col-md-10">
                <div class = "jumbotron">
                    <div class = "row">
						<div class ="col-md-8">
							<h4> Assignment1 </h4>
						</div>
						<div class ="col-md-4">
							<label class="switch">
  							<input type="checkbox">
  								<span class="slider "></span>
							</label>
						</div>
					</div>
                    <br>
		    	    <div class="row">
		    	    	<div class="col-md-10">
                            <div class= "table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Group name</th>
                                            <th>Sub Assignment1</th>
                                            <th>Sub Assignment2</th>
                                            <th>Sub Assignment3</th>
                                            <th>Sub Assignment4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mairurailoey</td>
                                            <td class="text-success">Done!</td>
                                            <td class="text-success">Done!</td>
                                            <td class="text-success">Done!</td>
                                            <td class="text-success">Done!</td>
                                        </tr>
                                        <tr>
                                            <td>Eiei</td>
                                            <td class="text-success">Done!</td>
                                            <td></td>
                                            <td class="text-success">Done!</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>GGez</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn float-right">Back</button>
    		    		</div>
	    	    		<div class="col-md-2">
		    	    	</div>
		        	</div>
		        </div>
            </div>
		    <div class="col-md-1">
		    </div>
    	</div>
    </div>
</body>