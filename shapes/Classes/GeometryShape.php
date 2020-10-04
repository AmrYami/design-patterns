<?php

/**
 * Base class for geometry objects.
 */

namespace ShapesClasses;

class GeometryShape {
    public function getName(){
        return get_class($this);
    }
}