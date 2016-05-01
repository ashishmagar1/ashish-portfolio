<div align="right">
<?php
$con = mysqli_connect("localhost","root","","comment");
if (mysqli_connect_error())
{
	echo"failed to connect MYSQL:".mysqli_connect_error();
}

function getCom(){

	if(!isset($_GET['cat'])){

	global $con;

	$get_com = "select * from comment";
	$run_com = mysqli_query($con, $get_com);
	while($row_com=mysqli_fetch_array($run_com)){

		$com_id=$row_com['comment_id'];
		
		$com_date=$row_com['comment_date'];
		$com_name=$row_com['comment_name'];
		$com_image=$row_com['comment_image'];
		$com_desc=$row_com['comment_desc'];
		
echo "
<table>
<td>
<div id='single_comment'>

<img src= 'files/comment_images/$com_image' width='200' height='130' />
<p><b>Name:</b> $com_name ,   <b>Date:</b> $com_date</p>
<p><b> Comment:</b><br> $com_desc </p>
<?div>
</td>
</table>
";
	}
}
}

?>
</div>
