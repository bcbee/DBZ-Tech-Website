<?php
#PHP Class File

class cards {
    public static function loadCards($cardsToLoad) {
        foreach($cardsToLoad as $currentCard) {
            $filename = "Cards/".$currentCard.".php";
            echo '<div class="card">';
            #echo $filename;
            if (file_exists($filename)) {
                include($filename);
    	    }
            echo '</div>';
        }
    }
}
?>