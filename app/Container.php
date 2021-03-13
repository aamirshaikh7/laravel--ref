<?php

namespace App;

class Container {
    protected $assoc = [];

    public function add ($key, $value) {
        $this->assoc[$key] = $value;
    }

    public function get ($key) {
        if (is_callable($this->assoc[$key] ?? null)) {
            return $this->assoc[$key]();
        } else {
            throw new \Exception('Incorrect key passed');
        }
    }
}