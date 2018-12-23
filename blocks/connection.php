<?php
$dbQuery = mysqli_connect("localhost", "Misha", "qwe1asd2zxc3", "new_universe_db");
if (mysqli_connect_errno())
{
    echo "ERROR!".mysqli_connect_error();
}
mysqli_query($dbQuery, "SET NAMES utf8");
?>
