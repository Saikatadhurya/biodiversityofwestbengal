  <header>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="https://biodiversityofwestbengal.wildwingsindia.in/"><img src="assets/image/logo.png" id="logo" alt="wingsindialogo" title="wildwingsindia"></a>
   <div class="searchbar">
    <form action="searchresult.php" method="post">
		<input type="search" name="searchterm" id="search" placeholder="Common/Scientific Name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" title="Search by Species, Family or Order" autocomplete="off"><br>
		<input type="submit" name="submit" value="Search" hidden />
		<!-- Image loader -->
		<div id='loader' style='display: none; position:absolute; margin-left:40px;'>
		  <img src='reload.gif' width='52px' height='52px'>
		</div>
		<div id="searchresults"></div>
		</form>
		</div>
	<script type="text/javascript" src="assets/js/search.js"></script>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
	  	<button class="btn btn-dark btn-md nav-item  btn-navbar">
             <a class="nav-link active" href="/wings/biodiversityofwestbengal">Home</span></a>
        </button>
	  
      	<button class="btn btn-dark btn-md nav-item  btn-navbar">
             <a class="nav-link" href="teambwb.php">Our Team</a>
        </button>
		 <button class="btn btn-dark btn-md nav-item dropdown btn-navbar">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Partners
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="contributor.php">Contributors</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fbgroups.php">Facebook Groups</a>
		  <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="fbpages.php">Facebook Pages</a>
        </div>
		<button class="btn btn-dark btn-md nav-item  btn-navbar">
             <a class="nav-link" href="about.php">About</a>
        </button>
        <button class="btn btn-dark btn-md nav-item  btn-navbar">
             <a class="nav-link" href="report.php">Report a Problem</a>
        </button>
        
        <button class="btn btn-dark btn-md nav-item  btn-navbar">
             <a class="nav-link" href="http://wildwingsindia.in">WINGS India</a>
        </button>
	 </ul>
	 </div>
			 
	  
  
   </nav>
	
	</header>