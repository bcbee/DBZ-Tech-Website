<?php
#PHP Class File
include('Search/search.php');

class cards {
    public static function loadCards($cardsToLoad) {
        foreach($cardsToLoad as $currentCard) {
            $filename = "Cards/".$currentCard.".php";
            echo '<div class="card" id="'.$currentCard.'">';
            #echo $filename;
            if (file_exists($filename)) {
                include($filename);
    	    }
            echo '</div>';
        }
    }
}

class color {
    public static $color = "";
    
    public static function set($color) {
        color::$color = $color;
        echo '<link rel="stylesheet" href="/CSS/'.$color.'.css" />';
    }
}

?>