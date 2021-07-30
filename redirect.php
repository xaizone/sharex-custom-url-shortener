<?php
$config = include('config.php');
$redirect = $config['redir_url'];
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	if(file_exists($config['folder'].$id))
	{
		$long_link = file_get_contents($config['folder'].$id);
		header("location: $long_link"); 
	}
	else
	{
		header("location: $redirect");
	}

}
else
{
	header("location: $redirect");
}
?>