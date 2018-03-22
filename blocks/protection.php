<?php
$allClasses = array("planets", "stars", "satellites", "galaxies", "constellations", "universe", "terms");
if(in_array($_GET['c'], $allClasses))
{
    $c = $_GET['c'];
}
else
{
    $c = "planets";
}