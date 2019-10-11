<!DOCTYPE html>
<html>
	<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Cross Site Request Forgery Protection</title>
	</head>
	<body>
	<h1> CSRF Synchronizer Token Pattern </h1>
    <h2> IE 2062 – Web Security | Assignment 1 </h2> 
    <h2> Name : Ninthujan T. </h2>
    <h2> IT18010640 </h2>

		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                
                    <div class="float">
                        <form class="form" action="result.php" method="post">
                            <div class="text-center">
                                <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
                                <p id="profile-name" class="profile-name-card"></p>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-black"><b>Username : Type Username as " admin "</b></label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-black"><b>Password : Type Password as " password "</b></label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="Login" class="btn btn-info btn-md" value="Login">
                            </div>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>
	</body> 
</html>




