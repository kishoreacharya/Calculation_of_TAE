<?php

namespace MotorK; 

class Tae {

	public static $tan=0;
	public static $n=0;

  public static function init($tan_value,$n_value) {
    	$obj = new Tae();
    	self::$tan=$tan_value/100;
    	self::$n=$n_value;
        return $obj;
    }

     public function calculate() {   
        $val=self::$tan/self::$n;
        $exp=1+($val);
        $tae=pow(($exp), self::$n);
        $tae=$tae-1;
        $tae=$tae*100;
        $tae=round($tae,4); 
        return $tae;      
    }

    public function __toString()
    {
    	$res=round( $this->calculate(),3);
    	$res=$res.' %';
        return $res;
    }
       
}