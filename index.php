<?php
/*  echo "Get the parameters <hr/>";

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
*/
?>
<head>

<style>
body {
	width:100%;
  margin-left:auto;
  margin-right:auto;
	background-image:url('tdr-mac-desktop-discs-black.png.');
  background-size:cover;
  background-color:#FFFFFF;
  color:#000000;
  }
	
table {
  width:100%;
  background-color:#e6e6fa;
	}
  
td {
  width:12.5%;
  font-size:normal;
  }
  
input {
  width:100%;
	}
  
</style>
</head>
<body>
  
  <form method="post" action="https://dated-exchange-rate.herokuapp.com/getToken.php">
    <table>
	    <tr>
        <td>
          End Point
        </td>
        <td style="width:100%">
          <input name="url"  type="text" value="<?PHP echo $_SERVER['HTTP_REFERER'] . 'services/oauth2/token';?>"/>
        </td>
      </tr>
	    <tr>
        <td>
          Code
        </td>
        <td style="width:100%">
          <input name="code"  type="password" value="<?PHP echo $_GET['code']; ?>"/>
        </td>
      </tr>
	    <tr>
        <td>
          Client Id
        </td>
        <td style="width:100%">
          <input name="client_id"  type="password" value=""/>
        </td>
      </tr>
<!--	    <tr>
        <td>
          Client Secret
        </td>
        <td style="width:100%">
          <input name="client_secret"  type="text" value=""/>
        </td>
      </tr> -->
    </table>

    <input type="submit" value="Get Access Token">
  </form>
  
</body>
