<?php

$categories = $result["data"]['categories'];
    
?>

<h1>liste categorier</h1>

<?php
foreach($categories as $category ){

    ?>
   
    <a href="index.php?ctrl=forum&action=detailcategory()&id=<?=$category->getId()?>"> <p><?=$category->getWording()?></p></a>
    <?php
}
