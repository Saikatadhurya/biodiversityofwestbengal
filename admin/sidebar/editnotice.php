<?php if(!isset($_SESSION)) {

    session_start();

}

$user_name = $_SESSION['username'];

?>

 <div class="row mt">

                  <div class="col-md-12">

                      <div class="content-panel">

					<div class="col-sm-4">

					  <input class="form-control" type="text" placeholder="Search for Image ID.." id="myInput" onkeyup="myFunction()" title="Type in a name">

					<br>

					  </div>

                          <table class="table table-striped table-advance table-hover" <table id="myTable">

	                  	  	  <br><h3><i class="fa fa-angle-right"></i>MANAGE NOTICE HERE</h3>

	                  	  	  <hr>

                              <thead>

                              <tr>


                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Subject</th>

								  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Date</th>

								  <?php if($user_name == 'masteradmin'){?><th class="hidden-phone"><i class="fa fa-question-circle"></i> Posted By</th><?php }?>


                                  <th><i class="fa fa-bookmark"></i> PDF</th>

                                  <th><i class=" fa fa-edit"></i>Delete</th>

                                

                              </tr>

                              </thead>

                              <tbody>

							  <?php

							   include('../includes/connect.php');

							   if($user_name != 'masteradmin')

							   {

									$query = mysqli_query($db,"select * from notice where postedby='$user_name' order by timestamp DESC");

							   }else {

								   $query = mysqli_query($db,"select * from notice order by timestamp DESC");

							   }

									while($row=mysqli_fetch_assoc($query))

									{
										$id=$row['id'];
									
										$date=$row['date'];

										

										$subject=$row['subject'];

										

										$pdf=$row['pdf'];
	

										$postedby=$row['postedby'];

																  

							  ?>

                               <tr>

                                  <td><?php echo $subject;?></td>

                                  <td><?php echo $date;?></td>

								  <?php if($user_name == 'masteradmin') {?><td><?php echo $postedby;?></td><?php } ?>

                                  <td><a href="../assets/pdf/<?php echo $pdf;?>" />VIEW</a></td>

                                  <td>

                                      

                                     
                                      <a href="deletenotice.php?del=<?php echo $id;?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>

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