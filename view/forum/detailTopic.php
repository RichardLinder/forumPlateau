<?php


$topic = $result["data"]['topic'];
    
?>

<h1>detail d'un  topic</h1>

<?php

die (var_dump($topic));
foreach($topic as $detail ){

    ?>
   
<p><?=$detail->getTitle()?></p>
    <?php
}