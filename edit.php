<?php include "inc/header.php"; ?>
<?php include "classes/Products.php"; ?>
<?php
$id = $_GET['id'];
$product = new Products();
$product = $product->show($id);
?>

<div class="container">
    <form action="handlers/handledit.php?id=<?php echo $product['id'] ?>" method="POST">
    <div class="mb-3 form-group">
      <label  class="form-label">Product Name</label>
      <input type="text" class="form-control" name="proname" value="<?php  echo $product['proname']  ?>">
    </div>

    <div class="mb-3 form-group">
      <label  class="form-label">Product Description</label>
      <textarea type="text" class="form-control" name="prodesc">
      <?php  echo $product['prodesc']  ?>
      </textarea>
    </div>

    <div class="mb-3 form-group">
      <label  class="form-label">Product Price</label>
      <input type="text" class="form-control" name="price" value="<?php  echo $product['price']  ?>">
    </div>
    <div class="form-group mb-3 ">
        <img src="images/<?php  echo $product['img'];  ?>" class="img-fluid">
    </div>

    <input type="submit" value="update Product" class="btn btn-info" name="submit">
    </form>
</div>
<?php  include "inc/footer.php"; ?>