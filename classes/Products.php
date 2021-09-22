<?php
require_once 'MyPdo.php';

class Products  extends MyPdo
{
    //getAlldATA

    function getAll()
    {
        $products = [];
        $stmt = $this->connect();
        $query = "select * from products";
        $stmt= $stmt->prepare($query);
        $stmt->execute();
     

        while( $row = $stmt->fetch())
        {
            array_push($products , $row);
        }

        return  $products ;


    }
    //Show details

    function show($id)
    {
        $stmt = $this->connect();
        $query = "select * from products where id=:id";
        $stmt= $stmt->prepare($query);
        $stmt->execute([":id" => $id]);
        $result = $stmt->fetch();
        return $result;
    }
        //create new ;
        public function store($proname , $price , $prodesc , $img)
        {
        $query = "insert into products(proname , price , prodesc , img) values (?,?,?,?)";
        $result =  $this->connect();  
        $result =  $result->prepare($query);
        $result->execute([$proname , $price , $prodesc , $img]);
        return true;

        }
    //update 
    function update($name , $price , $desc ,$id)
    {
        $stmt = $this->connect();
       $query = "UPDATE {$tproducts} SET proname=?, prodesc=?, price=? WHERE id=? ";
       $stmt= $stmt->prepare($query);
       $stmt->execute([$proname ,  $prodesc , $price , $id]);
       return true;
    }
    //delete

    function delete($id)
    {
        $stmt = $this->connect();
        $query = "delete from  products where id=:id";
        $stmt= $stmt->prepare($query);
        $stmt->execute([":id" => $id]);
        return true;
    }
}