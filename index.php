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

<body class="bg-dark">    
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white mb-4">Welcome to ok system!</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">

                        <!-- form card login -->
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                    <div class="form-group">
                                        <label for="uname1">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <div>    
                                        <input type="checkbox" id="myCheck"  onclick="myFunction()"> Remember me
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success btn-lg " id="btnLogin">Sign in</button>
                                    <button type="submit" class="btn btn-primary btn-lg " id="btnSignup">Sign up</button>
                                    <button type="submit" class="btn btn-info btn-lg " id="btnSignup">Sign in with moodle</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script js>
      $("#btnLogin").click(function(event) {

        //Fetch form to apply custom Bootstrap validation
        var form = $("#formLogin")

        if (form[0].checkValidity() === false) {
        event.preventDefault()
        event.stopPropagation()
        }

        form.addClass('was-validated');
      });
    </script>

</body>
</html>