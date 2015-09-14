<?php
#PHP Class File
include('Search/search.php');

class cards {
    public static function loadCards($cardsToLoad, $type) {
        foreach($cardsToLoad as $currentCard) {
            $filename = "Cards/".$currentCard.".php";
            if ($type == 'title') {
                echo '<div class="card titlecard" id="'.$currentCard.'">';
                if (file_exists($filename)) {
                    include($filename);
                }
                echo '</div><br />';
            } else {
                echo '<div class="card" id="'.$currentCard.'">';
                if (file_exists($filename)) {
                    include($filename);
                }
                echo '</div>';
            }
        }
    }
}

class portfolio {
    public static $view = "All";

    public static function display() {
        $viewfull = true;

        switch(portfolio::$view) {
            case "All":
            $detailcards = array('Splat', 'MPAror', 'UPR', 'Erickson', 'CreateOldServer', 'CreateServer', 'CreateBrock', 'CreateGrandpa');
            $viewfull = false;
            break;
            case "Design":
            $titlecard = array('Design');
            $detailcards = array('Splat', 'MPAror');
            $row3 = array();
            break;
            case "Technology":
            $titlecard = array('Technology');
            $detailcards = array('CreateServer', 'CreateBrock', 'CreateOldServer', 'CreateGrandpa', 'Erickson');
            break;
            case "Innovation":
            $detailcards = array('ComingSoon');
            break;
            case "Apps":
            $detailcards = array('UPR');
            break;
            case "Profile":
            $detaildards = array('Bio','Qualifications','Portfolio','Twitter');
            break;
            default:
            $detailcards = array('ComingSoon');
        }

        if (isset($titlecard)) {
            cards::loadCards($titlecard, 'title');
        }


        if ($viewfull) {
            echo '<div style="width: 100%; height: 50px;"><a class="btn btn-success longbutton" href="/Portfolio"><span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span>View Full Portfolio</a></div>';
        }

        array_push($detailcards, 'You');


        if (isset($detailcards)) {
            cards::loadCards($detailcards, 'detail');
        }


    }
}

class mobilenav {

    public static function options($title) {
        $pages = array('Home','Design','Technology','Innovation','Apps','Portfolio','Contact');
        foreach($pages as $page) {
            if($page == $title) {
                echo '<li class="menulink disabled"><a href="/'.$page.'">';
            } else {
                echo '<li class="menulink"><a href="/'.$page.'">';
            }
            echo $page.'</a></li>';
        }
    }
}

?>
