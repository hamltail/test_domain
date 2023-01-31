<?php

class BaseProduct
{
  function echoProduct()
  {
    echo '親クラス';
  }

  public function getProduct()
  {
    return '親クラスのgetProduct()';
  }
}

class Product extends BaseProduct
{
  private $product = [];

  function __construct($product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    // parent::getProduct();
    return $this->product;
  }
}

$instance = new Product('初期化');

$instance->echoProduct();
echo '<br>';
echo $instance->getProduct();
