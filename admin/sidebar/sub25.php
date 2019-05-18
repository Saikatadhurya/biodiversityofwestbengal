<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("sub1").innerHTML=response; 
 }
 });
}
function fetch_select1(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option1:val
 },
 success: function (response) {
  document.getElementById("sub2").innerHTML=response; 
 }
 });
}
</script>
<script type="text/javascript" src="jquery.js"></script>
<form action="sidebar/sub25.php" method="POST" enctype="multipart/form-data">
<div class="col-lg-15">
<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Subsection2.5 Name</label>
		
					<input class="form-control" name="sub25" type="text" placeholder="Enter Name" required>
							</div>	
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Kingdom</label>
						<select class="form-control round-form" name="kingdom" onchange="fetch_select(this.value);"> 
						<option>Choose Kingdom</option>
						 <?php
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from kingdom order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							
							$kingdom = $row1['kingdom'];
							
							 ?>
						  <option value="<?php echo $kingdom; ?>"><?php echo "$kingdom"; ?></option>
						  <?php 
							}
							?>
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection1</label>
						<select class="form-control round-form" name="sub1" id="sub1" onchange="fetch_select1(this.value);"> 
						<option>Choose Subsection1</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection2</label>
						<select class="form-control round-form" name="sub2" id="sub2"> 
						<option>Choose Subsection2</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Image</label>
		
				<input type="file" class="form-control-file" id="image" name="image" required>
			</div>	
		</div>
		<div class="col-sm-10">
				<div class="form-group">
				<input class="form-control" name="description" type="text" placeholder="Enter Description(max 250 words)" maxlength="250" required>
			</div>
		</div>
		
</div>	
	<div class="col-lg-12">			
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add Subsection2.5</button>
  </div>
</div>	

</form>

<?php

$name = ''; $type = ''; $size = ''; $error = '';
   function compress_image($source_url, $destination_url, $quality) {

      $info = getimagesize($source_url);

          if ($info['mime'] == 'image/jpeg')
          $image = imagecreatefromjpeg($source_url);

          elseif ($info['mime'] == 'image/gif')
          $image = imagecreatefromgif($source_url);

          elseif ($info['mime'] == 'image/png')
          $image = imagecreatefrompng($source_url);

          imagejpeg($image, $destination_url, $quality);
          return $destination_url;
        }

if(isset($_POST['submit']))
{
	if($_POST['kingdom']=='' OR $_POST['sub2']=='' OR $_POST['sub1']=='' OR $_POST['sub25']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?sub25=sub25','_self')</script>";
	}
	else
	{
		$kingdom = $_POST['kingdom'];
		$kingdom = mysqli_real_escape_string($db, $kingdom);
		$sub1 = $_POST['sub1'];
		$sub1 = mysqli_real_escape_string($db, $sub1);
		$sub2 = $_POST['sub2'];
		$sub2 = mysqli_real_escape_string($db, $sub2);
		$sub25 = $_POST['sub25'];
		$sub25 = mysqli_real_escape_string($db, $sub25);
		$description = $_POST['description'];
		$description = mysqli_real_escape_string($db, $description);
		$image_name = $_FILES['image']['name'];
		$image_name = mysqli_real_escape_string($db, $image_name);
		$image_type = $_FILES['image']['type'];

		$image_size = $_FILES['image']['size'];

		$image_tmp = $_FILES['image']['tmp_name'];
		$image_tmp = mysqli_real_escape_string($db, $image_tmp);
		$imagename = $sub25.".jpg" ;
		 $check_query = "SELECT * FROM sub25 WHERE name='$sub25'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['name'] == $sub25) {
			  echo ("<script>alert('$sub25 Already Exist')</script>");
			  echo"<script>window.open('../index.php?sub25=sub25','_self')</script>";
			  exit();
	        }
	    }
		
		
	
		if($image_size>500000 && $image_size<2000000)
			{
		if (($_FILES["image"]["type"] == "image/gif") ||
            ($_FILES["image"]["type"] == "image/jpeg") ||
            ($_FILES["image"]["type"] == "image/png") ||
            ($_FILES["image"]["type"] == "image/pjpeg")) {

            $url = '../../biodiversityofwestbengal/assets/image/'.$imagename.'';
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 60);

			$query = "INSERT INTO sub25 (name,sub2,image,description) VALUES('$sub25','$sub2','$imagename','$description')";
		
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}
			}else if($image_size>2000000 && $image_size<4000000)
			{
		if (($_FILES["image"]["type"] == "image/gif") ||
            ($_FILES["image"]["type"] == "image/jpeg") ||
            ($_FILES["image"]["type"] == "image/png") ||
            ($_FILES["image"]["type"] == "image/pjpeg")) {

            $url = '../../biodiversityofwestbengal/assets/image/'.$imagename.'';
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 50);

			$query = "INSERT INTO sub25 (name,sub2,image,description) VALUES('$sub25','$sub2','$imagename','$description')";
		
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}
			}else if($image_size>4000000 && $image_size<8000000)
			{
		if (($_FILES["image"]["type"] == "image/gif") ||
            ($_FILES["image"]["type"] == "image/jpeg") ||
            ($_FILES["image"]["type"] == "image/png") ||
            ($_FILES["image"]["type"] == "image/pjpeg")) {

            $url = '../../biodiversityofwestbengal/assets/image/'.$imagename.'';
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 40);

			$query = "INSERT INTO sub25 (name,sub2,image,description) VALUES('$sub25','$sub2','$imagename','$description')";
		
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}
			}else if($image_size>8000000 )
			{
		if (($_FILES["image"]["type"] == "image/gif") ||
            ($_FILES["image"]["type"] == "image/jpeg") ||
            ($_FILES["image"]["type"] == "image/png") ||
            ($_FILES["image"]["type"] == "image/pjpeg")) {

           $url = '../../biodiversityofwestbengal/assets/image/'.$imagename.'';
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 25);

				$query = "INSERT INTO sub25 (name,sub2,image,description) VALUES('$sub25','$sub2','$imagename','$description')";
		
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}
			}
	else {
				if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
				{
				$url = '../../biodiversityofwestbengal/assets/image/'.$imagename.'';
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 90);

				$query = "INSERT INTO sub25 (name,sub2,image,description) VALUES('$sub25','$sub2','$imagename','$description')";			
			}else
			{ 
				echo("<script>alert('Invalid File Type.')</script>");
			}
		}
		
	
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('Subsection2.5 is Successfully Added')</script>");
	echo"<script>window.open('../index.php?sub25=sub25','_self')</script>";
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('../index.php?sub25=sub25','_self')</script>"; }
			
	}	
?>	
