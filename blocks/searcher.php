<?php
include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
$searchRequest = trim(strip_tags(stripcslashes(htmlspecialchars($_REQUEST['searchField']))));
if(!empty($searchRequest))
{
    $search_db_request = "SELECT objects_id, objects_title, objects_path FROM objects WHERE objects_title LIKE '%".$searchRequest."%'";
    $req = mysqli_query($dbQuery, $search_db_request);
    while($reqArr = mysqli_fetch_array($req))
    {
        $objectsTitle = $reqArr['objects_title'];
        $objectsPath = $reqArr['objects_path'];
        echo "<li class='boxSizingStyle transitionBox'><a href='".$objectsPath."'>".$objectsTitle."</a></li>";
    }
    mysqli_free_result($req);
}
else{
    echo"<li>Nothing Here</li>";
}
mysqli_close($dbQuery);