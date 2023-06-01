<!DOCTYPE html>
<?php include('conndb.php'); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datatables</title>

	<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<script type="text/javascript">
		$(document).ready( function () {
		    $('#table_id').DataTable();
		} );
	</script>

</head>
<body>
	<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fname</th>
            <th>Position</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
		<?php 
			$sql = " SELECT * FROM datatables_demo_1000 " ; 
			$st = $conn->prepare($sql);
			$st->execute();
			$cnt = $st->rowcount();
			// echo $cnt;
			if($cnt>0){
				while($rs = $st->fetch()){
		 ?>
			        <tr>
			            <td><?=$rs['id']?></td>
			            <td><?=$rs['first_name']?></td>
			            <td><?=$rs['position']?></td>
			            <td><?=$rs['email']?></td>
			        </tr>
        <?php 
        		}
        	}
         ?>
    </tbody>
</table>
</body>
</html>
