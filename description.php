<?php
	include("includes/connect.php"); 
		$page_sname = $_GET['sname'];
		
		$page_sname=mysqli_real_escape_string($db, $page_sname);
		
		
		$query = mysqli_query($db,"select * from sub4name where sname='".mysqli_real_escape_string($db, $page_sname)."'");
		$row = mysqli_fetch_assoc($query);
		
		$page_cname = $row['cname'];
		
		$page_sub3 = $row['sub3'];
		$page_sub3=mysqli_real_escape_string($db, $page_sub3);	
		
		$page_sub35 = $row['sub35'];
		$page_sub35=mysqli_real_escape_string($db, $page_sub35);
		
		$query = mysqli_query($db,"select * from sub3 where name='$page_sub3'");
		$row = mysqli_fetch_assoc($query);
		$page_sub25 = $row['sub25'];
		$page_sub25=mysqli_real_escape_string($db, $page_sub25);
		
		$query = mysqli_query($db,"select * from sub25 where name='$page_sub25'");
		$row = mysqli_fetch_assoc($query);
		$page_sub2 = $row['sub2'];
		$page_sub2=mysqli_real_escape_string($db, $page_sub2);
		
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
	<meta name="description" content=" Interactive database with Image, Video and Audio database of <?php echo $page_cname; ?> (<?php echo $page_sname; ?>) with Local name/Regional name."/>
	  <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable=false;>
	  <meta name="keywords" content="wings india, wild wings india, wildlife india, india wildlife, wildwingsindia, birds of bengal, Biodiversity of West Bengal,<?php echo $page_cname; ?>,<?php echo $page_sname; ?>,West Bengal, Durgapur, bengali name, hindi name " />
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
	<link rel="stylesheet" type="text/css" href="assets/css/tree.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub4.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cardhover.css">
	<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="icon" href="assets/image/logo.png" type="image/gif" sizes="16x16">
		 <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.min.css">

	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 
    <title><?php echo $page_cname; ?> (<?php echo $page_sname; ?>) | Biodiversity of West Bengal</title>
  
  <style>
  @media only screen and (max-width: 800px) {
      .col-sm-4 img {
          width:200px;
          
      }
      h4{ font-size:90%; }
      h3{ font-size:150%; }
  }
  .font{font-size:15px;}
  .collapsible {
  background-color: #f1f1f1f1;
  color: #000000;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: blod;
  text-align: left;
  outline: none;
  font-size: 15px;
  border-radius:5px;
}

collapsible .active, .collapsible:hover {
  background-color: #555;
  color:white;
}

.collapsible:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.collapsible .active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
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
	  

	
	<div id="containerB">
	
<?php if ($page_sub25 != 'Moth') {?>
 		<h4><a href="sub2-5.php?sub2=<?php echo $page_sub2; ?>#<?php echo $page_sub2; ?>"><b><?php echo $page_sub2;?></a> > <a href="sub3.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $page_sub25; ?>#<?php echo $page_sub25; ?>"><?php echo $page_sub25;?></a> > <a href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $page_sub25; ?>&sub3=<?php echo $page_sub3; ?>#<?php echo $page_sub3; ?>"><?php echo "$page_sub3"; ?></a></b></h4>
<?php }else {?>
<h4><a href="sub2-5.php?sub2=<?php echo $page_sub2; ?>#<?php echo $page_sub2; ?>"><b><?php echo $page_sub2;?></a> > <a href="sub3.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $page_sub25; ?>#<?php echo $page_sub25; ?>"><?php echo $page_sub25;?></a> > <a href="sub35.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $page_sub25; ?>&sub3=<?php echo $page_sub3; ?>#<?php echo $page_sub3; ?>"><?php echo "$page_sub3"; ?></a> > <a href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $page_sub25; ?>&sub3=<?php echo $page_sub3; ?>&sub35=<?php echo $page_sub35; ?>#<?php echo $page_sub35; ?>" ><?php echo "$page_sub35"; ?></a></b></h4>
<?php } ?>
	<hr>
	<div class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
 <div class="container-fluid">
    
  <center> <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
  <a href="description.php?sname=<?php echo $page_sname?>#image"><button type="button" class="btn btn-sm btn-danger">IMAGE</button></a>
  <a href="description.php?sname=<?php echo $page_sname?>#video"><button type="button" class="btn btn-sm btn-success">VIDEO</button></a>
  <a href="description.php?sname=<?php echo $page_sname?>#audio"><button type="button" class="btn btn-sm btn-info">AUDIO</button></a>
</div>
  </div>
</div>

<?php	
		$query = mysqli_query($db,"select * from sub4name where sname='".mysqli_real_escape_string($db, $page_sname)."'");
		$rows = mysqli_fetch_assoc($query);
		$lname = $rows['lname'];
		
		$page_cname=$rows['cname'];
		
		if($page_cname == '-')
			$page_cname = "";
		
		$author = $rows['author'];
		
		$iucnstatus = $rows['iucnstatus'];
		?>
		<div id="<?php echo $page_cname ?>">
		   <a href="#" style="text-decoration:none"><h3><b><?php echo "$page_cname"; ?></b> <i><?php echo "$page_sname"; ?></i> <?php echo "$author"; ?></h3></a>
		   <h6><b>IUCN threatened Category:</b> <?php echo "$iucnstatus"; ?></h6>
		<h6><b>Local Name:</b> <?php echo "$lname"; ?></h6>
					<hr id="image">
		<div>			
		  <button class="collapsible"><b>Description of the Species >></b></button>
			<div class="content">
			 <?php if($page_sub2 == 'Birds') {?> <br><p>Birds Description</p><?php }?>
			 <?php if($page_sub2 == 'Amphibians') {?> <br><p>Amphibians Description</p><?php }?>
			</div>		
		</div><br>
			<h4><b>Images:</b></h4>
			<div class="row gallery">
		<?php 	
		
		 include("function.php");
		$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 8; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "sub4 where sname='".mysqli_real_escape_string($db, $page_sname)."'  order by slno desc"; //you have to pass your query over here
		
		$query1 = mysqli_query($db,"select * from {$statement} LIMIT {$startpoint} , {$limit}");
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
	

			<div class="col-sm-4 zoom">
			<p><b><?php echo "$description"; ?></b></p> 	
				
  <a href="assets/image/<?php echo $image;?>" data-fancybox="gallery" data-caption="<p style='font-size:16px'><b><?php echo $page_cname; ?>(<i><?php echo $page_sname; ?></i>)</b><br><div class='font'><?php echo $description;?><p><?php echo $id; ?></p></div> © <?php echo $pname;?>, <?php echo $place;?> <?php echo date('d-m-Y',strtotime($date));?>" >
            <img src="assets/image/<?php if($thumb == '') {echo $image;}else {echo 'thumb/'.$thumb; } ?>" style="max-width:300px;max-height:300px;" title="<?php echo $id; ?>" />
        </a>
			<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo date('d/m/Y',strtotime($date));?></p>
			
			</div>
		<?php 
		}
		?>
	
<div class="col-md-12">
<?php		
echo "<div id='pagingg' >";
echo pagination($statement,$limit,$page);
echo "</div>";
?>
</div>
		
		</div>
		<hr id="video">
			<h4 id="video"><b>Videos:</b></h4>
			<div class="row">
			<?php
			$query2 = mysqli_query($db,"select * from sub4video where sname='".mysqli_real_escape_string($db, $page_sname)."' order by slno desc");
					while($rows2 = mysqli_fetch_assoc($query2))
					{			
					
				$video = $rows2['video'];
				
				$description = $rows2['description'];
				
				$date = $rows2['date'];
				
				$pname = $rows2['pname'];
				
				$place = $rows2['place'];
				
				$district = $rows2['district'];
				
			?>
	
			<div class="col-sm-4">
			
			<iframe width="300" height="200 " src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<p><b><?php echo "$description"; ?></b></p>
				<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>,<?php echo date('d/m/Y',strtotime($date));?></p> 
				
			</div>
					<?php
					}
					?>
			</div>
			<hr id="audio">
			<h4><b>Audio</b></h4>
			<div class="row">
			<?php
			$query3 = mysqli_query($db,"select * from sub4audioxeno where sname='".mysqli_real_escape_string($db, $page_sname)."' order by slno desc");
					while($rows2 = mysqli_fetch_assoc($query3))
					{			
				$audio = $rows2['audio'];
				
				$description = $rows2['description'];
				
				$date = $rows2['date'];
				
				$pname = $rows2['pname'];
				
				$place = $rows2['place'];
				
				$district = $rows2['district'];
				
				
			?>
			
			<div class="col-sm-4">
			<iframe src='https://www.xeno-canto.org/<?php echo $audio; ?>/embed' scrolling='no' frameborder='0' width='300' height='200'></iframe>
				<p><b><?php echo "$description"; ?></b></p>
				<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo date('d/m/Y',strtotime($date));?></p>
			</div>
					<?php
					}
					?>
			</div>
			</div>
		
		
	  
	  
	

</div>
</main>
  
	  <?php 
include("includes/footer.php");
?>
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
	<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>