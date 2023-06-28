<?php

$category = $result["data"]['category'];
    
?>

<h1>detail d'un  category</h1>

<?php

if($category  ){

    ?>
<p><?=$category->getId()?></p>   
<p><?=$category->getWording()?></p>

<?php
}