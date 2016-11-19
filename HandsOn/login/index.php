<!DOCTYPE html>
<html>

	<head>
		<title>
			Login
		</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-sm-offset-4 col-sm-4">
		            <form class='form' action='home.php' method='POST'>
		            	<div class='form-group'>
		            		<label>Login</label>
		            		<input class='form-control' type='text' id='login' name='login' />
		            	</div>
		            	<div class='form-group'>
		            		<label>Senha</label>
		            		<input class='form-control' type='password' id='senha' name='senha' />
		            	</div>
		            	<input type='submit' class='btn btn-info' />
		            </form>
		        </div>
		    </div>
		</div>
	</body>
</html>