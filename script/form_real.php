<?php
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
 ?>
<html>  
<head>  
<title>client</title>  
</head>  
<body>  
<form name="search_form" method="POST" action="http://sleeper.clickstop.com/?method=hello&format=json">  

<label>Authentication Key</label>
<input type ="text" name ="authentication_key" value=""/>
<label>Your IP Address</label>
<input type="text" name="ip_address" value="<?php echo $ip;?>"/>
<input type="submit" name="search" value="Submit">
  
</form>  
