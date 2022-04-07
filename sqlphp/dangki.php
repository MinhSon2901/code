<?php
    include_once 'config.php';
	if(isset($_POST['dangki']))
	{
		// variables for input data
		$taikhoan = $_POST['namedk'];
		$matkhau = $_POST['passworddk'];
		// variables for input data
		
		// sql query for inserting data into database
		$sql_query = "INSERT INTO nguoidung(taikhoan,matkhau) VALUES('$taikhoan','$matkhau')";
		// sql query for inserting data into database
		if(mysqli_query($links,$sql_query))
		{
		?>
			<script type="text/javascript">
			alert('dang ky thanh cong ');
			window.location.href='admin/login.php';
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
			alert('dang ky that bai');
			</script>
			<?php
		}
			// sql query execution function
	}
?>
	