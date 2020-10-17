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
      }else{
        header("Location:../category.php?category_added");//page redirect
      }

    }
}


}

add_category();

function show_category(){

  global $connection;

  $query="SELECT * FROM categories";
  $result=mysqli_query($connection,$query);

  while($row =mysqli_fetch_assoc($result)){
       $cat_id=$row['cat_id'];
       $cat_title=$row['cat_title'];

       echo "<tr>";
       echo "<td>{$cat_id}</td>";
       echo "<td>{$cat_title}</td>";
       echo "<td><a href='category.php?delete_id={$cat_id}'>Delete</a></td>";
       echo "</tr>";
  }
}

 function delete_category(){
   global $connection;

   if(isset($_GET['delete_id'])){
     $cat_id=$_GET['delete_id'];

     $query="DELETE FROM categories WHERE cat_id = $cat_id";
     $result=mysqli_query($connection,$query);
     if(!$result){
       die('couldnot delete'.mysqli_error());
     }
     else{
      header("Location:category.php?category_deleted");//page redirect
     }
   }

 }
 delete_category();



?>