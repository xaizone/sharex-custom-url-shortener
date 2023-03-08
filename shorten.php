<?php
$config = include('config.php');
if(isset($_POST['link']) && filter_var($_POST['link'], FILTER_VALIDATE_URL) && $_POST['key'] == $config['key']) {
	$id = bin2hex(openssl_random_pseudo_bytes(4));
	if(file_put_contents($config['folder']."/".$id, $_POST['link'])) {
		echo $config['short_url'].$id;
	} else {
		echo "couldn't create file";
	}
}
else {
	echo "invalid link or key";
}
?>