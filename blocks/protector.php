<?php
$allTables = array("planets", "satellites", "stars", "galaxies", "constellations");
$allObjects = array("planets", "satellites", "stars", "galaxies", "constellations");
$allId = range(1, 48);
$i = (int)$_GET['objectId'];
if(in_array($_GET['t'], $allTables) && in_array($_GET['o'], $allObjects) && in_array($i, $allId))
{
    $t = $_GET['t'];
    $o = $_GET['o'];
    $oId = intval($_GET['objectId']);
}
else
{
    $t = "planets";
    $o = "planets";
    $oId = 1;
}