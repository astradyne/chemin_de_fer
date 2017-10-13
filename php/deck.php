<?php
include_once 'number.php';
// print_r($card);



$values=[
    'A','2','3','4','5','6','7','8','9','10','J','Q','K'
];

$colors=[
    'spades','hearts', 'clubs','diamonds'
];


$deck =[];
foreach($values as $value)
{ 
    foreach ($colors as $color)
     {
         $card = new card();
         $card->value=$value;
         $card->color=$color;

         $deck[] = $card;
}
}

//foreach($deck as $crd) {
 //   echo($crd);
//    echo '<br>';
//}
shuffle($deck);

echo '<br>';
foreach($deck as $crd) {
    echo($crd);
    echo '<br>';
}

?>