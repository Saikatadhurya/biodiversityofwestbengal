<?php include("includes/connect.php");

$page_kingdom = $_GET['kingdom']; 
$page_kingdom=mysqli_real_escape_string($db, $page_kingdom);?>

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
	<meta name="description" content="<?php echo $page_kingdom; ?> with photo, video and audio database available here. "/>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	<link rel="stylesheet" type="text/css" href="assets/css/sub3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/social.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cardhover.css">
	<link rel="icon" href="assets/image/logo.png" type="image/gif" sizes="16x16">
	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 
    <title><?php echo $page_kingdom; ?>|Biodiversity of West Bengal</title>
  </head>
  <body>
	 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NCP85W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 
  <?php include("includes/header.php") ?>
	<main role="main">
	
	<div class="container">
 <br>
        
	<?php	   
$query = mysqli_query($db,"select * from sub1 where kingdom='$page_kingdom' order by name");
$row1 = mysqli_fetch_assoc($query);
$kingdom=mysqli_real_escape_string($db, $row1['kingdom']);
?>
<h1 class="shadow" style="padding:10px;margin-bottom:30px;"><b><?php echo $kingdom;?></b></h1>
        <!-- Three columns of text below the carousel -->
        <div class="row">
       
<?php
$query = mysqli_query($db,"select * from sub1 where kingdom='$page_kingdom' order by name");

while($row = mysqli_fetch_assoc($query))
{
$id = $row['id'];

$name = $row['name'];

$image = $row['image'];

$description = $row['description'];

 ?>
			<div class="col-lg-5 shake" style="border:2px solid; padding:40px; margin:10px; border-radius:30px">
           <a href="sub2.php?sub1=<?php echo $name; ?>" > <img class="rounded-circle shadow" src="assets/image/<?php echo "$image"; ?>" alt="Generic placeholder image" width="140" height="140" title="wildwingsindia"></a>
			<hr>
		   <h2 style="text-align:left;"><?php echo "$name"; ?></h2>
			<hr>
            <p><?php echo "$description"; ?></p>
			<hr>
            <p><a class="btn btn-secondary" href="sub2.php?sub1=<?php echo $name; ?>" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
         

<?php
}
?>
        </div>

	
	
	
	

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