<!doctype html>
<html lang="en">
  <head>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5NCP85W');</script>
<!-- End Google Tag Manager -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132426947-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132426947-2');
</script>


    <!-- Required meta tags -->
    <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="WINGS Members"/>
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
	<link rel="stylesheet" type="text/css" href="assets/css/wildbengal.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ourteam.css">
	<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="icon" href="assets/image/logo.png" type="image/gif" sizes="16x16">

	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <style>
		     	@media only screen and (max-width: 800px) {
		     	.tablestyle {overflow-x:auto;}
		     	    
		     	}
		     
		 </style>
    <title>Our Contributors</title>
  </head>
  <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NCP85W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	  
  <?php include("includes/header.php") ?>
	
	  <main role="main">
	  <div class="container">
	<center><h3 style="color:#8A0886">Our Contributors</h1></center>
	 <br>
	 <div class="tablestyle">
	  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Video</th>
	  <th scope="col">Audio</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include("includes/connect.php");
	$c=0;
  $query = mysqli_query($db,"select * from contributors group by name");
  while($row=mysqli_fetch_assoc($query))
  {
	  $pname=$row['name'];
	  $query1= mysqli_query($db,"select * from sub4 where pname='$pname'");
	  $image = mysqli_num_rows($query1);
	  $query2= mysqli_query($db,"select * from sub4video where pname='$pname'");
	  $video = mysqli_num_rows($query2);
	  $query3= mysqli_query($db,"select * from sub4audioxeno where pname='$pname'");
	  $audio = mysqli_num_rows($query3);
  ?>
    <tr>
      <th scope="row"><?php echo ++$c;?></th>
      <td><?php echo $pname;?></td>
      <td><?php echo $image;?></td>
      <td><?php echo $video;?></td>
	  <td><?php echo $audio;?></td>
    </tr>
  <?php
  }
  ?>
  </tbody>
</table>	
</div>	
</div>
</main>
	<?php 
include("includes/footer.php");
?>
    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
	<script src="assets/js/card.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>