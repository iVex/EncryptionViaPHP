<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=encryption', 'root', '',
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING)
);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>