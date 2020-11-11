<?php
class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getRoot1()
    {
        $delta = $this->b * $this->b - 4 * ($this->a * $this->c);
        if ($delta > 0) {
            return "pt co no la" .  ((-$this->b + sqrt($delta)) / (2 * $this->a))."    " .((-$this->b - sqrt($delta)) / (2 * $this->a));
        } elseif ($delta == 0) {
            return "pt co no la" .  ((-$this->b - sqrt($delta)) / (2 * $this->a));
        } else {
            return "The equation has no roots";
        }
    }
}

$a = 1;
$b = 4;
$c = 4;
$ptb2 = new QuadraticEquation($a, $b, $c);
echo $ptb2->getRoot1();