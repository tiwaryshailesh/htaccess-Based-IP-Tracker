<html><head><link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"></head>
<body onload="window.open('https://www.google.com','_self');">
<?php

date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y h:i:s a', time());
$ip = $_SERVER['REMOTE_ADDR'];
$id = $_SERVER['REQUEST_URI'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$handle = fopen("log.html", "a");
$feed = "[".$date."][".$id."][".$ip."][".$browser."]<br>";
fwrite($handle, $feed);
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
</body></html>