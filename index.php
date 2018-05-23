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


<?php


  if(isset($_SERVER['HTTP_REFERER'])){
    if(strpos($_SERVER['HTTP_REFERER'],'interworks.com') === false && strpos($_SERVER['HTTP_REFERER'],'furrymuff.co.uk') === false) {
      echo 'Failed Referer Test (Invalid Referer)';
      echo 'HTTP_REFERER : ' . $_SERVER['HTTP_REFERER'];
    }
  } else {
    echo 'No HTTP Referer)';

  }

  echo '<h2>Processing Request</h2>';
/*
  $url = '/services/oauth2/token';

  //Pass the fields to a string
  $fields_string = 
    "code=" . $code
    . "&grant_type=authorization_code"
    . "&client_id=" . CLIENT_ID
    . "&client_secret=" . CLIENT_SECRET
    . "&redirect_uri=" . urlencode(REDIRECT_URI);

  $cx = curl_init();
    curl_setopt($cx, CURLOPT_URL,$url);
    curl_setopt($cx, CURLOPT_POST, true);
    curl_setopt($cx, CURLOPT_POSTFIELDS,$fields_string);
    curl_setopt($cx, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($cx, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($cx, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cx, CURLOPT_FOLLOWLOCATION, FALSE);
  $init_response = curl_exec($cx);
  curl_close($cx);
*/
  echo '<h2>Done</h2>';

?>
