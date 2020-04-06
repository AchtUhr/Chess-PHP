<?php
class piece{
    private $_couleur;
    private $_type;

    public function __construct($couleur,$type){
        $this->_couleur = $couleur;
        $this->_type = $type;
    }

    public function __toString(){
        return $this->_type." ".$this->_couleur;
    }
}