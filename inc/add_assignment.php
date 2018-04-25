<html><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--For Name title each page-->
        <title>Add Assignment</title>
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
        <!-- Include all compiled plugins (below), or include individual
        files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jasny-bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teacher prcess page</title>
        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head><body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="#">Logo</a>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </nav>
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
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="jumbotron">
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <br>
                                        <br>
                                        <div id="card-991483">
                                            <div class="card">
                                                <div class="card-header">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <label class="control-label">Assignment name</label>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <label class="control-label">Description</label>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <label class="control-label">File</label>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <input type="file">
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    <div class="form-group"> <div class="col-sm-2"><label class="control-label">Sub assignment</label></div> <div class="col-sm-10"> <div class="radio"> <label class="radio-inline"> <input type="radio">Opt1</label> <label class="radio-inline"> <input type="radio">Opt2</label> </div></div></div><div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <button type="submit" class="btn btn-default">Add sub assignment</button>
                                                            </div>
                                                        </div></form>
                                                    <div class="form-inline"></div>
                                                </div>
                                                <div id="card1" class="collapse">
                                                    <div class="jumbotron">
                                                        <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                                            xxxxxxxASSIGNMENT DETAILxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                                                        <br>
                                                        <button type="button" class="btn btn-primary float-right">
                                                            <img src="pic/icon.png" alt="icon">Edit assignment</button>
                                                        <button type="button" class="btn float-right">View assignment</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                                                <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                                                <!------ Include the above in your HEAD tag ---------->
                                                <!-- /container -->
                                                <div id="card2" class="collapse">
                                                    <div class="jumbotron">
                                                        <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                                            xxxxxxxASSIGNMENT DETAILxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                                                        <br>
                                                        <button type="button" class="btn btn-primary float-right">
                                                            <img src="pic/icon.png" alt="icon">Edit assignment</button>
                                                        <button type="button" class="btn float-right">View assignment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button type="button" class="btn btn-danger float-right">Cancel</button>
                                            <button type="button" class="btn btn-primary float-right">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    

</body></html>