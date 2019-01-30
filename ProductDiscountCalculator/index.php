<!DOCTYPE HTML>
<html xmlns:color="http://www.w3.org/1999/xhtml">
<style type="text/css">
    .Calculator {
        height:250px; width:350px;
        margin: auto;
        padding:10px;
        border:3px #00008b solid;
    }
    .Calculator input {
        padding:5px; margin:5px
    }
</style>
<body>
<form  method = "post">
    <div class="Calculator">
        <h2 color: navy;>Product Discount Calculator</h2>
        <input type="Product Description" name="product" size="25"  placeholder="Product Description" />
        <input type="List Price" name="price" size="25" placeholder="List Price" />
        <input type="Discount Percent" name="discount" size="25" placeholder="Discount Percent" />
        <input type="submit" value="Calculate Discount" />
    </div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = $_POST["product"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    if($product == "$product" && $price == "$price" && $discount = "$discount"){
        echo "<h2> Product Description:  ".$product."<h2/>";
        echo "<h2> Price:  ".$price."<h2/>";
        echo "<h2> Discount Percent: ".$discount."<h2/>";
        echo "<h2> Discount Amount:  " .$discountA=$price*$discount*0.01."<h2/>";
        echo "<h2> Discount Price:  " . ($price - $discountA) . "<h2/>";
    }
}
?>
</body>
</html>