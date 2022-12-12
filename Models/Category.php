<?php

class Category
{
      public $name;
      //se è cane allora stampa icon cane else gatto
      public function __construct(string $name)
      {
            $this->name = $name;
      }
}
