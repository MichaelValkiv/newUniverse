<!DOCTYPE html>
<html lang="en">
<head>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        <?php
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/protector.php");
        $titleRequest = "SELECT ".$o."_name FROM ".$t." WHERE ".$o."_id = ".$oId;
        $title = mysqli_query($dbQuery, $titleRequest);
        while($titleArr = mysqli_fetch_array($title))
        {
            $pageTitle = $titleArr[$o.'_name'];
            echo "Universe - ".$pageTitle;
        }
        ?>
    </title>
    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/allStyles.css">
<!--    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/object.css">-->
<!--    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/global.css">-->
    <link class="defaultStyle" type="text/css" rel="stylesheet" href="/newUniverse/styles/default.css">
    <link class="chosenStyle" type="text/css" rel="stylesheet" href="">
    <link rel="shortcut icon" href="/newUniverse/favicon.png" type="image/png">
    <style type="text/css">
        .objectsButton
        {
            visibility: hidden;
        }
    </style>
</head>
<body>
<div class="o-cont transitionBox">
    <div class="i-header transitionBox" id="i-header">
        <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/title.php");?>
    </div>
    <div class="sameTypeObjects bg_color1 boxSizingStyle transitionBox">
        <div class="sTO_left transitionBox"> < </div>
        <div class="sTO_right transitionBox"> > </div>
        <div class="sTO boxSizingStyle">
            <?php
            include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
            include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/protector.php");
            $otherObjectsRequest = "SELECT ".$o."_id, ".$o."_name, ".$o."_image FROM ".$t." WHERE ".$o."_id != ".$oId." LIMIT 15";
            $otherObjects = mysqli_query($dbQuery, $otherObjectsRequest);
            while($otherObjectsArr = mysqli_fetch_array($otherObjects))
            {
                $otherObjectsId = $otherObjectsArr[$o.'_id'];
                $otherObjectsName = $otherObjectsArr[$o.'_name'];
                $otherObjectsImg = $otherObjectsArr[$o.'_image'];
                echo "<a href='/newUniverse/pages/object.php?objectId=".$otherObjectsId."&o=".$o."&t=".$t."'>  
                         <div class='otherObjImage boxSizingStyle transitionBox'><img src='".$otherObjectsImg."' width='100%' class='otherObjImg boxSizingStyle transitionBox'></div>                                    
                      </a>";
            }
            mysqli_free_result($otherObjects);
            mysqli_close($dbQuery);
            ?>
        </div>
        <div class="sTO_radio">
                <div class="sTO_fake_radio fRadio1 boxSizingStyle transitionBox">
                    <div class="fr fr1 boxSizingStyle transitionBox">
                    </div>
                </div>
                <div class="sTO_fake_radio fRadio2 boxSizingStyle transitionBox">
                    <div class="fr fr2 boxSizingStyle transitionBox">
                    </div>
                </div>
                <div class="sTO_fake_radio fRadio3 boxSizingStyle transitionBox">
                    <div class="fr fr3 boxSizingStyle transitionBox">
                    </div>
                </div>
        </div>
    </div>
    <div class="objInfo transitionBox boxSizingStyle">
        <?php
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/protector.php");
        $objectRequest = "SELECT ".$o."_name, ".$o."_description, ".$o."_image, ".$o."_caption, ".$o."_properties, ".$o."_objects FROM ".$t." WHERE ".$o."_id = ".$oId;
        $objects = mysqli_query($dbQuery, $objectRequest);
        while($objectsArr = mysqli_fetch_array($objects))
        {
            $objectName = $objectsArr[$o.'_name'];
            $objectDescription = $objectsArr[$o.'_description'];
            $objectImage = $objectsArr[$o.'_image'];
            $objectCaption = $objectsArr[$o.'_caption'];
            $objectProperties = $objectsArr[$o.'_properties'];
            $objectObjects = $objectsArr[$o.'_objects'];
            echo "<div class='thisObjectTitle bg_color1 boxSizingStyle transitionBox'>".$objectName."</div>
                  <div class='object_i_p'>
                      <div class='objectImage boxSizingStyle'>
                          <div class='o_picture bg_color1 boxSizingStyle transitionBox'><img class='o_img boxSizingStyle' src='".$objectImage."' width='100%'></div>
                          <div class='o_caption bg_color1 boxSizingStyle transitionBox'>".$objectCaption."</div>
                      </div>
                      <div class='objectProp bg_color1 boxSizingStyle transitionBox'><table class='allProp'>".$objectProperties."</table></div>
                  </div>
                  <div class='objectObjects bg_color1 boxSizingStyle transitionBox'>".$objectObjects."</div>
                  <div class='objectDesc bg_color1 fontBox boxSizingStyle transitionBox'><div class='tBox'>Object Description</div>".$objectDescription."</div>";
        }
        mysqli_free_result($objects);
        mysqli_close($dbQuery);
        ?>
    </div>
    <div class="ch_ab">
        <div class="characteristicsBox bg_color1 boxSizingStyle transitionBox">
            <div class="tBox">Characteristics<div class="bodyStyleButton boxSizingStyle transitionBox targetBox" href=".targetBox">Comfortable Reading Mode</div></div>
            <div class="characteristics">
                <?php
                include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
                $chRequest = "SELECT characteristics_title, characteristics_short_desc FROM characteristics";
                $characteristics = mysqli_query($dbQuery, $chRequest);
                while($characteristicsArr = mysqli_fetch_array($characteristics))
                {
                    $characteristicsName = $characteristicsArr['characteristics_title'];
                    $characteristicsSD = $characteristicsArr['characteristics_short_desc'];
                    echo "<div class='ch_title boxSizingStyle transitionBox'>".$characteristicsName."</div>
                          <div class='ch_s_d'>".$characteristicsSD."</div>";
                }
                mysqli_free_result($characteristics);
                mysqli_close($dbQuery);
                ?>

            </div>
        </div>
        <div class="abbreviationBox bg_color1 boxSizingStyle transitionBox">
            <div class="tBox">Abbreviation<div class="bodyStyleButton boxSizingStyle transitionBox targetBox" href=".targetBox">Comfortable Reading Mode</div></div>
            <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/abbreviation.php");?>
        </div>
    </div>
    <div class="i-footer" id="i-footer">
        <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/footer.php");?>
    </div>
</div>

    <script src="/newUniverse/scripts/jquery-1.11.3.js"></script>
    <script src="/newUniverse/scripts/jquery.cookie.js"></script>
<!--    <script src="/newUniverse/scripts/index_js.js"></script>-->
    <script src="/newUniverse/scripts/search_eng.js"></script>
    <script src="/newUniverse/scripts/allScripts.js"></script>
<!--    <script src="/newUniverse/scripts/object_js.js"></script>-->
</body>
</html>