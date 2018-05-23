<?php
  echo "Get the parameters <hr/>";

  foreach($_POST as $key => $value){
    echo  $key . ' : ' . $value. '<br/>';
  }

  foreach($_GET as $key => $value){
    echo  $key . ' : ' . $value. '<br/>';
  }

  echo 'HTTP_HOST : ' . $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER['HTTP_HOST'] . '<br/>';

  // Get the Referer - so we don't have to limit to a single site
  if(isset($_SERVER['HTTP_REFERER'])){
    echo 'HTTP_REFERER : ' . $_SERVER['HTTP_REFERER']. '<br/>';
  } else {
    echo 'No HTTP Referer'. '<br/>';
    exit;
  }

?>

<form method="post" action="https://dated-exchange-rate.herokuapp.com/getToken.php">
	<input name="url"  type="text" value="<?PHP echo $_SERVER['HTTP_REFERER'] ?>"/>
  <input name="code"  type="text" value="<?PHP echo $_GET['code'] ?>"/>
  <input name="client_id"  type="text" value=""/>
  <input name="client_secret"  type="text" value=""/>
</form>
