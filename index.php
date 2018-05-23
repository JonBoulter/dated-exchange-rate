<?php
echo "Running PHP";

foreach($_POST as $key => $value)
{
    if (strstr($key, 'item'))
    {
        $x = str_replace('item','',$key);
        echo $value . ' : ' . $x;
    }
}

echo "Done";

?>
