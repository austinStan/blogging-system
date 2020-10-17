<?php include('db.php');?>

<?php

function add_category(){
    
global $connection;


if(isset($_POST['cat_add'])){ //checks if the form was submitted
    if(empty($_POST['cat_title'])){ //check if the $_POST superglobal array is empty.
       header("Location:../category.php?Field_cannot_be_empty");//page redirect
    }else{
      $cat_title=$_POST['cat_title'];
      $query="INSERT INTO categories(cat_title)VALUES('$cat_title')"; //make the database query
      $result=mysqli_query($connection,$query);
      if(!$result){
          die('couldnot insert the data'.mysqli_error());
      }

    }
}


}

add_category();


?>