<?php

namespace App\Controllers;

// traitのuseと用途が違うので注意
use App\Models\TestModel;

class TestController
{
  public function run()
  {
    $model = new TestModel;
    echo $model->getHello();
  }
}
