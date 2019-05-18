
<?php include("includes/connect.php");

		$page_sub2 = $_GET['sub2'];
		$page_sub2=mysqli_real_escape_string($db, $page_sub2);
		$page_sub25 = $_GET['sub25'];
		$page_sub25=mysqli_real_escape_string($db, $page_sub25);
		?>
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
	<meta name="description" content=" All about <?php echo $page_sub25 ?> you can find here with database of images and videos"/>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquerysctipttop.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/img.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/tree.css">
	<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cardhover.css">
	<link rel="icon" href="assets/image/logo.png" type="image/gif" sizes="16x16">
	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 
    <title><?php echo $page_sub25 ?>|Biodiversity of West Bengal</title>
  </head>
  <body>
	  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NCP85W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php include("includes/header.php") ?>
	
	<main role="main">
	
<div id="container">
	
<ul>
<li><a href="sub2-5.php?sub2=<?php echo $page_sub2; ?>#<?php echo $page_sub2; ?>"><b><?php echo "$page_sub2";?></b></a>
<ul>
<?php 

	
		$query = mysqli_query($db,"select * from sub25 where sub2='$page_sub2' order by name");

		while($row = mysqli_fetch_assoc($query))
		{
		$id = $row['id'];
		
		$name = $row['name'];
		
		$sub2 = $row['sub2'];
		
		 ?>
<li><a href="sub3.php?sub2=<?php echo $sub2; ?>&sub25=<?php echo $name; ?>#<?php echo $name; ?>"><?php echo "$name";?></a>
<ul>
<?php 

		$query1 = mysqli_query($db,"select * from sub3 where sub25='".mysqli_real_escape_string($db, $name)."' order by name");

		while($rows = mysqli_fetch_assoc($query1))
		{
		$id2 = $rows['id'];
		
		$name2 = $rows['name'];
		
		$sub25 = $rows['sub25'];
		
		 if($sub25 != 'Moth')
		 {
		 ?>		
<li><a href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name2; ?>#<?php echo $name2; ?>"><?php echo "$name2";?></a></li>
		 <?php }else{ ?>
		 <li><a href="sub35.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name2; ?>#<?php echo $name2; ?>"><?php echo "$name2";?></a></li>
		
<?php
		 }
		}
	?>
</ul>
</li>
<?php
		}
?>
</li>
</ul>
</ul>
</div>
<div id="containerR">
<?php  $query = mysqli_query($db,"select * from sub3 where sub25='".mysqli_real_escape_string($db, $page_sub25)."'");
		$rows = mysqli_fetch_assoc($query);
		$sub25 = $rows['sub25'];
		$sub25=mysqli_real_escape_string($db, $sub25);
		?>
<span id="<?php echo $sub25; ?>"></span>
		<hr>
		<h2 class="shadow" style="padding:10px;margin-top:30px;"><b><?php echo "$sub25"; ?></b></h2><br>
		<hr>
	

	<div class="row">
				  
				   <?php 
				   $query = mysqli_query($db,"select * from sub3 where sub25='".mysqli_real_escape_string($db, $page_sub25)."' order by name");


		while($row1 = mysqli_fetch_assoc($query))
		{
		$id1 = $row1['id'];
		
		$name1 = $row1['name'];
		
		$sub25 = $row1['sub25'];
		
		$image = $row1['image'];
		
		$description = $row1['description'];
		
		 ?>
		 <?php if($sub25 != 'Moth')
		 {
			 ?>
				   <div class="col-lg-4 shake">
				   <a href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name1; ?>#<?php echo $name1; ?>" > <img class="rounded-circle shadow" src="assets/image/<?php echo "$image"; ?>" alt="Generic placeholder image" width="140" height="140" title="wildwingsindia"></a>
					<h2 style="text-align:left;"><?php echo "$name1"; ?></h2>
					<p><?php echo "$description"; ?></p>
					<p><a class="btn btn-secondary" href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name1; ?>#<?php echo $name1; ?>" role="button">View details &raquo;</a></p>
				  </div><!-- /.col-lg-4 -->
		 <?php } else { ?>
		 <div class="col-lg-4 shake">
				   <a href="sub35.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name1; ?>#<?php echo $name1; ?>" > <img class="rounded-circle shadow" src="assets/image/<?php echo "$image"; ?>" alt="Generic placeholder image" width="140" height="140" title="wildwingsindia"></a>
					<h2 style="text-align:left;"><?php echo "$name1"; ?></h2>
					<p><?php echo "$description"; ?></p>
					<p><a class="btn btn-secondary" href="sub35.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name1; ?>#<?php echo $name1; ?>" role="button">View details &raquo;</a></p>
				  </div><!-- /.col-lg-4 -->
		 <?php } ?>

		<?php
		}
		?>
	</div>

</div>	
	
	
	
		
</main>
<?php include("includes/footer.php");?>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>