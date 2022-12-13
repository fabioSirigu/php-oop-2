<?php
require_once __DIR__ . '/../Traits/Weightable.php';

class Product
{
      public $name;
      use Weitghtable;
      public $type;
      public $price;
      public $image;
      public $category;

      public function __construct(String $name, Type $type, Int $price, String $image, Category $category)
      {
            $this->name = $name;
            $this->type = $type;
            $this->price = $price . '$';
            $this->image = $image;
            $this->category = $category;
      }
}
