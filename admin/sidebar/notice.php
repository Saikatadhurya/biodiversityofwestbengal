<?php if(!isset($_SESSION)) {

    session_start();

}

?>
<form action="sidebar/notice.php" method="POST" enctype="multipart/form-data">

<div class="col-sm-8">
		<div class="col-sm-8">
				<div class="form-group">
				 <label>Enter Notice Header</label>
		
					<input class="form-control" name="subject" type="text" placeholder="Enter Here" required>
				</div>
			</div>
			<div class="col-sm-4">

				<div class="form-group">

				 <label>Enter Date</label>

		

					<input class="form-control" name="date" type="date" placeholder="Enter date" required>

							</div>	

				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Upload pdf</label>
		
				<input type="file" class="form-control-file" id="pdf" name="pdf" required>
			</div>	
		</div>
		
		
	 </div>		
<div class="col-lg-12">		 
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add</button>
  </div>
</div>
</form>

<?php 

$name = ''; $type = ''; $size = ''; $error = '';
  

include("../includes/connect.php");
if(isset($_POST['submit']))
{
	if($_POST['subject']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?notice=notice','_self')</script>";
	}
	else
	{
		$subject = $_POST['subject'];
		 $subject = mysqli_real_escape_string($db, $subject);
		$user_name = $_SESSION['username'];
		$pdf_name = $_FILES['pdf']['name'];
		 $pdf_name = mysqli_real_escape_string($db, $pdf_name);
		$pdf_tmp = $_FILES['pdf']['tmp_name'];
		$pdf_type = $_FILES['pdf']['type'];
		$date = $_POST['date'];
		$date = mysqli_real_escape_string($db, $date);
		
	    }
		
		
				if($pdf_type == "application/pdf" )
				{
				
				move_uploaded_file($pdf_tmp,"../../assets/pdf/$pdf_name");

			$query = "INSERT INTO notice (subject,date,pdf,postedby,timestamp) VALUES('$subject','$date','$pdf_name','$user_name',now())";			
			}else
			{ 
				echo("<script>alert('Invalid File Type.')</script>");
			}
		
		
		
		
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('Notice is Successfully Added')</script>");
	echo"<script>window.open('../index.php?notice=notice','_self')</script>";
}
else{ 
echo ("<script>alert('Failed!!')</script>");
echo"<script>window.open('../index.php?notice=notice','_self')</script>"; }
}		
			
?>	
