<?php //defined('APP') or die('direct script access denied!');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      MainPage
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Styling.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
      

<!-- Boostrap template -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
  </script>
  <script src="js/bootstrap.min.js"></script>


          
 <!-- input bacground image-->    
<style>
body {
  background-image: url('images/background2%20(1).jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>  

    <!--  Create Navigation bar-->
  </head>
  <body>
    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            CINV ACADEMY
          </a>
          <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
            <span class="sr-only">
              Toggle navigation
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </button>
      </div>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">
            <span class="glyphicon glyphicon-home"> </span> Home</a>
          </li>
            <li>
            <a href="index.php">
              About
            </a>
          </li>
          <li>
            <a href="index.php">
              Our Promise
            </a>
          </li>
            <li>
            <a href="contactform.php">
              Contact Us
            </a>
          </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-info">
                Go
              </button>
            </span>
            <label for="search" class="sr-only">
              Search
            </label>
            <input type="text" id="search" class="form-control" placeholder="Search">
            <span class="glyphicon glyphicon-search form-control-feedback">
            </span>
          </div>
        </form>
        
        <form class="navbar-form navbar-right">
          >
            <a href="login.inc.php"> 
                <input class="btn btn-success" type="button" value="Login" >
            </a>
            <a href="signup.inc.php">
            <input class="btn btn-success" type="button" value="Sign Up">
            </a>
            
        </form>
      </div>
  </div>
  </nav>
<!-- end of nav bar -->     

<div class="login" style="
		font-family: 'Vollkorn', serif;
		padding-top: 10%;
		padding-left: 40%;
		padding-bottom: 5%;
		max-width: 100%;
		width: auto;">
	<h1 class="class_27"  >
		Login
	</h1>
	<img src="./images/CVIN.png" style="width: 80px;
	height: 80px;
	object-fit: cover;" >
	<form onsubmit="login.submit(event)" method="post" class="class_57" >
		<div class="class_30" >
			<div class="class_58" >
				<label class="class_32"  >
					Email:
				</label>
				<input placeholder="Email" type="email" name="email" class="class_33"  required="true">
			</div>
			<div class="class_58" >
				<label class="class_32"  >
					Password:
				</label>
				<input placeholder="Password" type="password" name="password" class="class_33" required="true">
			</div>
			<div style="padding: 10px;">Dont have an account? <a href="signup.inc.php"> click here to sign up!</a></div>
			<div class="class_59" >
				<button class="class_60"  >
					Login
				</button>
				<div class="class_40" >
				</div>
			</div>
		</div>
	</form>
</div>

<script>
	
	var login = {
 
		show: function(){
			document.querySelector(".js-login-modal").classList.remove('hide');
			document.querySelector(".js-signup-modal").classList.add('hide');
		},
		
		hide: function(){
			document.querySelector(".js-login-modal").classList.add('hide');
		},

		submit: function(e){

			e.preventDefault();
			let inputs = e.currentTarget.querySelectorAll("input");
			let form = new FormData();

			for (var i = inputs.length - 1; i >= 0; i--) {
				form.append(inputs[i].name, inputs[i].value);
			}
			
			form.append('data_type', 'login');
			var ajax = new XMLHttpRequest();

			ajax.addEventListener('readystatechange',function(){

				if(ajax.readyState == 4)
				{
					if(ajax.status == 200){

						let obj = JSON.parse(ajax.responseText);
						alert(obj.message);

						if(obj.success)
							window.location.href = 'student.php';
					}else{
						alert("Please check your internet connection");
					}
				}
			});

			ajax.open('post','ajax.inc.php', true);
			ajax.send(form);
		},


	};

</script>