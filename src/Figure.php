<?php
require_once 'Interfaces/FigureInterface.php';

abstract class Figure implements FigureInterface {
    protected $height;
    protected $width;

    public function __construct($height) {
        $this->height = $height;
        $this->width = $height;
    }

    public function draw() {
        for ($i = 0; $i < $this->height; $i++) {
            for ($j = 0; $j < $this->width; $j++) {
                if ($this->shouldBeFilled($i, $j)) {
                    echo "*";
                } else {
                    echo ".";
                }
            }
            echo PHP_EOL;
        }
    }

    protected abstract function shouldBeFilled($i, $j);
}
