<?php 
    $BODY = file_get_contents("templates/body.html");
    $INDEX = file_get_contents("templates/index.html");
    $BODY = str_replace('%%CENTER%%',$INDEX, $BODY);
    $BODY = str_replace('%%TITLE%%',"Poemas", $BODY);
    $BODY = str_replace('%%TITLE_LINK%%',"#", $BODY);
    echo $BODY;
?>