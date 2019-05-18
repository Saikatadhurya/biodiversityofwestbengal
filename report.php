<?php $errors =array(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Report a Problem</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	@import url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700");
@import url("http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600|Roboto Mono");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
@font-face {
  font-family: 'Dosis';
  font-style: normal;
  font-weight: 300;
  src: local('Dosis Light'), local('Dosis-Light'), url(http://fonts.gstatic.com/l/font?kit=RoNoOKoxvxVq4Mi9I4xIReCW9eLPAnScftSvRB4WBxg&skey=a88ea9d907460694) format('woff2');
}
@font-face {
  font-family: 'Dosis';
  font-style: normal;
  font-weight: 500;
  src: local('Dosis Medium'), local('Dosis-Medium'), url(http://fonts.gstatic.com/l/font?kit=Z1ETVwepOmEGkbaFPefd_-CW9eLPAnScftSvRB4WBxg&skey=21884fc543bb1165) format('woff2');
}
body {
  
    font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif,  Open Sans;
    font-size: 14px;
    line-height: 1.42857;
    height: 350px;
    padding: 0;
    margin: 0;
}
</style>
  </head>
  <body>
    <div class="container">
	<a class="btn btn-lg btn-primary" href="index.php">Back to Home</a>
<div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-8">
        <h1>Report a Problem</h1>
        <p class="lead">Any Problem Regarding Any Content in Database?</p>
        
        <p>Fill the form and we will get back to you as soon as possible.</p> <br> 
         
        <!-- BEGIN DOWNLOAD PANEL -->
        <div class="panel panel-default well">
          <div class="panel-body">
            <form action="report.php" class="form-horizontal track-event-form bv-form" data-goaltype="”General”" data-formname="”ContactUs”" method="post" id="contact-us-all" novalidate="novalidate">
             <?php include('errors.php'); ?>

              <div class="form-group">               
                <div class="col-sm-12">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                            </div>
                    <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter Your name" name="name" required>
                        </div>
         
					</div>                
               
                        </div>

              <div class="form-group">               
                          <div class="col-sm-12">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
                        </div>
                  
					</div>                
					  </div>
					    <div class="form-group"> 
						
                <div class="col-sm-6">
                  <div class="input-group">
                              <div class="input-group-addon">
                      <i class="fa fa-phone"></i>                      
                    </div>
                    <input type="number" class="form-control" id="C_BusPhone" placeholder="Phone" name="phone" required>
                  </div>                                    
                </div>
                          <div class="col-sm-6">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <input type="text" class="form-control" id="exampleInputCompany" placeholder="Enter Image ID (If any)" name="image_id">
                  </div>
                        </div>
						 </div>
						     <div class="form-group"> 
              <div class="col-sm-12">
                  <div class="input-group">
                              <div class="input-group-addon">                    
                    </div>
                    <input type="text" class="form-control" id="C_BusPhone" placeholder="Enter Species name (If any)" name="spname">
                  </div>                                    
                </div>
                 </div>    
                
                      <div class="form-group">
                        <div class="col-sm-12">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-comment fa-2"></i>                
                    </div>                  
                    <textarea class="form-control" name="comment" id="Comments" rows="5" style="width:99.9%" placeholder="Enter your message here" required></textarea>
                  </div>                                    
                </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-12">
                  <button id="contacts-submit" type="submit" name="report" class="btn btn-default btn-info">Post</button>
                        </div>
                      </div>
					   	
            <input type="hidden" value="">
			</form>
			<?php
 include("includes/connect.php");
if (isset($_POST['report'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $image_id = mysqli_real_escape_string($db, $_POST['image_id']);
  $spname = mysqli_real_escape_string($db, $_POST['spname']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);
   if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone no. is required"); }
  if (empty($comment)) { array_push($errors, "Comment is required"); }
   if (count($errors) == 0)
   {
  $query = "INSERT INTO report (name, email, phone, image_id,spname,comment) 
  			  VALUES('$name', '$email', '$phone', '$image_id','$spname','$comment')";
  	if(mysqli_query($db, $query))
	echo "<div class='alert alert-success'>Successfully Reported</div>";
else
	echo "<div class='alert alert-danger'>Failed</div>";
   }else
	   echo "<div class='alert alert-danger'>Failed</div>";
}

?>
          </div><!-- end panel-body -->
        </div><!-- end panel -->
        <!-- END DOWNLOAD PANEL -->
      </div><!-- end col-md-8 -->
      <div class="col-md-2"> </div>
        </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
