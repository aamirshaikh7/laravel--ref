<?php

namespace App;

class Test {
    protected $dependency;

    public function __construct(Dependency $dependency) {
        $this->dependency = $dependency;
    }
}