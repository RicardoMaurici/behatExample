<?php
/**
 * User: ricardo
 * Date: 21/07/15
 */

class PHPadder {

    private $a;
    private $b;
    private $c;
    private $sum;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add()
    {
        $this->sum = $this->a + $this->b + $this->c;
    }

    public function display()
    {
        return $this->sum;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function setThird($t)
    {
        $this->c = $t;
    }
}