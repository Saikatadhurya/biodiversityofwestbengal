<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('Location:login.php');
}	
$user_name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>WINGS-Admin Pannel</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
	
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
	
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include("includes/header.php") ?>			
				
				
     <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> WINGS</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
				
				<?php if(!isset($_SESSION)) {
    session_start();
}
?>
 <script type="text/javascript">
function fetch_select3(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option3:val
 },
 success: function (response) {
  document.getElementById("sname").innerHTML=response; 
 }
 });
}

function fetch_select4(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option4:val
 },
 success: function (response) {
  document.getElementById("cname").innerHTML=response; 
 }
 });
}
</script>
<?php
include('includes/connect.php');
$edit_id = @$_GET['edit'];
$query = mysqli_query($db,"select * from sub4audioxeno where id = '$edit_id'");

while($row=mysqli_fetch_assoc($query))
{
	$edit_id1= $row['id'];
	$cname=$row['cname'];
	$sname=$row['sname'];
	$audio=$row['audio'];
	$date=$row['date'];
	$pname=$row['pname'];
	$place=$row['place'];
	$district=$row['district'];
	$description=$row['description'];
	
?>
<form action="editaudio.php?edit_form=<?php echo $edit_id1; ?>" method="POST" enctype="multipart/form-data">

<div class="col-lg-15">

<div class="col-sm-3">
				<div class="form-group">
				 <label>Common Name</label>
		
					<input class="form-control" name="cname" type="text" value="<?php echo $cname;?>" disabled>
							</div>	
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Scientific Name</label>
		
					<input class="form-control" name="sname" type="text" value="<?php echo $sname;?>" disabled>
							</div>	
				</div>
			<!--	<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Audio Serial no.</label>
		
					<input class="form-control" name="id" type="number" placeholder="Enter Number" required>
							</div>	
				</div>-->
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Audio id</label>
		
					<input class="form-control" name="id" type="text" value="<?php echo $edit_id1;?>" disabled>
							</div>	
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Xeno-Canto Audio id</label>
		
					<pre>https://www.xeno-canto.org/<input class="form-control" name="audioid" type="text" placeholder="AudioID" value="<?php echo $audio;?>" required></pre>
						<iframe src='https://www.xeno-canto.org/<?php echo $audio; ?>/embed' scrolling='no' frameborder='0' width='280' height='220'></iframe>
							</div>	
				</div>
				
				
		
		<div class="col-sm-4">
				<div class="form-group">
				 <label>Enter Date</label>
		
					<input class="form-control" name="date" type="date" value="<?php echo $date;?>" required>
							</div>	
				</div>
		<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Recorder's Name</label>
		
					<input class="form-control" name="pname" type="text" value="<?php echo $pname;?>" required>
							</div>	
				</div>		
		<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Place</label>
		
					<input class="form-control" name="place" type="text" value="<?php echo $place;?>" required>
							</div>	
				</div>	
		<div class="col-sm-3">
		<div class="form-group">
				 <label>Choose District</label>
						<select class="form-control round-form" name="district" required> 
						<option value="<?php echo $district;?>"><?php echo "$district";?></option>
						 <?php
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from district order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							$district = $row1['name'];
							 ?>
						  <option value="<?php echo $district; ?>"><?php echo "$district"; ?></option>
						  <?php 
							}
							?>
						</select>
						
				</div>
				</div>
			<div class="col-sm-15">
				<div class="form-group">
				<input class="form-control" name="description" type="text" placeholder="Enter Description(max 50 words)" value="<?php echo $description;?>" maxlength="50" required>
			</div>
		</div>	
			
</div>	
	<div class="col-lg-12">			
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="update">Update Species Audio</button>
  </div>
</div>	

</form>
<div class="alert alert-danger col-lg-12" role="alert">
 <p> Please don't use  single inverted comma (') in this admin panel. Instead you can use bracket().</p>
 <p>For example, please write Temminck(s) Stint, Jerdon(s) Leafbird; not Temminck's Stint, Jerdon's leafbird</p>
</div>
<?php 
}
?>

				
				
		</div>
          	</div>
		
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include("includes/footer.php"); ?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
	

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    

	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
<?php

$user_name = $_SESSION['username'];
if(isset($_POST['update']))
{
	if($_POST['date']==''  OR $_POST['description']==''  OR $_POST['place']=='' OR $_POST['district']==''  OR $_POST['pname']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('index.php?editaudio=editaudio','_self')</script>";
	}
	else
	{
		$update_id = $_GET['edit_form'];
		$update_id = mysqli_real_escape_string($db, $update_id);
		
		
		$date = $_POST['date'];
		$date = mysqli_real_escape_string($db, $date);
		$pname = $_POST['pname'];
		$pname = mysqli_real_escape_string($db, $pname);
		$place = $_POST['place'];
		$place = mysqli_real_escape_string($db, $place);
		$district = $_POST['district'];
		$district = mysqli_real_escape_string($db, $district);
		$description = $_POST['description'];
		$description = mysqli_real_escape_string($db, $description);
		$audioid = $_POST['audioid'];
		$audioid = mysqli_real_escape_string($db, $audioid);
		
		
		
		$update_query="update sub4audioxeno set audio = '$audioid', date = '$date', pname = '$pname', place = '$place', district = '$district', description = '$description' where id = '$update_id'";
		 
		
		if(mysqli_query($db,$update_query))
{
    $flag=1;
	$query1 = mysqli_query($db,"select * from contributors");
	while($row = mysqli_fetch_assoc($query1))
	{
		if(strcmp($pname,$row['name'])==0)
		{
			$flag=0;
		}
	}
	if($flag==1){
		mysqli_query($db,"INSERT INTO contributors (name) VALUES('$pname')");
	}
	echo ("<script>alert('Species Audio is Successfully Updated')</script>");
	echo"<script>window.open('index.php?editaudio=editaudio','_self')</script>";
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('index.php?editaudio=editaudio','_self')</script>"; }
			
	}
}	
?>	
