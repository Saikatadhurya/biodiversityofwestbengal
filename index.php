
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
	<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="stylesheet" type="text/css" href="assets/css/counter.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cardhover.css">
	<link rel="icon" href="assets/image/logo.png" type="image/gif" sizes="16x16">

	

	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <style>
		     		body{background-color:#F2F2F2;}
		#carousel3d .carousel-3d-slide {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-align: center;
  background-color: #fff;
  padding: 10px;
  -webkit-transition: all .4s;
  transition: all .4s;
  font-size:12px;
}
#carousel3d .carousel-3d-slide.current {
  background-color: #fff;
  font-size:10px;
}
#carousel3d .carousel-3d-slide.current span {
  font-size: 20px;
  font-weight: 500;
}
.tablestyle {overflow-x:auto;
height:560px;}
		     	    
		     
		     
		 </style>
    <title>Biodiversity of West Bengal</title>
  </head>
  <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NCP85W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	  
 <?php include("includes/header.php") ?>
	
	  <main role="main">
	  
	<div class="container">
	  <center><h3 class="shadow p-3 mb-5 bg-white rounded" id="heading"><b>BIODIVERSITY OF WEST BENGAL</b> <br><hr> THE FIRST INTERACTIVE DATABASE ON BIODIVERSITY OF WEST BENGAL</h3></center>
	 <center> <h3 style="padding:20px;">Recent Images</h3></center>
	    <div id="carousel3d">
		
  <carousel-3d :perspective="0" :space="250" :display="7" :controls-visible="false" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="false" :autoplay="true" :autoplay-timeout="2500">
    <?php include_once("includes/connect.php"); ?>
	<?php
		$i=0;
		$query1 = mysqli_query($db,"select * from sub4 order by timestamp desc limit 7");
		while($rows1 = mysqli_fetch_assoc($query1))
		{
			$image = $rows1['image'];
			$thumb = $rows1['thumb'];
			$pname = $rows1['pname'];
			$cname = $rows1['cname'];
			$sname = $rows1['sname'];
			$district = $rows1['district'];
		?>
		<slide :index="<?php echo $i++;?>">
		 <p><?php echo $cname; ?> <i><?php echo $sname;?></i></p>
      <a href="description.php?sname=<?php echo $sname; ?>"><img src="assets/image/<?php if($thumb == '') {echo $image;}else {echo 'thumb/'.$thumb; } ?>" style="max-width:300px;max-height:200px; margin:-10px;"></a>
		<p style="margin-top:8px; float:left;"><span style="font-size:10px; float:left; margin-left:20px;">©<?php echo $pname; ?></span><span style="font-size:10px; float:right; margin-right:20px;"><?php echo $district; ?></span></p>
		
    </slide>
		<?php
		}
		?>
  </carousel-3d>
</div>
<hr>
 <center> <h3 style="padding:20px;">Recent Audio</h3></center>
 
 <div class="row">
		
			<?php
			include_once("includes/connect.php"); 
		$query1 = mysqli_query($db,"select * from sub4audioxeno order by timestamp desc limit 4");
		while($rows1 = mysqli_fetch_assoc($query1))
		{
			$audio = $rows1['audio'];
			$pname = $rows1['pname'];
			$cname = $rows1['cname'];
			$sname = $rows1['sname'];
			$district = $rows1['district'];
		?>
			
			<div class="col-sm-3">
			<a href="description.php?sname=<?php echo $sname; ?>"><b><p style="font-size:14px;"><?php echo $cname;?> (<?php echo $sname;?>)</p></b></a>
			<iframe src='https://www.xeno-canto.org/<?php echo $audio; ?>/embed?simple=1' scrolling='no' frameborder='0' width='280' height='115'></iframe>
				
			</div>
					<?php
					}
					?>
			</div>
	    
<hr>
	   

         
        <div class="counter">
	   <div class="row">
		<?php 
		
		$query = mysqli_query($db,"select * from sub4name");
		$species = mysqli_num_rows($query);
		?><div class="col-md-1 col-2"></div>
            <div class="col-md-2 col-12">
                <div class="images">
                    <p class="counter-count shadow-lg"><?php echo $species; ?></p>
                    <p class="images-p white">Species</p>
                </div>
            </div>
			<?php $query = mysqli_query($db,"select * from sub4");
		$image = mysqli_num_rows($query);
		?>
            <div class="col-md-2 col-6">
                <div class="images">
                    <p class="counter-count shadow"><?php echo $image; ?></p>
                    <p class="images-p white">Images</p>
                </div>
            </div>
			
		<?php $query = mysqli_query($db,"select * from sub4video");
		$video = mysqli_num_rows($query);
		?>
            <div class="col-md-2 col-6">
                <div class="videos">
                    <p class="counter-count shadow"><?php echo $video; ?></p>
                    <p class="videos-p white">Videos</p>
                </div>
            </div>
		<?php $query = mysqli_query($db,"select * from sub4audioxeno");
		$audio = mysqli_num_rows($query);
		?>
            <div class="col-md-2 col-6">
                <div class="audios">
                    <p class="counter-count shadow"><?php echo $audio; ?></p>
                    <p class="audios-p white">Audios</p>
                </div>
            </div>
			<?php $query = mysqli_query($db,"select * from sub4 group by pname");
		$contributor = mysqli_num_rows($query);
		?>
            <div class="col-md-2 col-6">
                <div class="contributor">
                    <p class="counter-count shadow"><?php echo $contributor; ?></p>
                    <p class="contributor-p white">Contributors</p>
                </div>
            </div>
        </div>
    </div>
<hr>
<div class="row">
<div class="col-md-4">
<h4><b>Top 10 Contributors</b></h4>
<table class="table table-borderless">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Total Contribution</th>
     
    </tr>
  </thead>
  <tbody>
  <?php  
  
  $pname1=array();
  $total=array();
  $query = mysqli_query($db,"select * from contributors");
  while($row=mysqli_fetch_assoc($query))
  {
	  $pname=$row['name'];
	  $query1= mysqli_query($db,"select * from sub4 where pname='$pname'");
	  $image = mysqli_num_rows($query1);
	  $query2= mysqli_query($db,"select * from sub4video where pname='$pname'");
	  $video = mysqli_num_rows($query2);
	  $query3= mysqli_query($db,"select * from sub4audioxeno where pname='$pname'");
	  $audio = mysqli_num_rows($query3);
	  $total[$pname] = $image + $video + $audio;
	  
  }
arsort($total);
$i=0;
foreach($total as $x => $x_value) {
	if($i == 10)
		break;
	$i++;
?>
    <tr>
      <th scope="row"><?php echo $x;?></th>
      <td><?php echo $x_value;?></td>
      
    </tr>
	<?php }

  ?>
  
  </tbody>
</table>
</div>
<div class="col-md-1"></div>
<div class="col-md-7">
<h4><b>Latest Species in Database</b></h4>
<div class="tablestyle">
<table class="table table-borderless">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl. No.</th>
      <th scope="col">Common Name</th>
      <th scope="col">Scientific Name</th>
     
    </tr>
  </thead>
  <tbody>
 <?php
$s=1; 
 $query = mysqli_query($db,"select * from sub4name order by id desc limit 20");
  while($row=mysqli_fetch_assoc($query))
  {
	  $cname=$row['cname'];
	  $sname=$row['sname'];
	  ?>
    <tr>
      <td><?php echo $s++; ?></td>
      <td><a href="description.php?sname=<?php echo $sname; ?>"><?php echo $cname; ?></a></td>
      <td><a href="description.php?sname=<?php echo $sname; ?>"><?php echo $sname; ?></a></td>
      
    </tr>
  <?php } ?>
 
  </tbody>
</table>
</div>
</div>
</div>
<hr>
	 <div class="row">
      
	    <?php 

$query = mysqli_query($db,"select * from kingdom order by kingdom");

while($row = mysqli_fetch_assoc($query))
{
$id = $row['id'];

$kingdom = $row['kingdom'];

$image = $row['image'];

$description = $row['description'];

 ?>

      <div class="col-md-4">
        <div class="card shadow" style="margin:5px;">
          <a href="sub1.php?kingdom=<?php echo $kingdom; ?>"><img class="card-img-top img-fluid" src="assets/image/<?php echo $image;?>" alt="Card image cap" title="<?php echo $kingdom; ?>"></a>
          <div class="card-body">
            <h4 class="card-title"><?php echo $kingdom;?></h4>
            <p class="card-text"><?php echo $description; ?></p>
			<a href="sub1.php?kingdom=<?php echo $kingdom; ?>" class="btn btn-primary"><?php echo $kingdom; ?> Database</a>
          </div>
		  
        </div>
      </div>
	  <?php
		}
		?>
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

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
<script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
	
<script >new Vue({
  el: '#carousel3d',
  data: {
    slides: 7
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})
//# sourceURL=pen.js
</script>
  </body>
</html>
