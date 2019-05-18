<form action="sidebar/kingdom.php" method="POST" enctype="multipart/form-data">

<div class="col-sm-8">
		<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Kingdom Name</label>
		
					<input class="form-control" name="kingdom" type="text" placeholder="Enter Name" required>
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
				<input class="form-control" name="description" type="text" placeholder="Enter Description(max 250 letters)" maxlength="250" required>
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

include("../includes/connect.php");
if(isset($_POST['submit']))
{
	if($_POST['kingdom']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
	}
	else
	{
		$kingdom = $_POST['kingdom'];
		 $kingdom = mysqli_real_escape_string($db, $kingdom);
		$description = $_POST['description'];
		 $description = mysqli_real_escape_string($db, $description);
		$image_name = $_FILES['image']['name'];
		 $image_name = mysqli_real_escape_string($db, $image_name);
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp = $_FILES['image']['tmp_name'];
		$image_tmp = mysqli_real_escape_string($db, $image_tmp);
		$imagename = $kingdom.".jpg" ;
		 $check_query = "SELECT * FROM kingdom WHERE kingdom='$kingdom'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['kingdom'] == $kingdom) {
			  echo ("<script>alert('Kingdom Already Exist')</script>");
			  echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
			  exit();
	        }
	    }
		
		if($image_size>500000)
			{
		if (($_FILES["image"]["type"] == "image/gif") ||
            ($_FILES["image"]["type"] == "image/jpeg") ||
            ($_FILES["image"]["type"] == "image/png") ||
            ($_FILES["image"]["type"] == "image/pjpeg")) {

            $url = '../../biodiversityofwestbengal/assets/image/'.$imagename.'';
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 60);

			$query = "INSERT INTO kingdom (kingdom,image,description) VALUES('$kingdom','$imagename','$description')";
		
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}
			}
			
				if($image_size>500000 && $image_size<2000000)
			{
		if (($_FILES["image"]["type"] == "image/gif") ||
            ($_FILES["image"]["type"] == "image/jpeg") ||
            ($_FILES["image"]["type"] == "image/png") ||
            ($_FILES["image"]["type"] == "image/pjpeg")) {

            $url = '../../biodiversityofwestbengal/assets/image/'.$imagename.'';
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 70);

			$query = "INSERT INTO kingdom (kingdom,image,description) VALUES('$kingdom','$imagename','$description')";
		
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
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 60);

				$query = "INSERT INTO kingdom (kingdom,image,description) VALUES('$kingdom','$imagename','$description')";
		
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
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 50);

			$query = "INSERT INTO kingdom (kingdom,image,description) VALUES('$kingdom','$imagename','$description')";
		
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
            $filename = compress_image($_FILES["image"]["tmp_name"], $url, 35);

			$query = "INSERT INTO kingdom (kingdom,image,description) VALUES('$kingdom','$imagename','$description')";
		
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

			$query = "INSERT INTO kingdom (kingdom,image,description) VALUES('$kingdom','$imagename','$description')";			
			}else
			{ 
				echo("<script>alert('Invalid File Type.')</script>");
			}
		}
		
		
		
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('kingdom is Successfully Added')</script>");
	echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
}
else{ echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>"; }
			
	}		
?>	
