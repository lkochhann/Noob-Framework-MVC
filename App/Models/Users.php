<?php

namespace App\Models;

use config\servidor;
use Core\Database;

class Users {
    private table = 'users';

    public function find($columns = '*', $conditions = null) {
      $db = Database::getInstance();
  
      $data = $db->getList($this->table, $columns, $conditions);
  
      return $data;
    }
  }
}