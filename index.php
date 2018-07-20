<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>CEK IN - SISTEM BUKU TAMU PERNIKAHAN</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
				<p class = "navbar-text "><b> CEK IN - SISTEM BUKU TAMU PERNIKAHAN</p>
					
					
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6 well">
				<center><img src = "admin/images/logo.png" width = "288px" height = "61px"/>
				<h1><center><b> CEK IN</h1>
				<h5><center></span></h5>
				
				<div id = "result"></div>
				<br />
				
				<form enctype = "multipart/form-data">
					<div class = "form-group has-error has-feedback">
						<label>MASUKKAN NOMOR HP ANDA :</label>
						<input type = "text" id = "student" class = "form-control input-lg" required = "required" placeholder="08xxxxxxxxxx"/>
						<br />
						<div id = "error"></div>
						<button type = "button" id = "login" class = "btn btn-danger btn-block btn-lg"><span class = "glyphicon glyphicon-ok"></span><b> CEK IN</button>
						<br />
					</div>
				</form>
				<hr />
				<center><a class = "btn btn-warning" href = "/hadir/admin/index.php"><span class = "glyphicon glyphicon-user"></span><b> ADMIN</a> <button type = "button" class = "btn btn-info" href = "/hadir/admin/record-display.php" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-blackboard"></span> <b>DISPLAY RECORDS</button></center>
			</div>

			

		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<center><label >&copy; SISTEM BUKU TAMU PERNIKAHAN</label>
			</div>	
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<style type="text/css">
   body { background: #ff8d85 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
</html>