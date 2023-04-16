<?php
require_once 'Interfaces/FigureInterface.php';

require_once 'Figure.php';

class X extends Figure {
    protected function shouldBeFilled($i, $j) {
        return $j == $i || $j == ($this->width - $i - 1);
    }
}

