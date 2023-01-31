<?php

class Product
{
  // アクセス修飾子 private, protected (自分と継承したクラス), public
  private $product = [];

  function __construct($product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    return $this->product;
  }

  public function addProduct($item)
  {
    $this->product .= $item;
  }

  public static function getStaticProduct($str)
  {
    return $str;
  }
}

$instance = new Product('初期化');

echo '<pre>';
var_dump($instance);
echo '</pre>';

echo $instance->getProduct();

$instance->addProduct('ほげ２');

echo '<pre>';
echo $instance->getProduct();
echo '</pre>';

echo '<pre>';
var_dump($instance);
echo '</pre>';

echo Product::getStaticProduct('スタティック');
