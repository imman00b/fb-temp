<body>
<?php

  require_once("facebook.php");

  $appId='<redacted>';
  $secret='<redacted>';
  $pageId='<redacted>';
  
  $config = array(
      'appId' => $appId,
      'secret' => $secret,
      );

  $facebook = new Facebook($config);
  
  
	$access_token = "<redacted>";
	$facebook->setAccessToken($access_token);
	
	$Profile = $facebook->api($pageId);
	$Posts = $facebook->api($pageId.'/posts');
	
	echo 'My Page profile';
	print_r($Profile);
	echo 'My Page Wall';
	print_r($Posts);
	
?>
<script>
if(location.hash)
document.body.innerHTML  = '<pre>'+location.hash.substring(1)+'</pre>';
</script>
</body>
