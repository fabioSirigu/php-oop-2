<?php
class Type
{
      public $type;
      //se è cane allora stampa icon cane else gatto
      public function __construct(string $type)
      {
            $this->type = $type;
      }
}
