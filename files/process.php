<?php
if(isset($_GET['value'])){
$chars = $_GET['value'];
$len = strlen($chars);
echo "<h2>No. of letter count: ". $len ." </h2><br>";
if($len >200){
echo "<h3 style='color:red;'>That's a real long comment!!!</h3>";
}
}
?>