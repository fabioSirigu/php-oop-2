<?php


class Product
{
      public $name;
      public $type;
      public $price;
      public $image;
      public $category;

      public function __construct(String $name, String $type, Int $price, String $image, string $category)
      {
            $this->name = $name;
            $this->type = $type;
            $this->price = $price . '$';
            $this->image = $image;
            $this->set_category($category);
      }

      public function set_category($category)
      {
            if ($category == 'Cane') {
                  $this->category = $category;
            } else if ($category == 'Gatto') {
                  $this->category = $category;
            }
      }

      public function get_category()
      {
            return $this->category;
      }
}
