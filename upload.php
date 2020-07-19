


      
      <?php
	require_once 'connection.php'; ?>
	
<?php
		
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      	$path = "image/".$file_name;
			$title = $_POST['title'];
      
      $extensions= array("jpeg","jpg","png","pdf","doc");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG, PDF, O file.";
      }
      
      if($file_size > 512000){
         $errors[]='File size must be excatly 200 MB';
      }
      
      if(empty($errors)==true){
      		$conn->query("INSERT INTO `file` VALUES('', ' $file_name', '$path','$title')") or die(mysqli_error());
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success ";
      }else{
         print_r($errors);
      }
   }
?>


<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
          <input type="text" name="title"/>
         <input type="submit"/>
      </form>
      
   </body>
</html>