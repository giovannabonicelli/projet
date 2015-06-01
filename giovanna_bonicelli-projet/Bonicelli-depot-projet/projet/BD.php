<?php
try
{
$bdd = new PDO('pgsql:port:*;dbname=*', 'utilisateur' ,'mot-de-passe');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>