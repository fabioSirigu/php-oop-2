<?php

class Category
{
      public $name;
      //se è cane allora stampa icon cane else gatto
      public function __construct(string $name)
      {
            if ($name == 'Cane') {
                  $this->name = '<i class="fa-solid fa-dog"></i>';
            } else if ($name == 'Gatto') {
                  $this->name = '<i class="fa-solid fa-cat"></i>';
            } else {
                  die('Non esiste!');
            }
      }
}
