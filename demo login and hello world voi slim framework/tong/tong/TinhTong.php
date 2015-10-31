<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class TinhTong{
    public $so1;
    public $so2;
    
    function __construct($so1,$so2) {
        $this->so1=$so1;
        $this->so2=$so2;
    }
    
    function tinh(){
        return $this->so1+$this->so2;
    }
}
