
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>WINGS-ADMIN PANEL</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
          <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="https://wildwingsindia.in/admin/index.php?newimage=newimage">Add Image</a></li>
            	</ul>
            </div><div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="https://wildwingsindia.in/admin/index.php?speciesname=speciesname">Add Species</a></li>
            	</ul>
            </div>
            
        </header>
		
		 <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="index.php"><img src="../assets/image/logo.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Welcome <?php echo $user_name; ?></h5>
			
<?php if ($user_name != 'masteradmin') 
			{
				?>			
		  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Add New</span>
                      </a>
			<ul class="sub">
				<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>New Field</span>
                      </a>
                      <ul class="sub">
						  <li><a  href="index.php?district=district">District</a></li>
                          <li><a  href="index.php?kingdom=kingdom">Kingdom</a></li>
						  <li><a  href="index.php?sub1=sub1">Subsection 1</a></li>
						  <li><a  href="index.php?sub2=sub2">Subsection 2</a></li>
						  <li><a  href="index.php?sub25=sub25">Subsection 2.5</a></li>
						  <li><a  href="index.php?sub3=sub3">Subsection 3</a></li>
						  <?php if($catagory == 'Moth' || $catagory1 == 'Moth' || $catagory2 == 'Moth') {?>
						  <li><a  href="index.php?sub35=sub35">Subsection 3.5(Moth)</a></li>
						  <?php } ?>
						  <li><a  href="index.php?speciesname=speciesname">Species Name</a></li>
                          
                      </ul>                    
				</li>
			</ul>
			<ul class="sub">
			  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>New Post</span>
                      </a>
					  <ul class="sub">
						
						<li><a  href="index.php?newimage=newimage">Add New Image</a></li>
						<li><a  href="index.php?newvideo=newvideo">Add New Video</a></li>
						<li><a  href="index.php?newaudiolink=newaudiolink">Add Xeno-Canto Audio</a></li>
					</ul>	
							
                    <!--  <ul class="sub">
                   
						  <?php/*
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from kingdom order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							$kingdom = $row1['kingdom'];
							 */?>

								 <li><a class="dropdown-item" href="section.php?kingdom=<?/*php echo $kingdom;*/?>"><?php/* echo "$kingdom";*/?></a></li>		
								
							<?php	
							/*}*/
							?>     
                          
                      </ul>   -->                
					</li>		
				</ul>
			</li>
<?php
			}
?>			
			<?php if ($user_name == 'masteradmin') 
			{
				?>
			<li class="sub">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Edit Fields</span>
                      </a>
					 <ul class="sub">
							<li><a  href="index.php?districtedit=districtedit">District</a></li>
                          <li><a  href="index.php?kingdomedit=kingdomedit">Kingdom</a></li>
						  <li><a  href="index.php?sub1edit=sub1edit">Subsection 1</a></li>
						  <li><a  href="index.php?sub2edit=sub2edit">Subsection 2</a></li>
						  <li><a  href="index.php?sub25edit=sub25edit">Subsection 2.5</a></li>
						  <li><a  href="index.php?sub3edit=sub3edit">Subsection 3</a></li>
						  <li><a  href="index.php?speciesnameedit=speciesnameedit">Species Name</a></li>
					 </ul> 
			</li>
			<?php
			}
			?>
			<li class="sub">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Edit</span>
                      </a>
					 <ul class="sub">
							<li><a  href="index.php?editspecies=editspecies">Species Description</a></li>
							<li><a  href="index.php?editimage=editimage">Edit Images</a></li>
                            <li><a  href="index.php?editvideo=editvideo">Edit Video</a></li>
							<li><a  href="index.php?editaudio=editaudio">Edit Xeno-Canto Audio</a></li>
					 </ul> 
			</li>
			<li class="sub-menu">

                          <a href="Wings Admin Manual.pdf" download="Admin Mannual.pdf"><span>Admin Guide</span></a>
                    
			</li>
			<li class="sub-menu">

                          <a href="index.php?notice=notice"><i class="fa fa-book"></i></i><span>Post Notice</span></a>
                    
			</li>
			<li class="sub-menu">

                          <a href="index.php?editnotice=editnotice"><i class="fa fa-cogs"></i></i><span>Edit Notice</span></a>
                    
			</li>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
	