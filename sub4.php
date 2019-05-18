<?php include("includes/connect.php");

		$page_sub2 = $_GET['sub2'];
		$page_sub2=mysqli_real_escape_string($db, $page_sub2);
		
		$page_sub3 = $_GET['sub3'];
		$page_sub3=mysqli_real_escape_string($db, $page_sub3);
		
		if(isset($_GET['sub35']))
		{
		$page_sub35 = $_GET['sub35'];
		$page_sub35=mysqli_real_escape_string($db, $page_sub35);
		
		}
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
	 <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable=false;>
	<meta name="description" content=" Interactive database with Image, Video and Audio database of <?php echo $page_sub3; ?> is here."/>
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
	<link rel="stylesheet" type="text/css" href="assets/css/tree.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cardhover.css">
	<link rel="icon" href="assets/image/logo.png" type="image/gif" sizes="16x16">
		
		 <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	 

    <title><?php echo $page_sub3; ?>|Biodiversity of West Bengal</title>
    <style>
  @media only screen and (max-width: 800px) {
      .col-sm-6 img {
          width:200px;
          
      }
  }
   .font{font-size:15px;}
   .gallery img {
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
	margin: 5px;
}
.gallery a, .gallery a:focus, .gallery a:active{ outline:none;}
  </style>
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

	
		$query = mysqli_query($db,"select * from sub25 where sub2='".mysqli_real_escape_string($db, $page_sub2)."' order by name");

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
	<div id="containerA">
	<?php 

		if(!isset($page_sub35))
		{
		$query = mysqli_query($db,"select * from sub4name where sub3='$page_sub3'");
		$rows = mysqli_fetch_assoc($query);
		$sub3 = $rows['sub3'];
		$sub3=mysqli_real_escape_string($db, $sub3);
		?>
	<span id="<?php echo $sub3;?>"></span>

		<h2 class="shadow" style="padding:10px;margin-top:30px;"><b><?php echo "$sub3"; ?></b></h2><?php }else {
		$query = mysqli_query($db,"select * from sub4name where sub35='$page_sub35'");
		$rows = mysqli_fetch_assoc($query);
		$sub35 = $rows['sub35'];
		$sub35=mysqli_real_escape_string($db, $sub35);
		?>
	<span id="<?php echo $sub35;?>"></span>

		<h2 class="shadow" style="padding:10px;margin-top:30px;"><b><?php echo "$sub35"; ?></b></h2>
		<?php } ?>
		
		<hr>
<?php		
		if(isset($page_sub35))
		$query = mysqli_query($db,"select * from sub4name where sub35='$page_sub35' order by cname");
	else
		$query = mysqli_query($db,"select * from sub4name where sub3='$page_sub3' order by cname");

		while($rows = mysqli_fetch_assoc($query))
		{

		$cname = $rows['cname'];
		if($cname == '-')
			$cname = "";
		$sname = $rows['sname'];
		
		$lname = $rows['lname'];
		$author = $rows['author'];
		$iucnstatus = $rows['iucnstatus'];
		
		 ?>
		
		<div id="<?php echo $cname ?>">
		   <a href="description.php?sname=<?php echo $sname; ?>" style="text-decoration:none;"><h3><b><?php echo "$cname"; ?></b> <i><?php echo "$sname"; ?></i> <?php echo "$author"; ?></h3></a><br>
		   <p><b>Local Name:</b> <?php echo "$lname"; ?></p>
		  <p><b>IUCN threatened Category:</b> <?php echo "$iucnstatus"; ?></p>
					<hr>
			<h4>Images</h4>
			<div class="row gallery">
			 
		<?php 	
		$query1 = mysqli_query($db,"select * from sub4 where sname='".mysqli_real_escape_string($db, $sname)."' order by slno desc limit 4");
		while($rows1 = mysqli_fetch_assoc($query1))
		{
			$id = $rows1['id'];
			
		$image = $rows1['image'];
		
		$thumb = $rows1['thumb'];
		
		$date = $rows1['date'];
		
		$pname = $rows1['pname'];
		
		$place = $rows1['place'];
		
		$district = $rows1['district'];
		
		$description = $rows1['description'];
		
		?>


			<div class="col-sm-6 zoom">
			<p><b><?php echo "$description"; ?></b></p>
				
			
			   <a href="assets/image/<?php echo $image;?>" data-fancybox="gallery" data-caption="<p style='font-size:16px'><b><?php echo $cname; ?>(<i><?php echo $sname; ?></i>)</b><br> <div class='font'><?php echo $description;?><p><?php echo $id; ?></p></div> <br> © <?php echo $pname;?>, <?php echo $place;?> <?php echo date('d-m-Y',strtotime($date));?>" >
            <img src="assets/image/<?php if($thumb == '') {echo $image;}else {echo 'thumb/'.$thumb; } ?>" style="max-width:300px;max-height:300px;" title="<?php echo $cname; ?> <?php echo $sname; ?> wildwingsindia " caption="wildwingsindia.in <?php echo $cname; ?> <?php echo $sname; ?>" alt="" />
        </a>
    <p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo date('d/m/Y',strtotime($date));?></p>		
			</div>
		<?php 
		}
		?>
		</div>
		
		<p><a class="btn btn-primary"  href="description.php?sname=<?php echo $sname; ?>" role="button">View More &raquo;</a></p>
			<h4>Videos</h4>
			<div class="row">
			<?php
			$query2 = mysqli_query($db,"select * from sub4video where sname='".mysqli_real_escape_string($db, $sname)."' order by slno desc");
					while($rows2 = mysqli_fetch_assoc($query2))
					{			
					$video = $rows2['video'];
				
				$description = $rows2['description'];
				
				$date = $rows2['date'];
				
				$pname = $rows2['pname'];
				
				$place = $rows2['place'];
				
				$district = $rows2['district'];
				
			?>
			
			<div class="col-sm-6">
			
			<iframe width="300" height="200 " src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<p><b><?php echo "$description"; ?></b></p>
				<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo date('d/m/Y',strtotime($date));?></p>
			</div>
					<?php
					}
					?>
			</div>
			
			<h4>Audio</h4>
			<div class="row">
			<?php
			$query3 = mysqli_query($db,"select * from sub4audioxeno where sname='".mysqli_real_escape_string($db, $sname)."' order by slno desc");
					while($rows2 = mysqli_fetch_assoc($query3))
					{			
				$audio = $rows2['audio'];
				
				$description = $rows2['description'];
				
				$date = $rows2['date'];
				
				$pname = $rows2['pname'];
				
				$place = $rows2['place'];
			
				$district = $rows2['district'];
			
				
			?>
			
			<div class="col-sm-6">
			<iframe src='https://www.xeno-canto.org/<?php echo $audio; ?>/embed' scrolling='no' frameborder='0' width='300' height='200'></iframe>
				<p><b><?php echo "$description"; ?></b></p>
				<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo date('d/m/Y',strtotime($date));?></p>
			</div>
					<?php
					}
					?>
			</div>

			
			</div>
		
		<?php
		}
		?>

      </div>
	  
	
	
	
	

</main>
     		<?php include("includes/footer.php");?>       
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 



<script src="fancybox/jquery.fancybox.min.js"></script>

<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
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