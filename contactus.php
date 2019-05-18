<?php
$error = "";
$successMessage = "";
	if ($_POST){
		
		if (!$_POST["email"]) {
			$error.="An email address is required.<br>";
		 }
		 
		 if (!$_POST["content"]) {
			$error.="A content field is required.<br>";
		 }
		 
		 if (!$_POST["subject"]) {
			$error.="A subject is required.<br>";
		 }
		
if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== false) {
  $error .= "The email address is invalid.<br>"; 
}
if ($error != "") {
		$error = '<div class="alert alert-danger" role="alert"><p> <b>There were error(s) in your form:</b></p>' . $error .'</div>';
	
      }else{
		  $emailTo= "wildwingsbengal@gmail.com";
		  $subject = $_POST['subject'];
		  $content = $_POST['content'];
		  $headers = "From: ".$_POST['email'];
		 if(mail($emailTo, $subject, $content, $headers)) {
			 $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
		 }else{
			 $successMessage = '<div class="alert alert-danger" role="alert"><p>Your message couldn\'t be sent - please try again later </div>';
  }
	  }
}
?>       

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
	<meta name="description" content=" This is not just an NGO, not just another society.. Rather a bunch of men and women selflessly working towards the betterment of Nature.. People say Charity begins at home and Home was not built in a Day. We understood, to begin saving Nature we need to start with ourselves maybe and just maybe others will follow through. We understood that the damage we have done to Nature can't be healed in a day, it will take time, but Better Late than Never. We have started our Journey.. we will continue... We urge all of you seeing this website to come forward and lend your Hand in any way you can. Be a volunteer in our cause, be a member of this society wherever you may stay in this world. you can still help Mother Nature to return to her Glory."/>
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
	<link rel="stylesheet" type="text/css" href="assets/css/contactus.css"> 
	<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	 

    <title>WINGS India</title>
  </head>
  <body>
 <?php include("includes/header.php") ?>
 
  <main role="main">
	<br>
	<br>


    <div class="container contactus">
		<h1>Get in touch</h1>
		<div id="error"><?php echo $error.$successMessage; ?></div>
		
		<form method="post">
  <div class="form-group">
    <label for="email">Email address</label>  
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
  </div>
   <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" name="subject" id="subject">
  </div>
  
  <div class="form-group">
    <label for="content">What would you like to ask us?</label>
    <textarea class="form-control" name="content" id="content" rows="3"></textarea>
  </div>
  
  <button type="submit" id="submit"  class="btn btn-primary">Submit</button>
</form>
	</div>
	

</main>
	<?php 
include("includes/footer.php");
?>
<script type="text/javascript">
	$("form").submit(function(e){   
		
		var error="";
		
		if ($("#email").val() == ""){
			error += "The email field is required.<br>";
		}
		if ($("#subject").val() == ""){
			error += "The subject field is required.<br>";
		}
		if ($("#content").val() == ""){
			error += "The content field is required.";
		}
		
		if (error !=""){
			$("#error").html('<div class="alert alert-danger" role="alert"><p> <b>There were error(s) in your form:</b></p>' + error + '</div>' );
		return false;
		}else{
			return true;
		}
		
	}); //not refreshing the page
  
  
  
  </script>
  
    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>	