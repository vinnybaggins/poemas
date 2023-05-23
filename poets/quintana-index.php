<?php 
    $BODY = file_get_contents("../templates/body.html");
    $QUINTANA = file_get_contents("../templates/quintana/quintana-index.html");
    $BODY = str_replace('%%CENTER%%',$QUINTANA, $BODY);
    $BODY = str_replace('%%TITLE%%',"Mário Quintana", $BODY);
    $BODY = str_replace('%%TITLE_LINK%%',"index.php", $BODY);
    echo $BODY;
?>