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
            $row1 = array('Splat', 'MPAror', 'Erickson');
            $row2 = array('CreateOldServer', 'CreateServer', 'You');
            $row3 = array('CreateBrock', 'CreateGrandpa', 'Ad');
            $viewfull = false;
        } elseif (portfolio::$view == "Design") {
            $row1 = array('Splat', 'MPAror');
            $row2 = array('You', 'Ad');
        } elseif (portfolio::$view == "Creation") {
            $row1 = array('CreateOldServer', 'CreateServer');
            $row2 = array('CreateBrock', 'CreateGrandpa');
            $row3 = array('You', 'Ad');
        } elseif (portfolio::$view == "Repair") {
            $row1 = array('ComingSoon', 'You');
            $row2 = array('Ad');
        } elseif (portfolio::$view == "Solutions") {
            $row1 = array('Erickson', 'You');
            $row2 = array('Ad');
        } elseif (portfolio::$view == "Apps") {
            $row1 = array('ComingSoon', 'You');
            $row2 = array('Ad');
        } else {
            $row1 = array('ComingSoon', 'You');
            $row2 = array('Ad');
        }
        if ($viewfull) {
            echo '<div style="width: 100%; height: 50px; margin-top: 15px;"><a class="btn btn-success longbutton" href="/Portfolio?view=All">View Full Portfolio</a></div>';
        }
        
        if (isset($row1)) {
            echo '<div class="cardrow">';
            cards::loadCards($row1);
            echo '</div>';
        }
        if (isset($row2)) {
            echo '<div class="cardrow">';
            cards::loadCards($row2);
            echo '</div>';
        }
        if (isset($row3)) {
            echo '<div class="cardrow">';
            cards::loadCards($row3);
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