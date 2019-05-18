<form action="sidebar/district.php" method="POST" enctype="multipart/form-data">

<div class="col-sm-4">
				<div class="form-group">
				 <label>Enter District Name</label>
		
					<input class="form-control" name="district" type="text" placeholder="Enter Name" required>
				</div>
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add</button>
  </div>
 </div>
</form>

<?php 

include("../includes/connect.php");
if(isset($_POST['submit']))
{
	if($_POST['district']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?district=district','_self')</script>";
	}
	else
	{
		$district = $_POST['district'];
		$district = mysqli_real_escape_string($db, $district);
		 $check_query = "SELECT * FROM district WHERE name='$district'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['name'] == $district) {
			  echo ("<script>alert('District Already Exist')</script>");
			  echo"<script>window.open('../index.php?district=district','_self')</script>";
			  exit();
	        }
	    }
	
		$query = "INSERT INTO district (name) VALUES('$district')";
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('District is Successfully Added')</script>");
	echo"<script>window.open('../index.php?district=district','_self')</script>";
}
else{ echo"<script>window.open('../index.php?district=district','_self')</script>"; }
			
	}		
?>	
