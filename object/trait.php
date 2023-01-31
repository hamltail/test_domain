<?php

trait ProductTrait
{
  public function getProduct()
  {
    return __FUNCTION__;
  }
}

trait NewsTrait
{
  public function getNews()
  {
    return __FUNCTION__;
  }
}

class Product
{
  use ProductTrait;
  use NewsTrait;

  function __construct()
  {
  }

  public function getInformation()
  {
    return 'class: ' . get_class($this) . ', function: ' . __FUNCTION__;
  }

  public function getNews()
  {
    return 'class: ' . get_class($this) . ', function: ' . __FUNCTION__;
  }
}

$product = new Product();

echo $product->getInformation();
echo '<br>';
echo $product->getProduct();
echo '<br>';
echo $product->getNews();
