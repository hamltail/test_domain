<?php

// 抽象クラス: 設定するメソッドの強制
abstract class ProductAbstract
{
  function echoProduct()
  {
    echo '親クラス';
  }

  abstract public function getProduct();
}

class Product extends ProductAbstract
{
  private $product = [];

  function __construct($product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    return $this->product;
  }
}

$instance = new Product('初期化');

$instance->echoProduct();
echo '<br>';
echo $instance->getProduct();
