<?php

    $suits = ['C', 'H', 'S', 'D'];
    $cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
    $handTotal;

    function buildDeck($suits, $cards) {
        $newDeck = array();
        foreach($suits as $suit){
            foreach($cards as $card){
                $newDeck[] = "$card $suit";
            };
            shuffle($newDeck);
        };
        return $newDeck;
    };

    function removeSuit($card) {
        $card = explode(' ', $card);
        array_pop($card);
        $card = implode(' ', $card);
        return $card;
    };

    function getCardValue($card) {
        $card = removeSuit($card);
        if ($card == 'A'){
            $value = 11;
        } elseif ($card == 'J' || $card == 'Q' || $card == 'K') {
            $value = 10;
        } else {
            $value = $card;
        }
        return $value;
    };

    function getHandTotal($hand, $handTotal = '') {
        foreach($hand as $eachCard){
            if(getCardValue($eachCard) == 11 && $handTotal >= 11){
                $handTotal += 1;
            } else {
                $handTotal += getCardValue($eachCard);
            };
        };
        return $handTotal;
    };
   
    function drawCard(&$hand, &$deck) {
        $hand[] = $deck[0];
        array_shift($deck);
    };
    
    function echoHand($hand, $name, $hidden = false) {
        if($hidden){
            echo "$name: [$hand[0]] [???] Total: ???".PHP_EOL;
        } else {
            $cardsInHand = '';
            foreach($hand as $eachCard){
                $cardsInHand .= " [$eachCard]"; 
            };
            echo "$name:".$cardsInHand." Total: ".getHandTotal($hand).PHP_EOL;
        };
    };

    $deck = buildDeck($suits, $cards);
    $dealer = [];
    $player = [];
   
    drawCard($player, $deck);
    drawCard($player, $deck);

    drawCard($dealer, $deck);
    drawCard($dealer, $deck);

    echoHand($dealer, 'Dealer', true);
    echoHand($player, 'Player');

    while (getHandTotal($player) < 21) {
          echo "(H)it or (S)tay?\n";
          $choice = strtoupper(trim(fgets(STDIN)));
          if ($choice == 'H'){
            drawCard($player, $deck);
            echoHand($player, 'Player');
          } elseif ($choice == 'S'){
                break;  
          };
    };

    echoHand($dealer, 'Dealer'); 

    if(getHandTotal($player) > 21){
        echo "You Busted!" . PHP_EOL;
        exit(0);
    } else if(getHandTotal($player) == 21){
        echo "You won!" . PHP_EOL;
        exit(0);
    } else {
        while(getHandTotal($dealer) < 17){
            drawCard($dealer, $deck);
            echoHand($dealer, 'Dealer');
        };
    };
    
    if(getHandTotal($dealer) > 21){
        echo "Dealer busts, you win!" . PHP_EOL;
    } elseif (getHandTotal($dealer) == getHandTotal($player)){
        echo "You and the Dealer tied, it's a PUSH!" . PHP_EOL;
    } elseif (getHandTotal($dealer) > getHandTotal($player)){
        echo "Dealer Won!" . PHP_EOL;
    } else {
        echo "You Won!" . PHP_EOL;
    };