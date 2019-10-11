<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'password'){
		echo '<h3>Successfully logged in</h1>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();
	
	});
</script>
	</head>
	<body>
		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            
                    <div class="float">
                      <form class="form" action="home.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-black"><h4>Write Something<h4></label><br>
                                <input type="text" name="updatepost" class="form-control">
                            </div>
                            <div id="div1">
					              <input type="hidden" name="token" value="" id="token_to_be_added"/>
					        </div>
                            <div class="form-group">
                                <input type="submit"  class="btn btn-info btn-md" value="updatepost">
                            </div>
                      </form>
                    </div>
                
            </div>
        </div>
    </div>

	</body> 
</html>
