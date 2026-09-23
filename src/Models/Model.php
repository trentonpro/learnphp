<?php

namespace App\Models;

abstract class Model {
    public $id;
    protected static string $table;

    public function all() {
        $db = new DB();
        return $db->all(static::$table static::class);
    }
}



