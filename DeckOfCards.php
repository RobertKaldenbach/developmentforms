<?php

/*** This script stimulates a deck of cards with the ability to shuffle them using a single class. ***/ 

 
 class deck {
    
	 
    //Builds deck with two arrays to hold different suits and faces.      
    
    public static function cards () {
        
    $suits = array ( "Spades", "Hearts", "Clubs", "Diamonds" ); 
    $faces = array ( "Two","Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen",     
                    "King", "Ace" ); 
    
  
    // Cards array to hold the card values. 
    
     $cards = array(); 
      
    foreach ($suits as $suit) {
        foreach ($faces as $face) {
            $cards[]= array ("face"=>$face, "suit"=>$suit);
            
        }
    }
    
    return $cards; 
} 
        
  // This second function shuffles the array of cards. 

public static function shuffle (array $cards) {
    
    $total_cards = count($cards);
    
    foreach ($cards as $index => $card) {
        
         // Picks a random card.
        $card2_index = mt_rand(1, $total_cards) - 1;
			 $card2 = $cards[$card2_index];
    }
    
    return $cards; 

}
}
    

?>
