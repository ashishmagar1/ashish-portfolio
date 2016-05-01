	<!DOCTYPE>
	</body>
	</html>

	<?php
$con = mysqli_connect("localhost","root","","comment");
if (mysqli_connect_error())
{
	echo"failed to connect MYSQL:".mysqli_connect_error();
}
?>
	<html>
	<head>
		<title>comments</title>
	 <script>
function ajax(chars){
var req = new XMLHttpRequest();
req.onreadystatechange = function(){
if(req.readyState == 4 && req.status == 200){
document.getElementById('show').innerHTML = req.responseText;
}
}
req.open('GET','files/process.php?value='+chars,true);
req.send();
}
</script
	</head>
	<body>


	<section id="comment" class="bg-light-gray">
	<form action="files/insert_comment.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 text-center swing animated">
                    <h2 class="section-heading">Comment Here</h2>
                    <h3 class="section-subheading text-muted">Please feel free to leave your comment along with your Photo :)</h3>
               <?php
echo "Today is " . date("Y/m/d/ l") . "<br>";
?>
                </div>
                </div>
                <div class="container">          
  <table class="table table-bordered">
    <thead>
    
      <tr>
        <th>Your photo</th>
        <th><input type = "file" name="comment_image"/></th>
        
      </tr>
      <tr>
        <th>Name</th>
        <th><input type = "text" name="comment_name"required placeholder="Write Your Name Please *"/></th>
        
      </tr>
      <tr>
        <th>Date</th>
        <th><input type = "text" name="comment_date"required placeholder="Write Today Date Please *"/></th>
        
      </tr>

      <tr>
        <th>Comment</th>
        <th><textarea name="comment_desc" cols="22" rows="5" onkeyup="ajax(this.value);" placeholder="Write Your Comment Please *"></textarea></th>
        <div id="show" style=" margin-right:40px;"></div>.
        
      </tr>

      <tr>
        <th></th>
        <th><input type = "submit" name="insert_post" value="Post Comment Now"/></th>
        
      </tr>

    </thead>
    
  </table>


</div>

</div>
        </div>
    </section>
			
			
				
			</form>
			</body>
			</html>

			<?php
				if (isset($_POST['insert_post'])){
			//getin test data
					
					
					$comment_date=$_POST['comment_date'];
					$comment_name=$_POST['comment_name'];
					$comment_desc=$_POST['comment_desc'];
					
					//getting image 
					$comment_image=$_FILES['comment_image']['name'];
					$comment_image_tmp=$_FILES['comment_image']['tmp_name'];

					move_uploaded_file($comment_image_tmp, "comment_images/$comment_image");

					$insert_comment=" insert into comment (comment_date,comment_name,comment_desc,comment_image) 
					values ('$comment_date','$comment_name','$comment_desc','$comment_image')";
				
					$insert_com = mysqli_query($con, $insert_comment);

					if($insert_com){
						echo "<script>alert('comment has been posted!') </script>";
						echo "<script>window.open('afterc.php','_self')</script>";
					}

				}

			?>


			