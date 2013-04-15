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

class portfolio {
    public static $view = "All";
    
    public static function display() {
        $viewfull = true;
        if (portfolio::$view == "All") {
            $cards = Array('Splat', 'MPAror', 'Erickson','CreateOldServer', 'CreateServer', 'CreateBrock', 'CreateGrandpa');
            $viewfull = false;
        } elseif (portfolio::$view == "Design") {
            $cards = Array('Splat', 'MPAror');
        } elseif (portfolio::$view == "Creation") {
            $cards = Array('CreateOldServer', 'CreateServer', 'CreateBrock', 'CreateGrandpa');
        } elseif (portfolio::$view == "Repair") {
            $cards = Array('ComingSoon');
        } elseif (portfolio::$view == "Solutions") {
            $cards = Array('Erickson');
        } elseif (portfolio::$view == "Apps") {
            $cards = Array('ComingSoon');
        } else {
            $cards = Array('ComingSoon');
        }
        array_push($cards, 'You', 'Ad');
        if ($viewfull) {
            echo '<div style="width: 100%; height: 50px; margin-top: 15px;"><a class="button longbutton centerbutton" href="/Portfolio?view=All">View Full Portfolio</a></div>';
        }
        cards::loadCards($cards);
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