<?php if(!isset($_SESSION)) {
    session_start();
}
$user_name = $_SESSION['username'];
?>
 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel"><div class="col-sm-4">
					  <input class="form-control" type="text" placeholder="Search for Video ID.." id="myInput" onkeyup="myFunction()" title="Type in a name">
					<br>
					  </div>
                          <table class="table table-striped table-advance table-hover" <table id="myTable">
	                  	  	 <h3><i class="fa fa-angle-right"></i>EDIT Video HERE</h3>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Video ID</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Common Name</th>
								  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Scientific Name</th>
								   <?php if($user_name == 'masteradmin'){?><th class="hidden-phone"><i class="fa fa-question-circle"></i> Posted By</th><?php }?>
								  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Videographer's Name</th>
                                  <th><i class="fa fa-bookmark"></i> Video</th>
                                  <th><i class=" fa fa-edit"></i> Edit/Delete</th>
                                
                              </tr>
                              </thead>
                              <tbody>
							    <?php
							   include('../includes/connect.php');
							   $user_name = mysqli_real_escape_string($db, $user_name);
									  if($user_name != 'masteradmin')
							   {
									$query = mysqli_query($db,"select * from sub4video where postedby='$user_name' order by timestamp DESC");
							   }else {
								   $query = mysqli_query($db,"select * from sub4video order by timestamp DESC");
							   }
									while($row=mysqli_fetch_assoc($query))
									{
										
										$id=$row['id'];
										
										$cname=$row['cname'];
										
										$sname=$row['sname'];
										
										$pname=$row['pname'];
										
										$video=$row['video'];
										
										$postedby=$row['postedby'];
																  
							  ?>
                               <tr>
                                  <td><?php echo $id;?></td>
                                  <td class="hidden-phone"><?php echo $cname;?></td>
                                  <td><?php echo $sname;?></td>
								  <?php if($user_name == 'masteradmin') {?><td><?php echo $postedby;?></td><?php } ?>
								  <td><?php echo $pname;?></td>
                                  <td><center><iframe width="200" height="100 " src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</center></td>
                                  <td>
                                      
                                      <a href="editvideo.php?edit=<?php echo $id;?>"> <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      <a href="deletevideo.php?del=<?php echo $id;?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
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
        <a href="deletevideo.php?del=<?php echo $id;?>"> <button type="button" class="btn btn-success">Yes</button></a>
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