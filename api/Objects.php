<?php
trait Objects {
    protected $material;
    protected $size;

    public function setMaterial($arr){
        return $this->material = $arr['material'];
    }
    public function setSize($arr){
        return $this->size = $arr['size'];
    }
}