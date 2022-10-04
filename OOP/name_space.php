<?php

namespace NS1;
class Product{
    public $name = 'ABC';
}
function getProduct(){
$product = new Product();
echo $product->name;
}
const PRODUCT__NAME = 'ZYZ';

namespace NS2;
class Product{
    public $name = 'ABC NS2';
}
function getProduct(){
    echo "NS2";
}
const PRODUCT__NAME_2 = 'ZYZ 2';

$product1 = new Product1;
$product2 = new Product;
var_dump($product1, $product2);