<?php
include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
$selected = @$_REQUEST['selected'];
if(empty($selected))
{
    echo "Nothing Here";
}
else
{
    include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/protection.php");
    $oRequest = "SELECT ".$c."_image, ".$c."_name, ".$c."_id, ".$c."_class FROM ".$c." WHERE ".$c."_class IN (".$selected.") ORDER BY ".$c."_name ASC";
    $obj = mysqli_query($dbQuery, $oRequest);
    while($oArr = mysqli_fetch_array($obj))
    {
        $objId = $oArr[$c.'_id'];
        $name = $oArr[$c.'_name'];
        $class = $oArr[$c.'_class'];
        $img = $oArr[$c.'_image'];
        echo "<div class='s-obj'>                      
                  <div class='s-img'>
                        <a href='/newUniverse/pages/object.php?objectId=".$objId."&o=".$c."&t=".$c."'><img src='".$img."' width='100%'></a>
                        <div class='s-inf'>
                            <div class='s-title boxSizingStyle'>".$name."<div class='s-class'>".$class."</div></div>
                            <div class='s-button boxSizingStyle'><a href='/newUniverse/pages/object.php?objectId=".$objId."&o=".$c."&t=".$c."'>Read More</a></div>
                        </div>
                  </div>
              </div>";
    }
    mysqli_free_result($obj);
}
mysqli_close($dbQuery);
