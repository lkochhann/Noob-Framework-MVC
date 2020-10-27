<?php

namespace App\Models;

use Core\Database;

class Pessoa {

    public function getAll() {
        $db = Database::getInstance();
        return $db -> getList("cliente", "*");
    }

    public function listar()
    {
        $db = Database::getInstance();
        return $db -> getList("cliente", "nome, email, telefone");
    }
}