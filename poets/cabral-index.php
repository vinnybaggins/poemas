<?php 
    $BODY = file_get_contents("../templates/body.html");
    $cABRAL = file_get_contents("../templates/cabral/cabral-index.html");
    $BODY = str_replace('%%CENTER%%',$cABRAL, $BODY);
    $BODY = str_replace('%%TITLE%%',"João Cabral de Melo Neto", $BODY);
    $BODY = str_replace('%%TITLE_LINK%%',"index.php", $BODY);
    echo $BODY;
?>