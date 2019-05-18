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
	
    <style>
	.ckcontainer {
		max-width:900px;
	}
	.check{margin:4px;}
	</style>
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
 
<?php
include('includes/connect.php');
$edit_id = @$_GET['edit'];
$edit_id = mysqli_real_escape_string($db, $edit_id);
$query = mysqli_query($db,"select * from sub4name where uniqueid = '$edit_id'");

while($row=mysqli_fetch_assoc($query))
{
	$edit_id1= $row['uniqueid'];
	$edit_id1 = mysqli_real_escape_string($db, $edit_id1);
	$cname=$row['cname'];
	$sname=$row['sname'];
	$sname = mysqli_real_escape_string($db, $sname);
	$iucnstatus1 = $row['iucnstatus'];
	$iucnstatus1 = mysqli_real_escape_string($db, $iucnstatus1);
	$lname = $row['lname'];
	$lname = mysqli_real_escape_string($db, $lname);
	$description = $row['description'];
	$description = mysqli_real_escape_string($db, $description);
	
	$migratorystatus = $row['migratorystatus'];
	$type = $row['type'];
	$size = $row['size'];
	$calls = $row['calls'];
	
?>
<form action="editdescription.php?edit_form=<?php echo $edit_id1; ?>" method="POST" enctype="multipart/form-data">
<div class="col-lg-15">


				<div class="col-sm-3">
				<div class="form-group">
				 <label>Common Name</label>
		
					<input class="form-control" name="cname" type="text" value="<?php echo $cname;?>" >
							</div>	
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Scientific Name</label>
		
					<input class="form-control" type="text" value="<?php echo $sname;?>" disabled>
					<input class="form-control" name="sname" type="hidden" value="<?php echo $sname;?>">
							</div>	
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Species id</label>
		
					<input class="form-control" type="text" value="<?php echo $edit_id1;?>" disabled>
							</div>	
				</div>
				
			
		
		
			
		<div class="col-sm-3">
				<div class="form-group">
				 <label>IUCN Threatened Category</label>
						<select class="form-control round-form" name="iucnstatus" id="iucnstatus" >
						<?php if ($iucnstatus1){?>
							   <option value="<?php echo $iucnstatus1; ?>"><?php echo $iucnstatus1;?></option>
						  <?php } ?>
						  <option>Choose IUCN threatened Category</option>
						  
						  <option value="Not Evaluated [NE]">Not Evaluated [NE]</option>
                          <option value="Data Deficient [DD]">Data Deficient [DD]</option>
                          <option value="Least Concern [LC]">Least Concern [LC]</option>
                          <option value="Near Threatened [NT]">Near Threatened [NT]</option>
                          <option value="Vulnerable [VU]">Vulnerable [VU]</option>
                          <option value="Endangered [EN]">Endangered [EN]</option>
                          <option value="Critically Endangered [CR]">Critically Endangered [CR]</option>
                          <option value="Extinct in the Wild [EW]">Extinct in the Wild [EW]</option>
                          <option value="Extinct [EX]">Extinct [EX]</option>
						</select>
						
				</div>
				</div>	
		<div class="col-sm-4">
				<div class="form-group">
				 <label>Local Name</label>
		
					<input class="form-control" name="lname" type="text" value="<?php echo $lname;?>">
							</div>	
				</div>
				<?php if (substr($edit_id1,0,6) == 'B6VeBi'){ ?>
				<div class="col-sm-2">
				<div class="form-group">
				 <label>Size (in cm)</label>
		
					<input class="form-control" value="<?php if ($size){
							  echo $size;} ?>" name="size" type="text">
							</div>	
				</div>
				
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Migratory Status</label>
						<select class="form-control round-form"  name="migratory" id="migratory" >
						<?php if ($migratorystatus){?>
							   <option value="<?php echo $migratorystatus; ?>"><?php echo $migratorystatus;?></option>
						  <?php } ?>
						
						  <option>Choose Status</option>
						  
						  <option value="Resident">Resident</option>
						  <option value="Summer Migrant">Summer Migrant</option>
						  <option value="Winter Migrant">Winter Migrant</option>
						  <option value="Passage Migrant">Passage Migrant</option>
                         
                         
						</select>
						
				</div>
				</div>
				<div class="col-sm-4">
				<div class="form-group">
				<h4>Habitat (can select multiple)</h4>
				<label class="check"><input type="checkbox" name="forest" value="1">Forest/Woodland
				  <span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="thicket" value="1">Thicket/Bush
				  <span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="grassland" value="1">Grassland/Savana
				  <span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="wetland" value="1">Wetland/River/Aquatic
				<span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="human" value="1">Human influenced
				<span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="plateau" value="1">Plateau
				<span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="hill" value="1">Hill
				<span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="mountain" value="1">Mountain
				<span class="checkmark"></span>
				</label>
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Type</label>
						<select class="form-control round-form" name="type" id="type" >
						<?php if ($type){?>
							   <option value="<?php echo $type; ?>"><?php echo $type;?></option>
						  <?php } ?>
						  <option>Choose Catagory</option>
						  
						  <option value="Waders">Waders</option>
						  <option value="Perching Birds">Perching Birds</option>
						  <option value="Birds of Prey">Birds of Prey</option>
						  <option value="Seabirds/ Shorebirds">Seabirds/ Shorebirds</option>
						  <option value="Waterbirds">Waterbirds</option>
						  <option value="Upland Ground Birds">Upland Ground Birds</option>
						  <option value="Tree-clinging Birds">Tree-clinging Birds</option>
						  <option value="Nocturnal Birds">Nocturnal Birds</option>
						
                         
                         
						</select>
						
				</div>
				</div>
				<div class="col-sm-4">
				<div class="form-group">
				<h4>Food (can select multiple)</h4>
				
				<label class="check"><input type="checkbox" name="frugivorous" value="1">Frugivorous
				  <span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="grainivorous" value="1">Grainivorous
				  <span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="carnivorous" value="1">Carnivorous
				  <span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="nectarivorous" value="1">Nectarivorous
				<span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="phytophagous" value="1">Phytophagous
				<span class="checkmark"></span>
				</label>
				<label class="check"><input type="checkbox" name="insectivorous" value="1">Insectivorous
				<span class="checkmark"></span>
				</label>
				</div>
				</div>
				<div class="col-sm-12">
		<div class="col-sm-6">	
		 <h4>Description :</h4>
		 	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Open Editor
</button>
		
		</div>
	

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
         <div class="ckcontainer">
			<textarea class="ckeditor" name="description"><?php if($description){echo $description;} ?></textarea>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        
      </div>
    </div>
  </div>
</div>
<div class="col-sm-6">	
		 <h4>Call :</h4>
		 	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Open Editor
</button>
		
		</div>
	

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
         <div class="ckcontainer">
			<textarea class="ckeditor" name="calls"><?php if($calls){echo $calls;} ?></textarea>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>
</div>	
	<div class="col-sm-12">		
<br>	
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="update">Update Species Description</button>
  </div>
</div>	



</form>


<?php 
}
?>

				
				
		</div>
		<p>Note: The scientific and species ID cannot be changed. To change it either delete it or contact the web developer</p>  
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
	<script src="ckeditor/ckeditor.js"></script>

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
	
		$update_id = $_GET['edit_form'];
		$update_id = mysqli_real_escape_string($db, $update_id);
		
		$image_id = substr($_GET['edit_form'],0,15);
		$image_id = mysqli_real_escape_string($db, $image_id);

		$cname = $_POST['cname'];
		$cname = mysqli_real_escape_string($db, $cname);
		
		$description = $_POST['description'];
		$description = mysqli_real_escape_string($db, $description);
		
		$size = $_POST['size'];
		$size = mysqli_real_escape_string($db, $size);
		
		$type = $_POST['type'];
		$type = mysqli_real_escape_string($db, $type);
		
		$calls = $_POST['calls'];
		$calls = mysqli_real_escape_string($db, $calls);
		
		$migratorystatus = $_POST['migratory'];
		$migratorystatus = mysqli_real_escape_string($db, $migratorystatus);
		
		$iucnstatus = $_POST['iucnstatus'];
		$iucnstatus = mysqli_real_escape_string($db, $iucnstatus);
		$lname = $_POST['lname'];
		$lname = mysqli_real_escape_string($db, $lname);
		$sname = $_POST['sname'];
		$sname = mysqli_real_escape_string($db, $sname);
		
		$update_query="update sub4name set migratorystatus='$migratorystatus',calls='$calls', type='$type', size='$size',description='$description', cname='$cname', iucnstatus = '$iucnstatus',updatedby = '$user_name',lname = '$lname' where uniqueid = '$update_id'";
		 $update_query2="update birds_food set sname='$sname',cname='$cname', uniqueid='$update_id' where uniqueid = '$update_id'"; 
		$update_query1="update sub4 set cname='$cname' where substring(id, 1,15)='$image_id'";
				
		if(mysqli_query($db,$update_query) && mysqli_query($db,$update_query1))
{
	mysqli_query($db,$update_query2);
	echo ("<script>alert('Species description is Successfully Updated')</script>");
	echo"<script>window.open('index.php?editspecies=editspecies','_self')</script>"; 
	
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('index.php?editspecies=editspecies','_self')</script>"; 
	}
			
	
}	
?>	
	