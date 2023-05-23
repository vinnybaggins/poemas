<?php 
    $BODY = file_get_contents("../templates/body.html");
    $CAMOES = file_get_contents("../templates/camoes/camoes-index.html");
    $BODY = str_replace('%%CENTER%%',$CAMOES, $BODY);
    $BODY = str_replace('%%TITLE%%',"Camões", $BODY);
    $BODY = str_replace('%%TITLE_LINK%%',"index.php", $BODY);
    echo $BODY;
?>