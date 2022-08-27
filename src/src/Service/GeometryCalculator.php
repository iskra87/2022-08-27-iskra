<?php

namespace App\Service;

use App\Entity\Shape;

class GeometryCalculator {

    public function sumSurfaces(...$shapes): float {
        $surface = 0;
        foreach ($shapes as $shape) {
            if (!$shape instanceof Shape) {
                continue; // or exception, it depends 
            }
            $surface += $shape->getSurface();
        }
        return $surface;
    }

    public function sumCircumferences(...$shapes): float {
        $circumference = 0;
        foreach ($shapes as $shape) {
            if (!$shape instanceof Shape) {
                continue; // or exception, it depends 
            }
            $circumference += $shape->getCircumference();
        }
        return $circumference;
    }

}
