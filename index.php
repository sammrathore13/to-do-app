<!DOCTYPE html>
<?php include'db.php'  ;
$sql = 'Select * from list ';
$rows = $dba->query($sql);
?>
<html>
	<head>
		<script
		src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>
		
		TODO APP
		</title>
	</head>
	<body>
		<div class="container">
			<div class="row " style="margin-top:70px;">
				<center><h1>TODO APP</h1></center>
				<button type ="button" data-target='#myModal' data-toggle="modal" class="btn btn-success ">ADD TASK</button>
				<div class="col-md-10 col-md-offset-1">
					
					
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button"  class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">ADD TASK</h4>
								</div>
								
								<div class="modal-body">
								<form method ='post' action="add.php">
									<div class ="form-group">

									<label> Task Name</label>
									<input type="text" required name ="tasks" class="form-control">
									</div>
									
									<input type="submit" name="send" value="send" class="btn btn-success">


								</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<table class="table">
						<table class= 'table table-hover'>
							<thead>
								<tr>
					                 
									<th>TASK</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php while($row =$rows->fetch_assoc()): ?>
							        


									
									
									<td class ='col-md-10'><?php  echo $row['task'] ?></td>
									<td><a href="" class ='btn btn-success'>EDIT</a></td>
									<td><a href="delete.php?id" class ='btn btn-danger'>DELETE</a></td>
									
								</tr>
								<?php endwhile;?>
							</tbody>
						</table>
						
					</body>
					
				</html>