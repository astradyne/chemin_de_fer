<?php

class card
{
   public $value = null;
   public $color = null;

   public function __toString()
   { 
    return
    '<div class="card" onclick = "this.classList.toggle(\'flipped\')" data-suit="'.$this->color.'" data-value="'.$this->value.'">
    <div class="top">
    <span>'.$this->value.'</span>'
    .'<img src="faces-suits/'.$this->color.'.png">'.    
   ' </div>'.
     //if($this->value)
     //{}
    '<div class="bottom">
    <span>'.$this->value.'</span>'.
    '<img src="faces-suits/'.$this->color.'.png">'. 
    '</div>
    <div class="back"></div>
    </div>';
      
}


}