<?php 

//$a = array(1,2,3,4,5);

//print_r($a);

//for($i = 0;$i <5; $i++){
// echo $a[$i]."<br>";
//}

//$b = array(array(1,2,3),array(4),array(6,7));

//for($i = 0;$i < 3; $i++){
//for($j = 0; $j < sizeof($b[$i]); $j++){
// echo $b[$i][$j]." ";
// }
// echo "<br>";
//}

//echo date("d-m-y");
//date_default_timezone_set('Asia/Karachi');
//echo date("d-m-y h:i:s");

echo @$_GET["e"];
?>

<form method="post" action="upload.php" enctype="multipart/form-data">
<input type="file" name="img">
<input type="submit" value="upload">
</form>


