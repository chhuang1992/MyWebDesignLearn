<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
	  
	  <?php
	  var_dump($_FILES);
	  $file_name = $_FILES['image']['name'];
	  $image_file = "Dataset1/".$file_name;
	  echo "Image : <img src=$image_file />";
	  ?>
	  
   </body>
</html>