<?php

include_once 'number.php';

$values=[
       'A',
       '2',
       '3',
       '4',
       '5',
       '6',
       '7',
       '8',
       '9',
       '10',
       'J',
       'Q',
       'K'
   ];

$colors=[
       'spades','hearts', 'clubs','diamonds'
   ];

   $deck = array_merge ($values,$colors);
  
   var_dump($deck);
   //shuffle($deck);
   //print_r($deck);
 

   foreach($values as $value)
   { 
       foreach ($colors as $color)
        {
            $card= new card();
            $card->value=$value;
            $card->color=$color;
    echo $card;
    
}
   }