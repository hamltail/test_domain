<?php

// 役割が決まっているためabstractよりも使いやすい
interface ProductInterface
{
  public function getProduct();
}

interface NewsInterface
{
  public function getNews();
}

// classの継承は1つだが、interfaceは複数継承できる
class Product implements ProductInterface, NewsInterface
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

  public function getNews()
  {
    return 'ニュースです';
  }
}

$instance = new Product('初期化');

echo $instance->getProduct();
echo '<br>';
echo $instance->getNews();
