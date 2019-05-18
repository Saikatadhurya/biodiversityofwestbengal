$('#search').keyup(function() 
{
	var searchterm = $('#search').val();
	if(searchterm!='')
	{
			
			
			  //AJAX is called.
 
           $.ajax({
 
               //AJAX type is "Post".
 
               type: "POST",
 
               //Data will be sent to "ajax.php".
 
               url: "search.php",
 
               //Data, that will be sent to "search.php".
 
               data: {
 
                   //Assigning value of "name" into "search" variable.
 
                   searchterm: searchterm
 
               },
			   beforeSend: function(){
				// Show image container
				$("#loader").show();
			   },
 
               //If result found, this function will be called.
 
               success: function(html) {
 
                   //Assigning result to "display" div in "search.php" file.
 
                   $("#searchresults").html(html).show();
 
               },
				complete:function(data){
					// Hide image container
					$("#loader").hide();
				   }
 
           });
			
	}
	else
	{
		$('#searchresults').html('');
	}
});