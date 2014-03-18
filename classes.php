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
        
        switch(portfolio::$view) {
            case "All":
            $row1 = array('Splat', 'MPAror', 'Erickson');
            $row2 = array('CreateOldServer', 'CreateServer', 'You');
            $row3 = array('CreateBrock', 'CreateGrandpa');
            $viewfull = false;
            break;
            case "Design":
            $row1 = array('Design');
            $row2 = array('Splat', 'MPAror');
            $row3 = array('You');
            break;
            case "Technology":
            $row1 = array('Technology', 'CreateServer');
            $row2 = array('CreateBrock', 'CreateOldServer', 'CreateGrandpa');
            $row3 = array('Erickson', 'You');
            break;
            case "Innovation":
            $row1 = array('ComingSoon', 'You');
            break;
            case "Apps":
            $row1 = array('ComingSoon', 'You');
            break;
            case "Profile":
            $row1 = array('Bio','Qualifications');
            $row2 = array('Portfolio','Twitter');
            break;
            default:
            $row1 = array('ComingSoon', 'You');
        }
        
        
        if ($viewfull) {
            echo '<div style="width: 100%; height: 50px; margin-top: 15px;"><a class="btn btn-success longbutton" href="/Portfolio?view=All"><span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span>View Full Portfolio</a></div>';
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