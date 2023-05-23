<?php 
    $BODY = file_get_contents("../templates/body.html");
    $VOYAGE = file_get_contents("../templates/tolkien/voyage-earendel/tolkien-voyage-earendel.html");
    $BODY = str_replace('%%CENTER%%', $VOYAGE, $BODY);
    $BODY = str_replace('%%TITLE%%',"The Voyage of Éarendel", $BODY);
    $BODY = str_replace('%%TITLE_LINK%%',"index.php", $BODY);
    echo $BODY;
?>