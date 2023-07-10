<?php


$topic = $result["data"]['topic'];
$posts = $result["data"]['posts'];
    
?>

<h1>detail d'un  topic</h1>

<?php

if($topic  )
{
    ?>
    <p><?=$topic->getId()?></p>

    <?php

    foreach ($posts as $post)
    {
        
        var_dump($post->getText())
        ?>
        <div class= "post">
        <h3><?=$topic->getTitle()?></h3>

<p> Crée par <p><?=$topic->getUser()->getPseudo()?></p>
<P> blabla <?=$post->getText()?> blabla</P>
        </div>

        <?php
    }




}