<?php if(!isset($_SESSION)) {
    session_start();
}
$user_name = $_SESSION['username'];
?>
 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel" style="overflow-x: scroll;">					  <div class="col-sm-4">
					  <input class="form-control" type="text" placeholder="Search for Audio ID.." id="myInput" onkeyup="myFunction()" title="Type in a name">
					<br>
					  </div>
                          <table class="table table-striped table-advance table-hover" <table id="myTable">
	                  	  	 <h3><i class="fa fa-angle-right"></i>EDIT Audio HERE</h3>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Audio ID</th>
                                  <th><i class="fa fa-question-circle"></i> Common Name</th>
								  <th><i class="fa fa-question-circle"></i> Scientific Name</th>
								  <?php if($user_name == 'masteradmin'){?><th><i class="fa fa-question-circle"></i> Posted By</th><?php }?>
								  <th><i class="fa fa-question-circle"></i> Recorder Name</th>
                                  <th><i class="fa fa-bookmark"></i> Audio</th>
                                  <th><i class=" fa fa-edit"></i> Edit/Delete</th>
                                
                              </tr>
                              </thead>
                              <tbody>
							<?php
							   include('../includes/connect.php');
							   if($user_name != 'masteradmin')
							   {
									$query = mysqli_query($db,"select * from sub4audioxeno where postedby='$user_name' order by timestamp DESC");
							   }else {
								  $query = mysqli_query($db,"select * from sub4audioxeno order by timestamp DESC");
							   }
									while($row=mysqli_fetch_assoc($query))
									{
										$id=$row['id'];
										$id = mysqli_real_escape_string($db, $id);
										$cname=$row['cname'];
										$cname = mysqli_real_escape_string($db, $cname);
										$sname=$row['sname'];
										$sname = mysqli_real_escape_string($db, $sname);
										$pname=$row['pname'];
										$pname = mysqli_real_escape_string($db, $pname);
										$audio=$row['audio'];
										$audio = mysqli_real_escape_string($db, $audio);
										$postedby=$row['postedby'];		  
							  ?>
                               <tr>
                                  <td><?php echo $id;?></td>
                                  <td class="hidden-phone"><?php echo $cname;?></td>
                                  <td><?php echo $sname;?></td>
								  <?php if($user_name == 'masteradmin') {?><td><?php echo $postedby;?></td><?php } ?>
								  <td><?php echo $pname;?></td>
                                  <td><center><iframe src='https://www.xeno-canto.org/<?php echo $audio; ?>/embed' scrolling='no' frameborder='0' width='240' height='180'></iframe>
			</center></td>
                                  <td>
                                      
                                      <a href="editaudio.php?edit=<?php echo $id;?>" target="blank"> <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      									 <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal<?php echo $id;?>"><i class="fa fa-trash-o "></i></button>
									<!-- Button trigger modal -->


</td>
                              </tr><div class="modal fade" id="exampleModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  <div class="modal-dialog" role="document">    <div class="modal-content">      <div class="modal-header">        <h4 class="modal-title" id="exampleModalLabel">Do You Really Want to Delete?</h4>        <button type="button" class="close" data-dismiss="modal" aria-label="Close">          <span aria-hidden="true">&times;</span>        </button>      </div>      <div class="modal-body">        Click on Yes to Delete.      </div>      <div class="modal-footer">        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>        <a href="deleteaudio.php?del=<?php echo $id;?>"> <button type="button" class="btn btn-success">Yes</button></a>      </div>    </div>  </div></div>
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