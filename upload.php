<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $e = array("jpg","png","jpeg");
  $f =  pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);
 if(in_array($f,$e)){
  if($_FILES["img"]["size"] < 40000){
  $s = getimagesize($_FILES["img"]["tmp_name"]);
    if($s != false){
        if(move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"])){
        header("location:index.php?e=file has been upload");
    }else{
    header("location:index.php?e=unable to upload");
}
}else{
    header("location:index.php?e=file is not image");
}
}else{
    header("location:index.php?e=file size is too big");
}
}else{
    header("location:index.php?e=Invalid extension");
} 
}else{
    header("location:index.php");
}



