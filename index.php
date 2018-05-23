<?php
  echo "Get the parameters <hr/>";

  foreach($_POST as $key => $value){
    echo  $key . ' : ' . $value. '<br/>';
  }

  foreach($_GET as $key => $value){
    echo  $key . ' : ' . $value. '<br/>';
  }

  echo 'HTTP_HOST : ' . $_SERVER['HTTP_HOST'] . '<br/>';

  // Get the Referer - so we don't have to limit to a single site
  if(isset($_SERVER['HTTP_REFERER'])){
    echo 'HTTP_REFERER : ' . $_SERVER['HTTP_REFERER'];
  } else {
    echo 'No HTTP Referer';
    exit;
  }

?>


<?php

//  require_once 'config.php';

  echo '<h2>Processing Request</h2>';

  $url = $_SERVER['HTTP_REFERER'] . 'services/oauth2/token';

  //Pass the fields to a string
  $fields_string = 
    "code=" . $_GET['code']
    . "&grant_type=authorization_code"
    . "&client_id=" . "3MVG9sSN_PMn8tjSodyD28jSJpz2DOxGbn8FfezgD5nx51BflOpnioXROwyzm27CevivhcbLeDnc19M6AFWW9"
    . "&client_secret=" . "7103702565598473317"
    . "&redirect_uri=" . urlencode("https://dated-exchange-rate.herokuapp.com/");

  $cx = curl_init();
    curl_setopt($cx, CURLOPT_URL,$url);
    curl_setopt($cx, CURLOPT_POST, true);
    curl_setopt($cx, CURLOPT_POSTFIELDS,$fields_string);
    curl_setopt($cx, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($cx, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($cx, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cx, CURLOPT_FOLLOWLOCATION, FALSE);
  $init_response = curl_exec($cx);
  
  echo $init_response;
  echo $init_response => access_token;
  
  curl_close($cx);

  echo '<h2>Done</h2>';

?>
