<?php

class Category
{
      public $name;
      //se è cane allora stampa icon cane else gatto
      public function __construct(string $name)
      {
            if (strtoupper($name) == 'CANE') {
                  $this->name = '<i class="fa-solid fa-dog"></i>';
            } else if (strtoupper($name) == 'GATTO') {
                  $this->name = '<i class="fa-solid fa-cat"></i>';
            } else {
                  throw new Exception('La categoria non esiste!');
            }
      }
}
