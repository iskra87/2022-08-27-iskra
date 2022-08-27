<?php
namespace App\Entity;

abstract class Shape {
    public function getRound(float $x): float
    {
      if ((int) $x == $x){
          return $x;
      }
      return (float) round($x, 3 - floor(log10($x)));
    }
    
    public function getProperties(): array {
        return array_merge(
                [
                    'type' => $this->getType(),
                ],
                $this->getParams(),
                [
                    'surface' => $this->getRound($this->getSurface()),
                    'circumference' => $this->getRound($this->getCircumference())
                ]
        );
    }

    abstract public function getType(): string;

    abstract public function getParams(): array;

    abstract public function getSurface(): float;

    abstract public function getCircumference(): float;
}
