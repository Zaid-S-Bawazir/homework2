
<?php

include "style.css";


$store = array(
    array("item_number" => 1, "description" => "Juices", "amount" => 8, "price" => 7000),
    array("item_number" => 2, "description" => "Biscuit", "amount" => 10, "price" => 3000),
    array("item_number" => 3, "description" => "Pepsi", "amount" => 12, "price" => 6000),
    array("item_number" => 4, "description" => "Watre", "amount" => 15, "price" => 2000),
    array("item_number" => 5,"description" => "Gum" ,"amount" => 20 ,"price" => 1500),
    array("item_number" => 6,"description" => "Chocolate" ,"amount" => 170 ,"price" => 3000),
);



echo "<table>";
echo "<tr><th>Item Number </th> <th>Description</th><th>Amount</th><th>Price</th></tr>";
foreach ($store as $item) {
 echo "<tr><td>".$item['item_number']."</td>
    <td>".$item['description']."</td>
    <td>".$item['amount']."</td>
    <td>".$item['price']."</td></tr>";
}
echo "</table>";


?>

<style>

    table {
    
    
    border-radius: 10px;
    width:20%;
    
    border: 1px solid black;
  border-collapse: collapse;
  text-align: center; 
    border: 4px solid #ddd;
    margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 600px;
    }
    table tr td {
        width:40%;
        text-align: 30px;
        padding: 5px;
    border: 4px solid #ddd;
    }
    
</style>