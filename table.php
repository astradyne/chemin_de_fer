<?php
include_once 'php/array.php';
include_once 'php/number.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BlackJack</title>
        <link rel="stylesheet" href="css/table.css">
        <link rel="stylesheet" href="css/spades.css">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
    </head>

    <body>
        <div class="nav">

        </div>
        <div class="table">
            <div class="deck">
                <div class="deck-wrapper">

                    <?php foreach($deck as $crd){echo $crd;}?>
                </div>
            </div>
            <div class="dealer">
                <h1>DEALER</h1>
                <div class="score"></div>
                <div class="cards"></div>

                <img src="whiskey.png" class="whiskey" alt="whiskey">
            </div>
            <img src="cigar2.png" class="cigar" alt="cigar">
        </div>
        <div class="button">
            <button class="button1">Deal</button>
            <button class="button2">Hit</button>
            <button class="butto3">Double Down</button>
            <button class="button4">Pass</button>
        </div>
        <div class="player">
            <h1>PLAYER</h1>
            <div class="score"></div>
            <div class="cards"> </div>


        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

        <script>
            var playerOffset = $(".player .cards").offset();
            console.log(playerOffset.top, playerOffset.left);

            var dealerOffset = $(".dealer .cards").offset();
            console.log(dealerOffset.top, dealerOffset.left);

            var deckOffset = $(".deck ").offset();
            //console.log(dealerOffset.top, dealerOffset.left);

            $(".button1").click(function () {
                        var playerCards = 0;
                        var dealerCards = 0;
                    

                        function playerDeal() {
                            var deck = $('.deck .card').last();
                            deck.css({
                                'transform': 'rotate(0deg)'
                            });
                            deck.animate({
                                    'top': playerOffset.top,
                                    'left': playerOffset.left
                                }, 1000,
                                
                                function () {
                                    deck.detach().appendTo($('.player .cards'));
                                    if(dealerCards < 2){
                                        dealerDeal();
                                        dealerCards++;
                                    }
                                
                                }
                            );

                        };
                        
                        
                        function dealerDeal() {
                            var deck = $('.deck .card').last();
                            deck.css({
                                'transform': 'rotate(0deg)'
                            });
                            deck.animate({
                                'top': dealerOffset.top,
                                'left': dealerOffset.left
                            }, 1000, function () {
                                    deck.detach().appendTo('.dealer .cards');
                                    console.log(playerCards);   
                                    if(playerCards < 2){
                                        playerDeal();
                                        playerCards++;
                                    }
                            });                
                        }


                        playerDeal();
                        playerCards++;

                        
                    });    
                          
        </script>
    </body>

    </html>