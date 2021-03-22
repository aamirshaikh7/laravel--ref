<?php

namespace App;

class Test {
    protected $pass;

    public function __construct($pass) {
        $this->pass = $pass;
    }

    public function test() {
        dd('tested');
    }
}