<?php
require_once 'Interfaces/FigureInterface.php';

require_once 'Figure.php';

class Cross extends Figure {
    protected function shouldBeFilled($i, $j) {
        return $j == floor($this->width / 2) || $i == floor($this->height / 2);
    }
}

