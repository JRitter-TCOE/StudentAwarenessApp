<?php

if ($limit <= count($entries)) {
    
    $newLimit = $limit + 10;

    echo "<div class='row'>
    <form action='./' method='POST'>
    <button type='submit' name='limit' value=$newLimit class='btn' >Show More</button>
    </form>
    </div>";

}

?>