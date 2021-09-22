<?php
session_start();
require_once  '../classes/Products.php';

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
      $prodRes = $prod->store($proname  , $price ,$prodesc , 'test.png');

      //if data stored in db
      if( $prodRes == true)
      {
        header("location:../index.php");
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