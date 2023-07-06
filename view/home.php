<?php
// Page d'accuile du site
$categories = $result["data"]['categories'];
// $topics = $result["data"]['topics'];
$rows=  $result["data"]['rows'];


?>

<h1>BIENVENUE SUR LE FORUM</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut nemo quia voluptas numquam, itaque ipsa soluta ratione eum temporibus aliquid, facere rerum in laborum debitis labore aliquam ullam cumque.</p>

<p>
    <a href="/security/login.html">Se connecter</a>
    <span>&nbsp;-&nbsp;</span>
    <a href="/security/register.html">S'inscrire</a>
</p>


<h2>
    les categorie
</h2>


 


<h1>liste categorier</h1>

<?php

    foreach($categories as $category ){

            ?>
            <a href="index.php?ctrl=forum&action=detailCategory&id=<?=$category->getId()?>"> <p><?=$category->getWording()?></p></a>
        
            <?php
        
        }
        ?>
 