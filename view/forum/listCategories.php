<?php

$categories = $result["data"]['categories'];
 
?>

<h1>liste categorier</h1>

<?php
foreach($categories as $category ){

    ?>
   <div>

       <span>
           <a href="index.php?ctrl=forum&action=detailCategory&id=<?=$category->getId()?>"> <p><?=$category->getWording()?></p></a>
           
        </span> 
        <span>
            <a href="index.php?ctrl=forum&action=delletCategory&id=<?=$category->getId()?>">supprimer</a>
        </span>
        </div>
        <?php
}

?>
<form action="index.php?ctrl=forum&action=addCategory" method="post">
 <input  name="wording"  type="text"  placeholder="nouveaugenre">
<button type="submit">
    cliker vite 
</button>
</form>
