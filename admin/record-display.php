<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Simple Attendance Record System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
	</head>
	<body>
	
		<div class = "container-fluid" style = "margin-top:10px;">
			
		
		
			<div class = "alert alert-info"> <center><img src = "images/logo.png" /> <center><h2><b>DAFTAR TAMU YANG SUDAH HADIR</div>
		
			<div class = "well col-lg-12">
				<table id = "table" class = "table table-striped">
					<thead class = "alert-info">
						<tr>
							<th><b>NOMOR HP</th>
							<th><b>NAMA TAMU</th>
							<th><b>JAM</th>
							<th><b>TANGGAL</th>
							
						</tr>
					</thead>
					<tbody>
					<?php
						$q_time = $conn->query("SELECT * FROM `time`") or die(mysqli_error());
						$conn->query("SELECT * FROM `student`") or die(mysqli_error());
						while($f_time = $q_time->fetch_array()){
							
					?>	
						<tr>
							<td><?php echo $f_time['student_no']?></td>
							<td><?php echo htmlentities($f_time['student_name'])?></td>
							<td><?php echo date("h:i a", strtotime($f_time['time']))?></td>
							<td><?php echo date("m-d-Y", strtotime($f_time['date']))?></td>
							
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			<br />
			<br />	
			<br />	
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<center><label >&copy; SISTEM BUKU TAMU PERNIKAHAN</label>
			</div>	
		</div>	
	</body>

<style type="text/css">
   body { background: #ff8d85 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>

	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rtime_id').click(function(){
				$time_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_time.php?time_id=' + $time_id;
				});
			});
		});
	</script>
</html>