<?php

namespace App\Entity;

class Circle extends Shape {

    private $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getType(): string {
        return 'circle';
    }

    public function getParams(): array {
        return ['radius' => $this->radius];
    }

    public function getSurface(): float {
        return M_PI * pow($this->radius, 2);
    }

    public function getCircumference(): float {
        return 2 * M_PI * $this->radius;
    }
}
