<?php


$topic = $result["data"]['topic'];
    
?>

<h1>detail d'un  topic</h1>

<?php

if($topic  ){

    ?>
   
<p><?=$topic->getTitle()?></p>
<p><?=$topic->getId()?></p>
<p><?=$topic->getUser()->getPseudo()?></p>
    <?php
}