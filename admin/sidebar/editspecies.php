<?php if(!isset($_SESSION)) {
    session_start();
}
include('../includes/connect.php');
$user_name = $_SESSION['username'];
$query = mysqli_query($db,"select * from admin_login where username = '$user_name'");
$row=mysqli_fetch_assoc($query);
$catagory = $row['catagory'];
$catagory1 = $row['catagory1'];
$catagory2 = $row['catagory2'];
?>
 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
					<div class="col-sm-4">
					  <input class="form-control" type="text" placeholder="Search for Species ID.." id="myInput" onkeyup="myFunction()" title="Type in a name">
					<br>
					  </div>
                          <table class="table table-striped table-advance table-hover" <table id="myTable">
	                  	  	  <br><h3><i class="fa fa-angle-right"></i>EDIT SPECIES HERE</h3>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Species ID</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Common Name</th>
								  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Scientific Name</th>
								  <?php if($user_name == 'masteradmin'){?><th class="hidden-phone"><i class="fa fa-question-circle"></i> Updated By</th><?php }?>
   
                                  <th><i class=" fa fa-edit"></i> Edit/Delete</th>
                                
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							   
							   if($user_name != 'masteradmin')
							   {
									$query = mysqli_query($db,"select * from sub4name where catagory = '$catagory' OR catagory = '$catagory1' OR catagory = '$catagory2' order by id desc");
							   }else {
								   $query = mysqli_query($db,"select * from sub4name order by id desc");
							   }
									while($row=mysqli_fetch_assoc($query))
									{
										$id=$row['uniqueid'];
										
										$cname=$row['cname'];
										
										$sname=$row['sname'];
										
										$updatedby=$row['updatedby'];
																  
							  ?>
                               <tr>
                                  <td><?php echo $id;?></td>
                                  <td><?php echo $cname;?></td>
                                  <td><?php echo $sname;?></td>
								  <?php if($user_name == 'masteradmin') {?><td><?php echo $updatedby;?></td><?php } ?>

                                  <td>
                                      
                                      <a href="editdescription.php?edit=<?php echo $id;?>"> <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <?php if($user_name == 'masteradmin') {?>  <a href="deletedescription.php?del=<?php echo $id;?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a><?php } ?>
									<!-- Button trigger modal -->

<!-- Modal -->
<!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Do You Really Want to Delete?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Click on Yes to Delete.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <a href="delete.php?del=<?php echo $id;?>"> <button type="button" class="btn btn-success">Yes</button></a>
      </div>
    </div>
  </div>
</div>-->
								 </td>
                              </tr>
							  <?php
									}
								?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
			  
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>