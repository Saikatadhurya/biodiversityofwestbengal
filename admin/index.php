<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('Location:login.php');
}	
$user_name = $_SESSION['username'];include('../includes/connect.php');$query = mysqli_query($db,"select * from admin_login where username = '$user_name'");$row=mysqli_fetch_assoc($query);$catagory = $row['catagory'];$catagory1 = $row['catagory1'];$catagory2 = $row['catagory2'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Admin, panel, WINGS">

    <title>WINGS-Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
	<link rel="icon" href="../assets/image/logoweb.jpg" type="image/gif" sizes="16x16">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
	
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	<!-- Script --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src='select2/dist/js/select2.min.js' type='text/javascript'></script><!-- CSS --><link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
  </head>

  <body>
<?php include("includes/header.php") ?>			
				
				
     <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> WINGS - Wildlife Information and Nature Guide Society - ADMIN PANEL</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
				<?php
				if(isset($_GET['home']))
				{
				include('sidebar/home.php');	
				}
				?>
				<?php
				if(isset($_GET['district']))
				{
				include('sidebar/district.php');	
				}
				?>
				<?php
				if(isset($_GET['kingdom']))
				{
				include('sidebar/kingdom.php');	
				}
				?>
				<?php
				if(isset($_GET['sub1']))
				{
				include('sidebar/sub1.php');	
				}
				?>
				<?php
				if(isset($_GET['sub2']))
				{
				include('sidebar/sub2.php');	
				}
				?>
				<?php
				if(isset($_GET['sub25']))
				{
				include('sidebar/sub25.php');	
				}
				?>
				<?php
				if(isset($_GET['sub3']))
				{
				include('sidebar/sub3.php');	
				}
				?><?php if($catagory == 'Moth' || $catagory1 == 'Moth' || $catagory2 == 'Moth') {
				if(isset($_GET['sub35']))
				{
				include('sidebar/sub35.php');	
				}
}	?>
								<?php
				if(isset($_GET['speciesname']))
				{
				include('sidebar/speciesname.php');	
				}
				?>
					<?php
				if(isset($_GET['newimage']))
				{
				include('sidebar/newimage.php');	
				}
				?>
					<?php
				if(isset($_GET['newvideo']))
				{
				include('sidebar/newvideo.php');	
				}
				?>
					<?php
				if(isset($_GET['editimage']))
				{
				include('sidebar/editimage.php');	
				}
				?>
				<?php
				if(isset($_GET['districtedit']))
				{
				include('sidebar/districtedit.php');	
				}
				?>
				<?php
				if(isset($_GET['kingdomedit']))
				{
				include('sidebar/kingdomedit.php');	
				}
				?>
				<?php
				if(isset($_GET['sub1edit']))
				{
				include('sidebar/sub1edit.php');	
				}
				?>
				<?php
				if(isset($_GET['sub2edit']))
				{
				include('sidebar/sub2edit.php');	
				}
				?>
				<?php
				if(isset($_GET['sub25edit']))
				{
				include('sidebar/sub25edit.php');	
				}
				?>
				<?php
				if(isset($_GET['sub3edit']))
				{
				include('sidebar/sub3edit.php');	
				}
				?>
				<?php
				if(isset($_GET['speciesnameedit']))
				{
				include('sidebar/speciesnameedit.php');	
				}
				?>
				
				<?php
				if(isset($_GET['editvideo']))
				{
				include('sidebar/editvideo.php');	
				}
				?>
				<?php
				if(isset($_GET['editaudio']))
				{
				include('sidebar/editaudio.php');	
				}
				?>
				
				
				<?php
				if(isset($_GET['newaudiolink']))
				{
				include('sidebar/newaudiolink.php');	
				}
				?>
			<?php
				if(isset($_GET['editspecies']))
				{
				include('sidebar/editspecies.php');	
				}
				?>
			<?php
				if(isset($_GET['notice']))
				{
				include('sidebar/notice.php');	
				}
				?>
				<?php
				if(isset($_GET['editnotice']))
				{
				include('sidebar/editnotice.php');	
				}
				?>
          		</div>
          	</div>
		
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include("includes/footer.php"); ?>
  </section>
<script>        $(document).ready(function(){                        // Initialize select2            $(".selUser").select2();               });        </script>
    <!-- js placed at the end of the document so the pages load faster -->
  
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
  
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
