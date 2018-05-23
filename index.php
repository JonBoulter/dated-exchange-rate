<?php
echo "Running PHP <br/>";

foreach($_POST as $key => $value){
    if (strstr($key, 'item')) {
        $x = str_replace('item','',$key);
        echo $value . ' : ' . $x . '<br/>;
    }
}

foreach($_GET as $key => $value){
    if (strstr($key, 'item')) {
        $x = str_replace('item','',$key);
        echo $value . ' : ' . $x . '<br/>;
    }
}

echo "Done <br/>";

?>
