<?php 
    $BODY = file_get_contents("../templates/body.html");
    $ERRANTRY = file_get_contents("../templates/tolkien/errantry/errantry.html");
    $BODY = str_replace('%%CENTER%%',$ERRANTRY, $BODY);
    $BODY = str_replace('%%TITLE%%',"Poemas", $BODY);
    $BODY = str_replace('%%TITLE_LINK%%',"index.php", $BODY);
    echo $BODY;
?>