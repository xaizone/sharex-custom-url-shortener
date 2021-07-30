<?php
$config = include('config.php');
if(!empty($_POST['link']) && $_POST['key'] == $config['secure_key'])
{
	$id = bin2hex(openssl_random_pseudo_bytes(4));
	$create = file_put_contents($config['folder'].$id, $_POST['link']);
	if($create)
	{
		echo $config['short_url'].$id;
	}
	else
	{
		echo "error couldnt create file";
	}
}
else
{
	echo "invalid link or password";
}
?>