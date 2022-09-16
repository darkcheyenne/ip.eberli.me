<html>
 <head>
  <title>Your IP</title>
  <script async defer data-website-id="2c1570de-1161-49b7-b10d-57d5442fe5eb" src="http://100.104.98.67:3000/umami.js"></script>
 </head>
 <body>
 <?php 

function getClientIP(){
     if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
            return  $_SERVER["HTTP_X_FORWARDED_FOR"];
     }else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER["REMOTE_ADDR"];
     }else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER["HTTP_CLIENT_IP"];
     }

     return '';
}

echo '<h1 align="center">';
echo getClientIP();
echo '</h1>';
?>
 </body>
</html>
