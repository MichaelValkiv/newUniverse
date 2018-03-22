<!DOCTYPE html>
<html lang="en">
<head>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        <?php
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/protection.php");
        $titlePart = mb_convert_case($c, MB_CASE_UPPER, "UTF-8");
        echo "Всесвіт - ".$titlePart;
        ?>
    </title>
    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/allStyles.css">
<!--    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/information.css">-->
<!--    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/global.css">-->
    <link class="defaultStyle" type="text/css" rel="stylesheet" href="/newUniverse/styles/default.css">
    <link class="chosenStyle" type="text/css" rel="stylesheet" href="">
    <link rel="shortcut icon" href="/newUniverse/favicon.png" type="image/png">
    <style type="text/css">
        .objectsButton
        {
            visibility: visible;
        }
    </style>
</head>
<body>
<div class="iCont transitionBox">
    <div class="i-header transitionBox" id="i-header">
        <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/title_ukr.php");?>
    </div>
    <div class="thisTypeObjects boxSizingStyle">
        <div class="objectForm boxSizingStyle transitionBox">
            <?php
            include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
            include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/protection.php");
            $thisTypeObjRequest = "SELECT information_obj, information_class FROM information_ukr WHERE information_class = '".$c."' AND information_number != 1 ORDER BY information_number ASC";
            echo "<form action='/newUniverse/pages/information_ukr.php?c=".$c."' method='post' id='objForm'>
                      <input type='checkbox' id='allBoxes' name='object' value='' class='iCheckbox'><label for='allBoxes' class='iCheckboxLabel allSelect'><div class='infoObjectTabs infoObjectTabsAll transitionBox'>Все</div></label>";
            $thisTypeObj = mysqli_query($dbQuery, $thisTypeObjRequest);
            while($thisTypeObjArr = mysqli_fetch_array($thisTypeObj))
            {
                $informationObj = $thisTypeObjArr['information_obj'];
                $new = "\"".$informationObj."\"";
                $newObj = str_replace($informationObj, $new, $informationObj);
                $informationClass = $thisTypeObjArr['information_class'];
                $forId = mb_convert_case($informationObj, MB_CASE_LOWER, "UTF-8");
                $forId = str_replace(' ', '', $forId);
                echo "<input type='checkbox' id='".$forId."' name='objects[]' value='".$newObj."' class='inputCheckbox iCheckbox'><label for='".$forId."' class='iCheckboxLabel'><div class='infoObjectTabs transitionBox'>".$informationObj."</div></label>";
            }
            echo "<span class='hideTable'>".$c."</span>";
            mysqli_free_result($thisTypeObj);
            mysqli_close($dbQuery);
            ?>
            </form>
        </div>
        <div class="objectBox boxSizingStyle transitionBox"></div>
    </div>
    <div class="infoContent boxSizingStyle transitionBox">
        <?php
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
        include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/protection.php");
        $infoRequest = "SELECT information_obj, information_info, information_class, information_image, information_caption FROM information_ukr WHERE information_class = '".$c."' ORDER BY information_number ASC";
        $infoObj = mysqli_query($dbQuery, $infoRequest);
        while($infoObjArr = mysqli_fetch_array($infoObj))
        {
            $informationObj = $infoObjArr['information_obj'];
            $informationInfo = $infoObjArr['information_info'];
            $informationClass = $infoObjArr['information_class'];
            $informationImage = $infoObjArr['information_image'];
            $informationCaption = $infoObjArr['information_caption'];
            echo "<div class='infoObjInfo boxSizingStyle'>                      
                                    <div class='infoObjImgLink bg_color1 boxSizingStyle transitionBox'><img class='boxSizingStyle transitionBox' src='".$informationImage."' width='100%'>
                                        <div class='infoSlider boxSizingStyle transitionBox'>
                                            <table>
                                                <tr>
                                                    <td class='titleCell transitionBox' colspan='2'>".$informationObj."</td>
                                                </tr>
                                                <tr>
                                                    <td colspan='2' class='infoCell transitionBox'>".$informationClass."</td>                                                    
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class='infoObjHiddenBox boxSizingStyle'>
                                        <div class='infoObjTitle transitionBox'>".$informationObj."<div class='infoObjClose'>&#215;</div></div>
                                        <div class='hiddenFontSelector boxSizingStyle transitionBox'>
                                            <label for='font1' class='label1'>
                                                <div class='fontSwitcher fs1 boxSizingStyle transitionBox'><div class='f_s f_s1 default_f_s transitionBox'></div></div>
                                            </label>&nbsp;
                                            <label for='font2' class='label2'>
                                                <div class='fontSwitcher fs1 boxSizingStyle transitionBox'><div class='f_s f_s1 f_s24 transitionBox'></div></div>
                                            </label>&nbsp;
                                            <label for='font3' class='label3'>
                                                <div class='fontSwitcher fs1 boxSizingStyle transitionBox'><div class='f_s f_s1 f_s28 transitionBox'></div></div>
                                            </label>&nbsp;
                                            <label for='font4' class='label4'>
                                                <div class='fontSwitcher fs1 boxSizingStyle transitionBox'><div class='f_s f_s1 f_s32 transitionBox'></div></div>
                                            </label>&nbsp;
                                            <label for='font5' class='label5'>
                                                <div class='fontSwitcher fs1 boxSizingStyle transitionBox'><div class='f_s f_s1 f_s36 transitionBox'></div></div>
                                            </label>&nbsp;
                                        </div>
                                        <div class='img_caption'>                                        
                                             <div class='infoObjImg boxSizingStyle transitionBox'><img src='".$informationImage."' width='100%'></div>                                                
                                             <div class='infoObjCaption boxSizingStyle transitionBox'>".$informationCaption."</div>                                          
                                        </div>                                            
                                        <div class='infoObjDesc fontBox transitionBox boxSizingStyle'>".$informationInfo."</div>                                        
                                    </div>     
                          </div>";
        }
        mysqli_free_result($infoObj);
        mysqli_close($dbQuery);
        ?>
    </div>
    <div class="i-footer" id="i-footer">
        <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/footer_ukr.php");?>
    </div>
</div>
<script src="/newUniverse/scripts/jquery-1.11.3.js"></script>
<script>
    $(document).ready(function () {
        $('.iCheckbox').change(function(){
            var arrChecked = $('.inputCheckbox:checkbox:checked').map(function() {return this.value;}).get();
            var c = $('.hideTable').text();
            $.ajax({
                type: "POST",
                url: "/newUniverse/blocks/selector_ukr.php?c="+c,
                data: "selected="+arrChecked,
                success: function (html) {
                    $('.objectBox').html(html);
                }
            });
            return false;
        });
    });
</script>
<script src="/newUniverse/scripts/jquery-1.11.3.js"></script>
<script src="/newUniverse/scripts/jquery.cookie.js"></script>
<!--<script src="/newUniverse/scripts/index_js.js"></script>-->
<script src="/newUniverse/scripts/search_ukr.js"></script>
<script src="/newUniverse/scripts/allScripts.js"></script>
<!--<script src="/newUniverse/scripts/info_js.js"></script>-->
</body>
</html>