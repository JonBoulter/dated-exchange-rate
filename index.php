<?php
echo "Running PHP <br/>";

foreach($_POST as $key => $value){
    echo  $key . ' : ' . $value. '<br/>';
}

foreach($_GET as $key => $value){
    echo  $key . ' : ' . $value. '<br/>';
}

echo "Done <br/>";

?>
