<?php
// on stock  les category et les topic recupéré de ma base de donné
$category = $result["data"]['category'];
$topics = $result["data"]['topics'];

    
?>

<h1>detail d'un  category</h1>

<?php

if($category  ){

    ?>
<p><?=$category->getId()?></p>   
<p><?=$category->getWording()?></p>

<?php
if (isset($topics)&&$topics!=null) 
{
   
    foreach($topics as $topic ){
    
        ?>
       
        <a href="index.php?ctrl=forum&action=detailTopic&id=<?=$topic->getId()?>"> <p><?=$topic->getTitle()?></p></a>
        
    
        <?php
    }
}else 
{
    echo " Le sujet n'a pas encore discution ";    
}
}

?>
<form action="index.php?ctrl=forum&action=addTopic" method="post" >
 <input  name="title"  type="text"  placeholder="nouveaugenre">
 <input name ="user_id" type="int"> 
<button name="category_id" value ="<?=$category->getId()?>" type= "submit">
    cliker vite 
</button>
</form>
