<!doctype html>
<html lang="en">
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132426947-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132426947-1');
</script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="WINGS online membership application form"/>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/img.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/form.css">
		<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">
	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 
    <title>WINGS India</title>
  </head>
  <body>

	  
  <?php include("includes/header.php") ?>
	
	
	<!--<div class="container">
  <form action="form.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" class="form-control" name="firstName" id="name" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Middle Name</label>
      </div>
      <div class="col-75">
        <input type="text" class="form-control" name="middleName" id="name" placeholder="Your middle name..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" class="form-control" name="lastName" id="name" placeholder="Your last name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Date of Birth</label>
      </div>
      <div class="col-75">
        <input type="date" class="form-control" id="box" placeholder="Date of Birth" name="dateofbirth" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Father's Name</label>
      </div>
      <div class="col-75">
          <input type="text" class="form-control" placeholder="Father's Name" name="fathername" required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Email address</label>
      </div>
      <div class="col-75">
           <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label for="lname">Nationality</label>
      </div>
      <div class="col-75">
          <input type="text" class="form-control" id="box" placeholder="Nationality" name="nationality" required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Gender:</label>
      </div>
      <div class="col-75">
	    <div class="form-inline" >
		<div class="form-group mb-2">      
  <input class="form-check-input" type="radio" name="gender" id="male" value="m" checked >
  <label for="male"> Male </label></div>'
  
  <div class="form-group mx-sm-3 mb-2">  
   <input class="form-check-input" type="radio" name="gender" id="female" value="f" checked >
  <label for="female"> Female </label></div>
  </div>
      </div>
   </div>
	
	<div class="row">
      <div class="col-25">
        <label>Address:</label>
      </div>
      <div class="col-75">
       <input type="text" class="form-control"  placeholder="Permanent Address" name="permanentaddress" required>
	  <input type="text" class="form-control" placeholder="Present Address" name="presentaddress" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label>Contact no.</label>
      </div>
      <div class="col-75">
          <input type="number" class="form-control" id="box" placeholder="Mobile No." name="mobileno" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label>Aadhar no.</label>
      </div>
      <div class="col-75">
          <input type="number" class="form-control" id="box" placeholder="Aadhar number" name="aadharno" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label>Occupation</label>
      </div>
      <div class="col-75">
           <input type="text" class="form-control" id="box" placeholder="Your Occupation" name="occupation" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label>Membership Type</label>
      </div>
      <div class="col-75">
        <div class="form-inline" >
		<div class="form-group mb-2">
<input class="form-check-input" type="radio" name="membership" id="Golden" value="g" checked ></td>
  <label class="form-check-label" for="Golder"> Golden </label></div>
  <div class="form-group mx-sm-3 mb-2">
<input class="form-check-input" type="radio" name="membership" id="Silver" value="s">
 <label class="form-check-label" for="Silver">Silver</label></div>
</div>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label>Upload your image (max 100kb)</label>
      </div>
      <div class="col-75">
           <input type="file"  class="form-control-file" id="profileimage" name="profileimage" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label>Upload your ID Proof (max 100kb)</label>
      </div>
      <div class="col-75">
           <input type="file"  class="form-control-file" id="idproof" name="idproof" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label>Upload your Signature (max 100kb)</label>
      </div>
      <div class="col-75">
          <input type="file"  class="form-control-file" id="signature" name="signature" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
         <input type="checkbox"  id="exampleCheck1" required>
    <label  for="exampleCheck1">Agree with terms and Conditions</label>
      </div>
     
    </div>
    <div class="row">
       <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
  </form>
 
</div>-->
<center><div class="formdetails">

<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf9KtWpAaANOb1kT5nccb5mMqGrxe-CH0zBytxgzeePSUufaA/viewform?embedded=true" width="640" height="2571" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div></center>

	
	
	
</main>
	<?php 
include("includes/footer.php");
?>
    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>
<?php
$error = "";
if (array_key_exists("submit", $_POST)) {
        
        include("includes/connect.php");
				
    //Stores the filename as it was on the client computer.
    $imagename1 = $_FILES['profileimage']['name'];
	$imagename2 = $_FILES['idproof']['name'];
	$imagename3 = $_FILES['signature']['name'];
    //Stores the filetype e.g image/jpeg
    $imagetype1 = $_FILES['profileimage']['type'];
	 $imagetype2 = $_FILES['idproof']['type'];
	  $imagetype3 = $_FILES['signature']['type'];
    //Stores any error codes from the upload.
    $imageerror1 = $_FILES['profileimage']['error'];
	 $imageerror2 = $_FILES['idproof']['error'];
	  $imageerror3 = $_FILES['signature']['error'];
    //Stores the tempname as it is given by the host when uploaded.
    $imagetemp1 = $_FILES['profileimage']['tmp_name'];
	$imagetemp2 = $_FILES['idproof']['tmp_name'];
	$imagetemp3 = $_FILES['signature']['tmp_name'];
	
	//SIZE
	$imagesize1 = $_FILES['profileimage']['size'];
	$imagesize2 = $_FILES['idproof']['size'];
	$imagesize3 = $_FILES['signature']['size'];
	

    //The path you wish to upload the image to
    $imagePath = "assets/formimage/";

			
			$query = "SELECT id FROM register WHERE email = '".mysqli_real_escape_string($db ,$_POST['email'])."' LIMIT 1";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) > 0) {
				echo("<script>alert('The email address is taken.')</script>");
			} else if(($imagetype1=="image/jpeg" or $imagetype1=="image/jpg" or $imagetype1=="image/png") AND ($imagetype2=="image/jpeg" or $imagetype2=="image/jpg" or $imagetype2=="image/png") AND($imagetype3=="image/jpeg" or $imagetype3=="image/jpg" or $imagetype3=="image/png"))
			{
				if($imagesize1<=100000 AND $imagesize2<=100000 AND $imagesize3<=100000)
				{
				$query1 = "INSERT INTO register (firstName, middleName, lastName, dateofbirth, fathername, email, nationality, gender, permanentaddress, presentaddress, mobileno, aadharno, occupation, membership,profileimage,idproof,signature) 
						  VALUES('".mysqli_real_escape_string($db, $_POST['firstName'])."','".mysqli_real_escape_string($db, $_POST['middleName'])."','".mysqli_real_escape_string($db, $_POST['lastName'])."','".mysqli_real_escape_string($db, $_POST['dateofbirth'])."','".mysqli_real_escape_string($db, $_POST['fathername'])."','".mysqli_real_escape_string($db, $_POST['email'])."','".mysqli_real_escape_string($db, $_POST['nationality'])."','".mysqli_real_escape_string($db, $_POST['gender'])."','".mysqli_real_escape_string($db, $_POST['permanentaddress'])."','".mysqli_real_escape_string($db, $_POST['presentaddress'])."','".mysqli_real_escape_string($db, $_POST['mobileno'])."','".mysqli_real_escape_string($db, $_POST['aadharno'])."','".mysqli_real_escape_string($db, $_POST['occupation'])."','".mysqli_real_escape_string($db, $_POST['membership'])."','$imagePath$imagename1','$imagePath$imagename2','$imagePath$imagename3')";
						
					move_uploaded_file($imagetemp1, $imagePath.$imagename1);
					move_uploaded_file($imagetemp2, $imagePath.$imagename2);
					move_uploaded_file($imagetemp3, $imagePath.$imagename3);
				}
			else 
		{
			echo("<script>alert('Larger Image, Only 100kb file size is valid.')</script>");
		}
			}
			else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}

if(mysqli_query($db,$query1))
{
	echo ("<script>alert('Post has been Submitted')</script>");
	echo"<script>window.open('index.php','_self')</script>";
}
else{ echo"<script>window.open('index.php','_self')</script>"; }
}
?>