<?php


namespace App\classes;

class HelloWorld
{
    public $message;
    public $firstName;
    public $lastName;
    public $checkDataType;
    public $x;
    public $y;
    public function __construct($data){
        $this->message = $data;
        $this->x = 10;
        $this->y = 20;
    }
    public function index(){
        echo '<br/>';
        echo $this->x += $this->y;
        echo '<br/>';
        echo $this->x -= $this->y;
        echo '<br/>';
        echo $this->x *= $this->y;
        echo '<br/>';
        echo $this->x /= $this->y;
        echo '<br/>';
        echo $this->x %= $this->y;
        echo '<br/>';
        echo $this->x .= $this->y;
        echo '<br/>';
    }
}
?>