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
    //create
    function create(($name , $price , $desc)
    {

    } 
    //update 
    function update($name , $price , $desc ,$id)
    {
        $stmt = $this->connect();
       $query = "UPDATE {$tproducts} SET proname=?, prodesc=?, price=? WHERE id=? ";
       $stmt= $stmt->prepare($query);
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