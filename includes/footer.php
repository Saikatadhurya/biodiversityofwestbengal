 	
<?php
$host='localhost';
$user='root';
$pass='';
$db='wildwing_wingsindia';
try{
	$DBH=new pdo("mysql:host=$host;dbname=$db",$user,$pass);
}catch(PDOException $e){
	echo"Not Connected..".$e->getMessage();
}

$ip = $_SERVER['REMOTE_ADDR'];

$sql="SELECT ip FROM visitors WHERE ip='$ip'";
$Check=$DBH->prepare($sql);
$Check->execute();
$CheckIp=$Check->rowCount();
if ($CheckIp==0) {
$query="INSERT INTO visitors(id,ip) VALUES(NULL,'$ip')";
$insertIP=$DBH->prepare($query);
$insertIp=$DBH->prepare($query);
$insertIp->execute();

}
$number=$DBH->prepare("SELECT ip FROM visitors");
$number->execute();
$visitor=$number->rowCount();

 ?>
 <!-- FOOTER -->
      <footer class="footer">
	  
     
        <p> Unique Visitors: <?php echo $visitor;?></p>
        
        <p>&copy; WINGSINDIA 2019  <a href="https://www.facebook.com/wingsbengal/" class="fa fa-facebook"></a> <a href="https://www.youtube.com/channel/UC3lUBxnokJYIN6I96vaTyFQ" class="fa fa-youtube"></a></p>
        
        
        <button class="float-right"><a href="#">Back to top</a></button>
        <p align="left">Designed and Developed by: <a href="https://www.facebook.com/saikat.adhurya.0101">Saikat Adhurya</a></p>
        
      </footer>
	  <script>
	   $(document).ready(function()
{
    $('img').bind('contextmenu', function(e){
        return false;
    }); 
});
	</script>
