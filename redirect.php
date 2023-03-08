<?php
$config = include('config.php');
if(isset($_GET['id'])) {
	if(file_exists($config['folder']."/".$_GET['id'])) {
		$long_url = file_get_contents($config['folder']."/".$_GET['id']);
		header("Location: $long_url");
	} else {
		header("Location: $config['redir_url']");
	}

}
else {
	header("Location: $config['redir_url']");
}
?>