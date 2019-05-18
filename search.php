<!doctype html>
<html>
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


<meta charset="utf-8">
<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
<title>Search (with keywords) </title>
<style>
    .result{
    width: 250px; display: inline-block;background:#cce5ff; margin: 5px; padding:10px;border-radius:10%;color:black;}
</style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NCP85W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php 
include("includes/connect.php");
 $search = mysqli_real_escape_string($db,$_POST['searchterm']);
  $find = mysqli_query($db,"SELECT * From sub4name WHERE cname LIKE '%$search%' or sname LIKE '%$search%' LIMIT 5");
 $rowcount=mysqli_num_rows($find);
if($rowcount !=0)
{
  while($row = mysqli_fetch_assoc($find))
    {
		$cname = $row['cname'];
		
		$sname = $row['sname'];
		
		$id = $row['id'];
		
		$sub3 = $row['sub3'];
		
	 echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/description.php?sname=$sname'><li class='result'>$cname <i>$sname</i></li></a>";
		
	
  }
}
  
  $find = mysqli_query($db,"SELECT * From sub2 WHERE name LIKE '%$search%' LIMIT 3");

  while($row = mysqli_fetch_assoc($find))
    {
		$name1 = $row['name'];
	
       echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/sub2-5.php?sub2=$name1#$name1'><li class='result'><b>$name1</b></li></a>";
		
	
  }
  $find = mysqli_query($db,"SELECT * From sub25 WHERE name LIKE '%$search%' LIMIT 3");

  while($row = mysqli_fetch_assoc($find))
    {
		$name = $row['name'];
		$name=mysqli_real_escape_string($db, $name);
		$sub2 = $row['sub2'];
		$sub2=mysqli_real_escape_string($db, $sub2);
       echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/sub3.php?sub2=$sub2&sub25=$name#$name'><li class='result'><b>$name</b></li></a>";
		
	
  }
  $find = mysqli_query($db,"SELECT * From sub3 WHERE name LIKE '%$search%' LIMIT 3");

  while($row = mysqli_fetch_assoc($find))
    {
		$name = $row['name'];
		$name=mysqli_real_escape_string($db, $name);
		$sub25 = $row['sub25'];
		$sub25=mysqli_real_escape_string($db, $sub25);
		$sub2 = $row['sub2'];
		$sub2=mysqli_real_escape_string($db, $sub2);
       echo "<a href='https://biodiversityofwestbengal.wildwingsindia.in/sub4.php?sub2=$sub2&sub25=$sub25&sub3=$name#$name'><li class='result'><b>$name</b></li></a>";
		
	
  }
?>

  </body>
  </html>