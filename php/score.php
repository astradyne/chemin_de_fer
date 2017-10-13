<script>
var playerscore = null;
var dealerscore = null;

// this check if someone has reached 21
function natural(playerscore, dealerscore) {
    if(playerscore == dealerscore && playerscore == 21) {
        return alert('Tie');
    } else if(playerscore==21) {
        return alert('Player Win')
    } else if(dealerscore==21) {
        return alert('Dealer Win')
    }
}

function endgame(playerscore, dealerscore) {
    if (dealerscore > 21) {
        return alert('Player Win');
    } else if (playerscore > 21) {
        return alert('Dealer Win')
    }
}

// if player takes no card 
function lastcard(playerscore, dealerscore) {
    if(playerscore == dealerscore) {
        return alert('Tie');
    } else if (playerscore > dealerscore) {
        return alert('Player Win');
    } else if (playerscore < dealerscore) {
        return alert('Dealer Win');
    }
}

// INSTRUCTIONS
// after distribution runs *natural
// following cards runs *endagame if player takes card
// runs *endgame + *lastcard if player donesn't take a card


//natural(playerscore, dealerscore);
//endgame(playerscore, dealerscore);
// if player takes no card
//lastcard(playerscore, dealerscore);
</script>

<?php
include 'array.php'; 

foreach($deck as $crd){
var_dump($crd);
echo('<br>');
}

?>
