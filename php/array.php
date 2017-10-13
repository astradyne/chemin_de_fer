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

   //shuffle($deck);
   //print_r($deck);
   
   $deck=[];
   foreach($values as $value)
   { 
       foreach ($colors as $color)
        {
            $card= new card();
            $card->value=$value;
            $card->color=$color;

            switch ($value) {
                case "A":
                    $card->score=11;
                    break;
                case "2":
                    $card->score=2;
                    break;
                case "3":
                    $card->score=3;
                    break;
                case "4":
                    $card->score=4;
                    break;
                case "5":
                    $card->score=5;
                    break;
                case "6":
                    $card->score=6;
                    break;
                case "7":
                    $card->score=7;
                    break;
                case "8":
                    $card->score=8;
                    break;
                case "9":
                    $card->score=9;
                    break;
                case "10":
                    $card->score=10;
                    break;
                case "J":
                    $card->score=10;
                    break;
                case "Q":
                    $card->score=10;
                    break;
                case "K":
                    $card->score=10;
                    break;
            }
            $deck[] = $card;   
}
   }
shuffle($deck);

   
   
