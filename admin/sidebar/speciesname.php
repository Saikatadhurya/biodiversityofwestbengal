<?php if(!isset($_SESSION)) {
    session_start();
}
$user_name = $_SESSION['username'];
include('../includes/connect.php');
$query = mysqli_query($db,"select * from admin_login where username = '$user_name'");

$row=mysqli_fetch_assoc($query);

$catagory = $row['catagory'];

$catagory1 = $row['catagory1'];

$catagory2 = $row['catagory2'];
?>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("sub1").innerHTML=response; 
 }
 });
}
function fetch_select1(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option1:val
 },
 success: function (response) {
  document.getElementById("sub2").innerHTML=response; 
 }
 });
}
function fetch_select2(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option2:val
 },
 success: function (response) {
  document.getElementById("sub25").innerHTML=response; 
 }
 });
}
function fetch_select25(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option25:val
 },
 success: function (response) {
  document.getElementById("sub3").innerHTML=response; 
 }
 });
}
<?php if($catagory == 'Moth' || $catagory1 == 'Moth' || $catagory2 == 'Moth') {?>
function fetch_select35(val)

{

 $.ajax({

 type: 'post',

 url: 'sidebar/fetch_data.php',

 data: {

  get_option35:val

 },

 success: function (response) {

  document.getElementById("sub35").innerHTML=response; 

 }

 });

}

<?php } ?>
</script>
<script type="text/javascript" src="jquery.js"></script>
<form action="sidebar/speciesname.php" method="POST" enctype="multipart/form-data">
<div class="col-lg-15">

				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Kingdom</label>
						<select class="form-control round-form" name="kingdom" onchange="fetch_select(this.value);"> 
						<option>Choose Kingdom</option>
						 <?php
							
							$query = mysqli_query($db,"select * from kingdom order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							
							$kingdom = $row1['kingdom'];
							
							 ?>
						  <option value="<?php echo $kingdom; ?>"><?php echo "$kingdom"; ?></option>
						  <?php 
							}
							?>
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection1</label>
						<select class="form-control round-form" name="sub1" id="sub1" onchange="fetch_select1(this.value);" required> 
						<option>Choose Subsection1</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection2</label>
						<select class="form-control round-form" name="sub2" id="sub2" onchange="fetch_select2(this.value);" required> 
						<option>Choose Subsection2</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection2.5</label>
						<select class="form-control selUser" name="sub25" id="sub25" onchange="fetch_select25(this.value);" required> 
						<option>Choose Subsection2.5</option>
						
						</select>
						
				</div>
				</div>
				<?php if($catagory == 'Moth' || $catagory1 == 'Moth' || $catagory2 == 'Moth') {?>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection3</label>
						<select class="form-control selUser" name="sub3" id="sub3" onchange="fetch_select35(this.value);"> 
						<option>Choose Subsection3</option>
						
						</select>
						
				</div>
				</div>
				<?php } else { ?>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection3</label>
						<select class="form-control selUser" name="sub3" id="sub3"> 
						<option>Choose Subsection3</option>
						
						</select>
						
				</div>
				</div>
				<?php } ?>
				
				<?php if($catagory == 'Moth' || $catagory1 == 'Moth' || $catagory2 == 'Moth') {?>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection3.5(Moth)</label>
						<select class="form-control selUser" name="sub35" id="sub35" required> 
						<option>Choose Subsection3.5</option>
						
						</select>
						
				</div>
				</div>
				<?php } ?>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Unique ID</label>
		
					<input class="form-control" name="id" type="text" placeholder="Enter ID" required>
							</div>	
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Scientific Name</label>
		
					<input class="form-control" name="sname" type="text" placeholder="Enter Name" required>
							</div>	
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Author & Year (e.g. Linnaeus, 1758)</label>
		
					<input class="form-control" name="author" type="text" placeholder="Enter Author(optional)">
							</div>	
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Common Name</label>
		
					<input class="form-control" name="cname" type="text" placeholder="Enter Name(If not give a Dash '-')" required>
							</div>	
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Local Name</label>
		
					<input class="form-control" name="lname" type="text" placeholder="Enter Name(optional)">
							</div>	
				</div>
				
					<div class="col-sm-3">
				<div class="form-group">
				 <label>IUCN Threatened Category</label>
						<select class="form-control round-form" name="iucnstatus" id="iucnstatus" >
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
				
				
				
			
			
</div>	
	<div class="col-lg-12">			
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add Species</button>
  </div>
</div>	

</form>

<?php
if(isset($_POST['submit']))
{
	if($_POST['kingdom']=='' OR $_POST['sub2']=='' OR $_POST['sub1']=='' OR $_POST['sub25']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
	}
	else
	{
		$kingdom = $_POST['kingdom'];
		$kingdom = mysqli_real_escape_string($db, $kingdom);
		$sub1 = $_POST['sub1'];
		$sub1 = mysqli_real_escape_string($db, $sub1);
		$sub2 = $_POST['sub2'];
		$sub2 = mysqli_real_escape_string($db, $sub2);
		$sub25 = $_POST['sub25'];
		$sub25 = mysqli_real_escape_string($db, $sub25);
		$sub3 = $_POST['sub3'];
		$sub3 = mysqli_real_escape_string($db, $sub3);
		if($catagory == 'Moth' || $catagory1 == 'Moth' || $catagory2 == 'Moth') {
			$sub35 = $_POST['sub35'];
		$sub35 = mysqli_real_escape_string($db, $sub35);
		}
		$sname = $_POST['sname'];
		$sname = mysqli_real_escape_string($db, $sname);
		$author = $_POST['author'];
		$author = mysqli_real_escape_string($db, $author);
		$lname = $_POST['lname'];
		$lname = mysqli_real_escape_string($db, $lname);
		$id = $_POST['id'];
		$id = mysqli_real_escape_string($db, $id);
		$cname = $_POST['cname'];
		$cname = mysqli_real_escape_string($db, $cname);
		$iucnstatus = $_POST['iucnstatus'];
		$iucnstatus = mysqli_real_escape_string($db, $iucnstatus);
		 $check_query = "SELECT * FROM sub4name WHERE sname='$sname' or uniqueid='$id'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  $flag=0;
			if ($check['sname'] == $sname) {
			  echo ("<script>alert('$sname Already Exist')</script>");
			  echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
			  exit();
	        }
			else if ($check['uniqueid'] == $id)
			{
				 echo ("<script>alert('$id Already Exist')</script>");
			  echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
			  exit();
			}
			switch(substr($id,0,6))
			{
			case 'B6VeBi':
			$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Birds','$user_name','$author')";
			$flag=1;
			break;
			case 'B6VeRe':
			$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Reptiles','$user_name','$author')";
			$flag=1;
			break;
			case 'B6VeAm':
			$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Amphibians','$user_name','$author')";
			$flag=1;
			break;
			case 'B6VeMa':
			$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Mammals','$user_name','$author')";
			$flag=1;
			break;
			}
			switch(substr($id,0,8))
			{
				case 'B6InInMo':
					$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,sub35,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Moth','$user_name','$sub35','$author')";
					$flag=1;
					break;
				
			}
			switch(substr($id,0,8))
			{
				case 'B6InInBu':
					$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Butterfly','$user_name','$author')";
					$flag=1;
					break;
				
			}
			switch(substr($id,0,8))
			{
				case 'B6InArSp':
					$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Spider','$user_name','$author')";
					$flag=1;
					break;
				
			}
				switch(substr($id,0,8))
			{
				case 'B6InArSc':
					$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Scorpion','$user_name','$author')";
					$flag=1;
					break;
				
			}
			switch(substr($id,0,2))
			{
				case 'B5':
					$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Plants','$user_name','$author')";
					$flag=1;
					break;
			}
				switch(substr($id,0,2))
			{
				case 'B7':
					$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname,iucnstatus,catagory,updatedby,author) VALUES('$id','$cname','$sname','$sub3','$lname','$iucnstatus','Fungi','$user_name','$author')";
					$flag=1;
					break;
			}
			if($flag==0)
			{
				echo ("<script>alert('Catagory not Available according to Unique ID. Contact to master admin !!!!')</script>");
				echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>"; 
				exit();
         	}	
		}
		
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('Species is Successfully Added')</script>");
	echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>"; 
	}
			
	
}	

?>	
