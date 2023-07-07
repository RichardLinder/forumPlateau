<?php


$topic = $result["data"]['topic'];
$posts = $result["data"]['posts'];
    
?>

<h1>detail d'un  topic</h1>

<?php

if($topic  )
{

    ?>
   
    <p><?=$topic->getTitle()?></p>
    <p><?=$topic->getId()?></p>
    <p><?=$topic->getUser()->getPseudo()?></p>
    <?php
    foreach ($posts as $post)
    {
        ?>
        <P><?=$post->getText()?></P>
        <p></p>
        <p></p>
        <?php
    }




}