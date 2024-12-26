<?php

//class
class robot{

    //public, protected, private
    
    //property
    public $suara;
    public $berat;

    //konstruktor
    public function __construct($suara, $berat){
        $this->suara = $suara;
        $this->berat = $berat;
    }

    //metode set && metode get

    public function set_suara($suara){ //untuk setting
        $this->suara = $suara;
        return $this;
    }

    public function get_suara(){ //untuk ambil
        return $this->suara;
    }

    public function set_berat($berat){ //untuk setting
        $this->berat = $berat;
    }

    public function get_berat(){
        return $this->berat;
    }

}


?>