<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="description" content="Search result"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable=false;>
    <meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquerysctipttop.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/img.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchresult.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub4.css">
	<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cardhover.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" /> 	

	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
.container a {text-decoration: none; }
</style>		
    <title>WINGS India</title>
  </head>
  <body>	  
  <?php include("includes/header.php") ?>
  <?php include("includes/connect.php") ?>
  
	<div class="container">
	<h3>Search Result</h3>
	<ol>
	<b>SPECIES SEARCH RESULT</b>
<?php	$search = mysqli_real_escape_string($db,$_POST['searchterm']);
  $find = mysqli_query($db,"SELECT * From sub4name WHERE cname LIKE '%$search%' or sname LIKE '$search%'");
   $rowcount=mysqli_num_rows($find);
if($rowcount !=0)
{
	?><p class="alert alert-success">Result Found</p>
	<hr>
	<?php
  while($row = mysqli_fetch_assoc($find))
    {
		$cname = $row['cname'];
		
		$sname = $row['sname'];
		
		$id = $row['id'];
		
		$sub3 = $row['sub3'];
		
	 echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/description.php?sname=$sname'><li>$cname <i>$sname</i></li></a>";
		
	
  }
}else{
  ?><p class="alert alert-danger">No Species Found</p> 
<?php }
?>
  <hr>
  <b>OTHER SEARCH RESULTS</b>
  <?php
  $find = mysqli_query($db,"SELECT * From sub2 WHERE name LIKE '%$search%'");
 
  while($row = mysqli_fetch_assoc($find))
    {
		$name1 = $row['name'];
	
       echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/sub2-5.php?sub2=$name1#$name1'><li><b>$name1</b></li></a>";
		
	
  }

  $find = mysqli_query($db,"SELECT * From sub25 WHERE name LIKE '%$search%'");

  while($row = mysqli_fetch_assoc($find))
    {
		$name = $row['name'];
		$name=mysqli_real_escape_string($db, $name);
		$sub2 = $row['sub2'];
		$sub2=mysqli_real_escape_string($db, $sub2);
       echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/sub3.php?sub2=$sub2&sub25=$name#$name'><li><b>$name</b></li></a>";
		
	
  }
  $find = mysqli_query($db,"SELECT * From sub3 WHERE name LIKE '%$search%'");

  while($row = mysqli_fetch_assoc($find))
    {
		$name = $row['name'];
		$name=mysqli_real_escape_string($db, $name);
		$sub25 = $row['sub25'];
		$sub25=mysqli_real_escape_string($db, $sub25);
		$sub2 = $row['sub2'];
		$sub2=mysqli_real_escape_string($db, $sub2);
       echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/sub4.php?sub2=$sub2&sub25=$sub25&sub3=$name#$name'><li><b>$name</b></li></a>";
		
	
  }
?>

	</ol>

</div>
	<?php 
include("includes/footer.php");
?>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script>
$(document).ready(function ($) {
      $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
     event.preventDefault();
    $(this).ekkoLightbox();
      }); 
});
</script>

    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
	<script src="assets/js/tree.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>