<?php
include('./Connect.php');
 if(isset($_POST['submitarticle']))
  {
    
     $article_id=uniqid();
     $title =$_POST['title'];
     $description =$_POST['description'];
    $article =$_POST['article'];
    $Author =$_POST['author'];
    $a = 'aimage';
    $image = $_FILES[$a]["name"];
    $tempname = $_FILES[$a]["tmp_name"]; 
    $folder = "aimage/".$image;
    move_uploaded_file($_FILES[$a]["tmp_name"],$folder);    
    
    $result = mysqli_query($Connect, "SELECT * FROM article");

    $q3=mysqli_query($Connect,"INSERT INTO `article`(`article_id`,`title`, `description`,`article`,`Author` ,`image`) VALUES  ('$article_id','$title','$description','$article','$Author','$image' )");
    
    echo("<script>window.location = 'recent.php'</script>");
  }
 ?>         
s