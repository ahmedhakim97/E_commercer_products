<?php
session_start();
require_once  '../classes/Products.php';
$id = $_GET['id'];
if(isset($_POST['submit']))
{
   $proname = $_POST['proname'];
   $prodesc = $_POST['prodesc'];
   $price = $_POST['price'];
  //$img = $_FILES['img'];

  //if data is valid';
  if(true)
  {
      $prod = new Products();
      $prodRes = $prod->update($proname  , $price ,$prodesc ,$id  );

      //if data stored in db
      if( $prodRes == true)
      {
        header("location:../show.php?id=".$id);
      }
      else{

      }
  }
  else 
  {

  }
}
else 
{
    header("location:../add.php");
}
echo "success";