<?php

namespace App\Entity;

class Triangle extends Shape {

    private $a;
    private $b;
    private $c;

    public function __construct(float $a, float $b, float $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getType(): string {
        return 'triangle';
    }

    public function getParams(): array {
        return ['a' => $this->a, 'b' => $this->b, 'c' => $this->c];
    }

    public function getSurface(): float {
        $p = $this->getCircumference() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function getCircumference(): float {
        return $this->a + $this->b + $this->c;
    }

}
