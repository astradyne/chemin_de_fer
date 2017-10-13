<?php

class card
{
   public $value = null;
   public $color = null;

   public function __toString()
   { 
    return
    '<div class="card">
    <div class="top">
    <span>'.$this->value.'</span>'
    .'<img src="faces-suits/'.$this->color.'.png">'.    
   ' </div>'.
     //f($this->value)
     //{}
    '<div class="bottom">
    <span>'.$this->value.'</span>'.
    '<img src="faces-suits/'.$this->color.'.png">'. 
    '</div>
    </div>';
      
}


}