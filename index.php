<?php
$page['title'] = "log in";
include_once (realpath('inc/templates/stapped/header.php'));
?>

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