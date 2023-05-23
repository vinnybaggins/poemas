<?php 
    $BODY = file_get_contents("../templates/body.html");
    $TOLKIEN = file_get_contents("../templates/tolkien/tolkien-index.html");
    $BODY = str_replace('%%CENTER%%',$TOLKIEN, $BODY);
    $BODY = str_replace('%%TITLE%%',"Tolkien", $BODY);
    $BODY = str_replace('%%TITLE_LINK%%',"index.php", $BODY);
    echo $BODY;
?>