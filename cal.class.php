<?php
class cal 
{
    public $oper;
    public $num1;
    public $num2;

public function __construct($opp,$numb1,$numb2)
{
    $this->oper=$opp;
    $this->num1=$numb1;
    $this->num2=$numb2;
}
public function calculation ()
{
    switch ($this->oper) {
        case "ADD":
            $res=$this->num1+$this->num2;
            return $res;
          break;

        case "SUB":
            $res=$this->num1-$this->num2;
            return $res;
          break;

        case "MUL":
            $res=$this->num1*$this->num2;
            return $res;
          break;
          case "DIV":
            $res=$this->num1/$this->num2;
            return $res;
            break;

        default:
          echo "error";
      }
}
}