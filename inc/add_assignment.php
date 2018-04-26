<?php
$page['title'] = "Student Dashboard";
include_once (realpath('templates/stapped/header.php'));
include_once (realpath('templates/stapped/navbar.php'));
?>

</body>
    <?php
		include_once (realpath('templates/stapped/style.php'));
	?>
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
                                <h3>
                                Add new assignment
                                </h3>
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