<!DOCTYPE html>
<html lang="en">
<head>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Всесвіт - Таблиці</title>
    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/allStyles.css">
<!--    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/tables.css">-->
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
<div class="tCont transitionBox">
    <div class="i-header transitionBox" id="i-header">
        <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/title_ukr.php");?>
    </div>
    <div class="t-cont boxSizingStyle">
        <input type="radio" name="tabs" class="allTabs" id="planetsTab" checked="checked">
        <label for="planetsTab" class="labelsForTabs bg_color1 boxSizingStyle transitionBox" id="planets-t">Планети</label>
        <input type="radio" name="tabs" class="allTabs" id="satellitesTab">
        <label for="satellitesTab" class="labelsForTabs bg_color1 boxSizingStyle transitionBox" id="satellites-t">Супутники</label>
        <input type="radio" name="tabs" class="allTabs" id="starsTab">
        <label for="starsTab" class="labelsForTabs bg_color1 boxSizingStyle transitionBox" id="stars-t">Зорі</label>
        <input type="radio" name="tabs" class="allTabs" id="galaxiesTab">
        <label for="galaxiesTab" class="labelsForTabs bg_color1 boxSizingStyle transitionBox" id="galaxies-t">Галактики</label>
        <input type="radio" name="tabs" class="allTabs" id="constellationsTab">
        <label for="constellationsTab" class="labelsForTabs bg_color1 boxSizingStyle transitionBox" id="constellations-t">Сузір'я</label>
        <div class="tablesTab boxSizingStyle" id="planetsTable">
            <div class="sortOptions bg_color1 boxSizingStyle transitionBox">
                <input type="radio" name="sOptions_planets" value="planets_name ASC" id="a-z_planets" checked="checked">
                <label for="a-z_planets">А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_planets" value="planets_name DESC" class="planetsName" id="z-a_planets">
                <label for="z-a_planets">Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_planets" value="planets_sort_radius ASC" id="asc_p_radius">
                <label for="asc_p_radius">Радіус&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_planets" value="planets_sort_radius DESC" id="desc_p_radius">
                <label for="desc_p_radius">Радіус&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_planets" value="planets_sort_mass ASC" id="asc_p_mass">
                <label for="asc_p_mass">Маса&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_planets" value="planets_sort_mass DESC" id="desc_p_mass">
                <label for="desc_p_mass">Маса&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_planets" value="planets_sort_volume ASC" id="asc_p_volume">
                <label for="asc_p_volume">Об'єм&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_planets" value="planets_sort_volume DESC" id="desc_p_volume">
                <label for="desc_p_volume">Об'єм&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_planets" value="planets_sort_area ASC" id="asc_p_area">
                <label for="asc_p_area">Площа&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_planets" value="planets_sort_area DESC" id="desc_p_area">
                <label for="desc_p_area">Площа&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_planets" value="planets_sort_temperature ASC" id="asc_p_temp">
                <label for="asc_p_temp">Температура&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_planets" value="planets_sort_temperature DESC" id="desc_p_temp">
                <label for="desc_p_temp">Температура&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <div class="sortBtn transitionBox" id="planetsBtn">Таблиця</div>
                <div class="grayBox">Планети</div>
            </div>
            <div class="sortResult boxSizingStyle" id="sortResult_planets"></div>
        </div>
        <div class="tablesTab boxSizingStyle" id="satellitesTable">
            <div class="sortOptions bg_color1 boxSizingStyle transitionBox">
                <input type="radio" name="sOptions_satellites" value="satellites_name ASC" id="a-z_satellites" checked="checked">
                <label for="a-z_satellites">А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_satellites" value="satellites_name DESC" id="z-a_satellites">
                <label for="z-a_satellites">Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_satellites" value="satellites_planet ASC" id="a-z_s_planet" checked="checked">
                <label for="a-z_s_planet">Планета А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_satellites" value="satellites_planet DESC" id="z-a_s_planet">
                <label for="z-a_s_planet">Планета Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_satellites" value="satellites_radius ASC" id="asc_s_radius">
                <label for="asc_s_radius">Радіус&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_satellites" value="satellites_radius DESC" id="desc_s_radius">
                <label for="desc_s_radius">Радіус&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_satellites" value="satellites_sort_mass ASC" id="asc_s_mass">
                <label for="asc_s_mass">Маса&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_satellites" value="satellites_sort_mass DESC" id="desc_s_mass">
                <label for="desc_s_mass">Маса&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_satellites" value="satellites_sort_volume ASC" id="asc_s_volume">
                <label for="asc_s_volume">Об'єм&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_satellites" value="satellites_sort_volume DESC" id="desc_s_volume">
                <label for="desc_s_volume">Об'єм&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_satellites" value="satellites_sort_area ASC" id="asc_s_area">
                <label for="asc_s_area">Площа&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_satellites" value="satellites_sort_area DESC" id="desc_s_area">
                <label for="desc_s_area">Площа&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <div class="sortBtn transitionBox" id="satellitesBtn">Таблиця</div>
                <div class="grayBox">Супутники</div>
            </div>
            <div class="sortResult boxSizingStyle" id="sortResult_satellites"></div>
        </div>
        <div class="tablesTab boxSizingStyle" id="starsTable">
            <div class="sortOptions bg_color1 boxSizingStyle transitionBox">
                <input type="radio" name="sOptions_stars" value="stars_name ASC" id="a-z_stars" checked="checked">
                <label for="a-z_stars">А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_stars" value="stars_name DESC" id="z-a_stars">
                <label for="z-a_stars">Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_stars" value="stars_class ASC" id="a-z_s_class" checked="checked">
                <label for="a-z_s_class">Тип А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_stars" value="stars_class DESC" id="z-a_s_class">
                <label for="z-a_s_class">Тип Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_stars" value="stars_sort_radius ASC" id="asc_stars_radius">
                <label for="asc_stars_radius">Радіус&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_stars" value="stars_sort_radius DESC" id="desc_stars_radius">
                <label for="desc_stars_radius">Радіус&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_stars" value="stars_sort_mass ASC" id="asc_stars_mass">
                <label for="asc_stars_mass">Маса&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_stars" value="stars_sort_mass DESC" id="desc_stars_mass">
                <label for="desc_stars_mass">Маса&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_stars" value="stars_sort_luminosity ASC" id="asc_stars_l">
                <label for="asc_stars_l">Яскравість&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_stars" value="stars_sort_luminosity DESC" id="desc_stars_l">
                <label for="desc_stars_l">Яскравість&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_stars" value="stars_sort_distance ASC" id="asc_stars_d">
                <label for="asc_stars_d">Відстань&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_stars" value="stars_sort_distance DESC" id="desc_stars_d">
                <label for="desc_stars_d">Відстань&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_stars" value="stars_sort_temp ASC" id="asc_stars_temp">
                <label for="asc_stars_temp">Температура&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_stars" value="stars_sort_temp DESC" id="desc_stars_temp">
                <label for="desc_stars_temp">Температура&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <div class="sortBtn transitionBox" id="starsBtn">Таблиця</div>
                <div class="grayBox">Зорі</div>
            </div>
            <div class="sortResult boxSizingStyle" id="sortResult_stars"></div>
        </div>
        <div class="tablesTab boxSizingStyle" id="galaxiesTable">
            <div class="sortOptions bg_color1 boxSizingStyle transitionBox">
                <input type="radio" name="sOptions_galaxies" value="galaxies_name ASC" id="a-z_galaxies" checked="checked">
                <label for="a-z_galaxies">А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_galaxies" value="galaxies_name DESC" id="z-a_galaxies">
                <label for="z-a_galaxies">Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_galaxies" value="galaxies_type ASC" id="a-z_g_type" checked="checked">
                <label for="a-z_g_type">Тип А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_galaxies" value="galaxies_type DESC" id="z-a_g_type">
                <label for="z-a_g_type">Тип Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_galaxies" value="galaxies_distance ASC" id="asc_galaxies_d" checked="checked">
                <label for="asc_galaxies_d">Відстань&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_galaxies" value="galaxies_distance DESC" id="desc_galaxies_d">
                <label for="desc_galaxies_d">Відстань&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_galaxies" value="galaxies_sort_am ASC" id="asc_galaxies_am" checked="checked">
                <label for="asc_galaxies_am">Видима Зоряна Величина&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_galaxies" value="galaxies_sort_am DESC" id="desc_galaxies_am">
                <label for="desc_galaxies_am">Видима Зоряна Величина&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_galaxies" value="galaxies_sort_size ASC" id="asc_galaxies_size" checked="checked">
                <label for="asc_galaxies_size">Розмір&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_galaxies" value="galaxies_sort_size DESC" id="desc_galaxies_size">
                <label for="desc_galaxies_size">Розмір&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <div class="sortBtn transitionBox" id="galaxiesBtn">Таблиця</div>
                <div class="grayBox">Галактики</div>
            </div>
            <div class="sortResult boxSizingStyle" id="sortResult_galaxies"></div>
        </div>
        <div class="tablesTab boxSizingStyle" id="constellationsTable">
            <div class="sortOptions bg_color1 boxSizingStyle transitionBox">
                <input type="radio" name="sOptions_constellations" value="constellations_name ASC" id="a-z_constellations" checked="checked">
                <label for="a-z_constellations">А&#8594;Я<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_constellations" value="constellations_name DESC" id="z-a_constellations">
                <label for="z-a_constellations">Я&#8594;А<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_constellations" value="constellations_area ASC" id="asc_constellations_area" checked="checked">
                <label for="asc_constellations_area">Площа&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_constellations" value="constellations_area DESC" id="desc_constellations_area">
                <label for="desc_constellations_area">Площа&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_constellations" value="constellations_sort_solid_angle ASC" id="asc_constellations_sa" checked="checked">
                <label for="asc_constellations_sa">Просторовий Кут&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_constellations" value="constellations_sort_solid_angle DESC" id="desc_constellations_sa">
                <label for="desc_constellations_sa">Просторовий Кут&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_constellations" value="constellations_sort_percentage ASC" id="asc_constellations_p" checked="checked">
                <label for="asc_constellations_p">Відсоток Від Загальної Площі&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_constellations" value="constellations_sort_percentage DESC" id="desc_constellations_p">
                <label for="desc_constellations_p">Відсоток Від Загальної Площі&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_constellations" value="constellations_sort_ra ASC" id="asc_constellations_ra" checked="checked">
                <label for="asc_constellations_ra">Пряме Піднесення&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_constellations" value="constellations_sort_ra DESC" id="desc_constellations_ra">
                <label for="desc_constellations_ra">Пряме Піднесення&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_constellations" value="constellations_sort_declination ASC" id="asc_constellations_de" checked="checked">
                <label for="asc_constellations_de">Схилення&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_constellations" value="constellations_sort_declination DESC" id="desc_constellations_de">
                <label for="desc_constellations_de">Схилення&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>

                <input type="radio" name="sOptions_constellations" value="constellations_sort_quadrant ASC" id="asc_constellations_quad" checked="checked">
                <label for="asc_constellations_quad">Квадрант&#9650;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <input type="radio" name="sOptions_constellations" value="constellations_sort_quadrant DESC" id="desc_constellations_quad">
                <label for="desc_constellations_quad">Квадрант&#9660;<div class="boxSizingStyle transitionBox"><div class="boxSizingStyle transitionBox"></div></div></label>
                <div class="sortBtn transitionBox" id="constellationsBtn">Таблиця</div>
                <div class="grayBox">Сузір'я</div>
            </div>
            <div class="sortResult boxSizingStyle" id="sortResult_constellations"></div>
        </div>

    </div>

    <div class="i-footer" id="i-footer">
        <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/footer_ukr.php");?>
    </div>
</div>
<script src="/newUniverse/scripts/jquery-1.11.3.js"></script>
<script>

    $('#planetsBtn').click(function () {
        var sortType = $('input[name=sOptions_planets]:checked').val();
        var tableName = 'planets';
        var sortOptions = $(this).parent('.sortOptions');
        var planets = $('#sortResult_planets');
        sortOptions.fadeOut(500);
        $.ajax({
            type: "POST",
            url: "/newUniverse/blocks/sort_ukr.php",
            data:
                {
                    sortType: sortType,
                    tableName: tableName
                },
            success: function (html) {
                $('#sortResult_planets').html(html);
                planets.addClass('withData').delay(500).queue(function () {
                    $(this).addClass('showData').dequeue();
                });
            }
        });
        return false;
    });

    $('#satellitesBtn').click(function () {
        var sortType = $('input[name=sOptions_satellites]:checked').val();
        var tableName = 'satellites';
        var sortOptions = $(this).parent('.sortOptions');
        var satellites = $('#sortResult_satellites');
        sortOptions.fadeOut(500);
        $.ajax({
            type: "POST",
            url: "/newUniverse/blocks/sort_ukr.php",
            data:
                {
                    sortType: sortType,
                    tableName: tableName
                },
            success: function (html) {
                $('#sortResult_satellites').html(html);
                satellites.addClass('withData').delay(500).queue(function () {
                    $(this).addClass('showData').dequeue();
                });
            }
        });
        return false;
    });

    $('#starsBtn').click(function () {
        var sortType = $('input[name=sOptions_stars]:checked').val();
        var tableName = 'stars';
        var sortOptions = $(this).parent('.sortOptions');
        var stars = $('#sortResult_stars');
        sortOptions.fadeOut(500);
        $.ajax({
            type: "POST",
            url: "/newUniverse/blocks/sort_ukr.php",
            data:
                {
                    sortType: sortType,
                    tableName: tableName
                },
            success: function (html) {
                $('#sortResult_stars').html(html);
                stars.addClass('withData').delay(500).queue(function () {
                    $(this).addClass('showData').dequeue();
                });
            }
        });
        return false;
    });

    $('#galaxiesBtn').click(function () {
        var sortType = $('input[name=sOptions_galaxies]:checked').val();
        var tableName = 'galaxies';
        var sortOptions = $(this).parent('.sortOptions');
        var galaxies = $('#sortResult_galaxies');
        sortOptions.fadeOut(500);
        $.ajax({
            type: "POST",
            url: "/newUniverse/blocks/sort_ukr.php",
            data:
                {
                    sortType: sortType,
                    tableName: tableName
                },
            success: function (html) {
                $('#sortResult_galaxies').html(html);
                galaxies.addClass('withData').delay(500).queue(function () {
                    $(this).addClass('showData').dequeue();
                });
            }
        });
        return false;
    });

    $('#constellationsBtn').click(function () {
        var sortType = $('input[name=sOptions_constellations]:checked').val();
        var tableName = 'constellations';
        var sortOptions = $(this).parent('.sortOptions');
        var constellations = $('#sortResult_constellations');
        sortOptions.fadeOut(500);
        $.ajax({
            type: "POST",
            url: "/newUniverse/blocks/sort_ukr.php",
            data:
                {
                    sortType: sortType,
                    tableName: tableName
                },
            success: function (html) {
                $('#sortResult_constellations').html(html);
                constellations.addClass('withData').delay(500).queue(function () {
                    $(this).addClass('showData').dequeue();
                });
            }
        });
        return false;
    });
</script>

<script src="/newUniverse/scripts/jquery.cookie.js"></script>
<!--<script src="/newUniverse/scripts/index_js.js"></script>-->
<script src="/newUniverse/scripts/search_ukr.js"></script>
<script src="/newUniverse/scripts/allScripts.js"></script>
<!--<script src="/newUniverse/scripts/tables.js"></script>-->
</body>
</html>