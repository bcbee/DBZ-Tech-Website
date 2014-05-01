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
            $row1 = array('UPR', 'You');
            break;
            case "Profile":
            $row1 = array('Bio','Qualifications');
            $row2 = array('Portfolio','Twitter');
            break;
            default:
            $row1 = array('ComingSoon', 'You');
        }
        
        
        if ($viewfull) {
            echo '<div style="width: 100%; height: 50px;"><a class="btn btn-success longbutton" href="/Portfolio"><span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span>View Full Portfolio</a></div>';
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

class mobilenav {
    
    public static function options($title) {
        $pages = array('Home','Design','Technology','Innovation','Apps','Portfolio','Contact');
        foreach($pages as $page) {
            if($page == $title) {
                echo "<option selected disabled>";
            } else {
                echo "<option>";
            }
            echo $page.'</option>';
        }
    }
}

?>