<!DOCTYPE html>
<html lang="en">
<head>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Universe - Home</title>
    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/allStyles.css">
<!--    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/index.css">-->
<!--    <link type="text/css" rel="stylesheet" href="/newUniverse/styles/global.css">-->
    <link class="defaultStyle" type="text/css" rel="stylesheet" href="/newUniverse/styles/default.css">
    <link class="chosenStyle" type="text/css" rel="stylesheet" href="">
    <link rel="shortcut icon" href="/newUniverse/favicon.png" type="image/png">
    <style type="text/css">
        .objectsButton
        {
            visibility: hidden;
        }
        html, body
        {
            height: 100%;
        }
        body
        {
            overflow: hidden;
        }
    </style>
</head>
<body>
<div class="i-header boxSizingStyle transitionBox" id="i-header">
    <?php include_once ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/title_ukr.php");?>
</div>
<div class="arrow boxSizingStyle transitionBox" id="leftArrow"> < </div>
<div class="i-cont boxSizingStyle" id="i-cont">
    <div class="i-item boxSizingStyle" id="i-planets">
        <div class="i-item-info boxSizingStyle transitionBox" id="i-planets-info">
            <div class="i-i-info boxSizingStyle transitionBox">
                <div class="i-information bg_color1 transitionBox">
                    A planet is an astronomical object orbiting a star or stellar remnant that
                    <ul>
                        <li>is massive enough to be rounded by its own gravity,</li>
                        <li>is not massive enough to cause thermonuclear fusion, and</li>
                        <li>has cleared its neighbouring region of planetesimals.</li>
                    </ul>
                    The term planet is ancient, with ties to history, astrology, science, mythology, and religion.
                    Several planets in the Solar System can be seen with the naked eye.
                    These were regarded by many early cultures as divine, or as emissaries of deities.
                    As scientific knowledge advanced, human perception of the planets changed, incorporating a number of disparate objects.
                </div>
            </div>
        </div>
        <div class="i-item-items boxSizingStyle transitionBox" id="i-planets-items">
            <div class="i-i-item transitionBox">
                <?php
                include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
                $planets = mysqli_query($dbQuery, "SELECT planets_id, planets_name, planets_radius, planets_mass, planets_image FROM planets_ukr LIMIT 5" );
                while($planetsArr = mysqli_fetch_array($planets))
                {
                    $planetId = $planetsArr['planets_id'];
                    $planetName = $planetsArr['planets_name'];
                    $planetRadius = $planetsArr['planets_radius'];
                    $planetMass = $planetsArr['planets_mass'];
                    $planetImage = $planetsArr['planets_image'];
                    $objectName = $planetName;
                    $tName = 'planets';
                    $oName = 'planets';
                    echo "<a href='/newUniverse/pages/object_ukr.php?objectId=".$planetId."&o=".$oName."&t=".$tName."'>
                                    <div class='items bg_color1 boxSizingStyle transitionBox'>
                                        <img src='".$planetImage."' width='100%' class='itemImage boxSizingStyle transitionBox'>
                                        <div class='itemProperties boxSizingStyle transitionBox'>
                                            <table class=''>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td>".$planetName."</td>
                                                </tr>
                                                <tr>
                                                    <td>Radius:</td>
                                                    <td>".$planetRadius."</td>
                                                </tr>
                                                <tr>
                                                    <td>Mass:</td>
                                                    <td>".$planetMass."</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                  </a>";
                }
                mysqli_free_result($planets);
                mysqli_close($dbQuery);
                ?>
            </div>
        </div>
    </div>
    <div class="i-item" id="i-stars">
        <div class="i-item-info boxSizingStyle transitionBox" id="i-stars-info">
            <div class="i-i-info boxSizingStyle transitionBox">
                <div class="i-information bg_color1 transitionBox">
                    A star is a luminous sphere of plasma held together by its own gravity.
                    The nearest star to Earth is the Sun. Many other stars are visible to the naked eye from Earth
                    during the night, appearing as a multitude of fixed luminous points in the sky due to their immense distance from Earth.
                    <p>Historically, the most prominent stars were grouped into constellations and asterisms, the brightest of which gained proper names.
                        Astronomers have assembled star catalogues that identify the known stars and provide standardized stellar designations.</p>
                    <p>However, most of the stars in the Universe, including all stars outside our galaxy, the Milky Way, are invisible to the naked eye from Earth.
                        Indeed, most are invisible from Earth even through the most powerful telescopes.</p>
                </div>
            </div>
        </div>
        <div class="i-item-items boxSizingStyle transitionBox" id="i-stars-items">
            <div class="i-i-item transitionBox">
                <?php
                include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
                $stars = mysqli_query($dbQuery, "SELECT stars_id, stars_name, stars_radius, stars_mass, stars_image FROM stars_ukr LIMIT 5");
                while($starsArr = mysqli_fetch_array($stars))
                {
                    $starId = $starsArr['stars_id'];
                    $starName = $starsArr['stars_name'];
                    $starRadius = $starsArr['stars_radius'];
                    $starMass = $starsArr['stars_mass'];
                    $starImage = $starsArr['stars_image'];
                    $tName = 'stars';
                    $oName = 'stars';
                    echo "<a href='/newUniverse/pages/object_ukr.php?objectId=".$starId."&o=".$oName."&t=".$tName."'>
                                    <div class='items bg_color1 boxSizingStyle transitionBox'>
                                        <img src='".$starImage."' width='100%' class='itemImage boxSizingStyle transitionBox'>
                                        <div class='itemProperties boxSizingStyle transitionBox'>
                                            <table class=''>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td>".$starName."</td>
                                                </tr>
                                                <tr>
                                                    <td>Radius:</td>
                                                    <td>".$starRadius."</td>
                                                </tr>
                                                <tr>
                                                    <td>Mass:</td>
                                                    <td>".$starMass."</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                  </a>";
                }
                mysqli_free_result($stars);
                mysqli_close($dbQuery);
                ?>
            </div>
        </div>
    </div>
    <div class="i-item" id="i-satellites">
        <div class="i-item-info boxSizingStyle transitionBox" id="i-satellites-info">
            <div class="i-i-info boxSizingStyle transitionBox">
                <div class="i-information bg_color1 transitionBox">
                    A natural satellite or moon is an astronomical object that orbits a planet or minor planet.
                    In the Solar System there are 173 known natural satellites which orbit within 6 planetary satellite systems.
                    <p>Of the inner planets, Mercury and Venus have no natural satellites;
                        Earth has one large natural satellite, known as the Moon; and Mars has two tiny natural satellites, Phobos and Deimos.</p>
                    <p>The giant planets have extensive systems of natural satellites, including half a dozen comparable in size to Earth's Moon:
                        the four Galilean moons, Saturn's Titan, and Neptune's Triton.
                        Saturn has an additional six mid-sized natural satellites massive enough to have achieved hydrostatic equilibrium, and Uranus has five.
                        It has been suggested that some satellites may potentially harbour life.</p>
                </div>
            </div>
        </div>
        <div class="i-item-items boxSizingStyle transitionBox" id="i-satellites-items">
            <div class="i-i-item transitionBox">
                <?php
                include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
                $satellites = mysqli_query($dbQuery, "SELECT satellites_id, satellites_name, satellites_radius, satellites_mass, satellites_image FROM satellites_ukr LIMIT 5");
                while($satellitesArr = mysqli_fetch_array($satellites))
                {
                    $satelliteId = $satellitesArr['satellites_id'];
                    $satelliteName = $satellitesArr['satellites_name'];
                    $satelliteRadius = $satellitesArr['satellites_radius'];
                    $satelliteMass = $satellitesArr['satellites_mass'];
                    $satelliteImage = $satellitesArr['satellites_image'];
                    $tName = 'satellites';
                    $oName = 'satellites';
                    echo "<a href='/newUniverse/pages/object_ukr.php?objectId=".$satelliteId."&o=".$oName."&t=".$tName."'>
                                    <div class='items bg_color1 boxSizingStyle transitionBox'>
                                        <img src='".$satelliteImage."' width='100%' class='itemImage boxSizingStyle transitionBox'>
                                        <div class='itemProperties boxSizingStyle transitionBox'>
                                            <table class=''>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td>".$satelliteName."</td>
                                                </tr>
                                                <tr>
                                                    <td>Radius:</td>
                                                    <td>".$satelliteRadius."</td>
                                                </tr>
                                                <tr>
                                                    <td>Mass:</td>
                                                    <td>".$satelliteMass."</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                  </a>";
                }
                mysqli_free_result($satellites);
                mysqli_close($dbQuery);
                ?>
            </div>
        </div>
    </div>
    <div class="i-item" id="i-galaxies">
        <div class="i-item-info boxSizingStyle transitionBox" id="i-galaxies-info">
            <div class="i-i-info boxSizingStyle transitionBox">
                <div class="i-information bg_color1 transitionBox">
                    A galaxy is a gravitationally bound system of stars, stellar remnants, interstellar gas, dust, and dark matter.
                    Galaxies range in size from dwarfs with just a few billion (10<sup>9</sup>) stars to giants with one hundred trillion (10<sup>14</sup>) stars, each orbiting its galaxy's center of mass.
                    Galaxies are categorized according to their visual morphology as elliptical, spiral and irregular.
                    <p>Many galaxies are thought to have black holes at their active centers.
                        The Milky Way's central black hole, known as Sagittarius A*, has a mass four million times greater than the Sun.</p>
                </div>
            </div>
        </div>
        <div class="i-item-items boxSizingStyle transitionBox" id="i-galaxies-items">
            <div class="i-i-item transitionBox">
                <?php
                include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
                $galaxies = mysqli_query($dbQuery, "SELECT galaxies_id, galaxies_name, galaxies_type, galaxies_distance, galaxies_image FROM galaxies_ukr LIMIT 5");
                while($galaxiesArr = mysqli_fetch_array($galaxies))
                {
                    $galaxyId = $galaxiesArr['galaxies_id'];
                    $galaxyName = $galaxiesArr['galaxies_name'];
                    $galaxyType = $galaxiesArr['galaxies_type'];
                    $galaxyDistance = $galaxiesArr['galaxies_distance'];
                    $galaxyImage = $galaxiesArr['galaxies_image'];
                    $tName = 'galaxies';
                    $oName = 'galaxies';
                    echo "<a href='/newUniverse/pages/object_ukr.php?objectId=".$galaxyId."&o=".$oName."&t=".$tName."'>
                                    <div class='items bg_color1 boxSizingStyle transitionBox'>
                                        <img src='".$galaxyImage."' width='100%' class='itemImage boxSizingStyle transitionBox'>
                                        <div class='itemProperties boxSizingStyle transitionBox'>
                                            <table class=''>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td>".$galaxyName."</td>
                                                </tr>
                                                <tr>
                                                    <td>Type:</td>
                                                    <td>".$galaxyType."</td>
                                                </tr>
                                                <tr>
                                                    <td>Distance:</td>
                                                    <td>".$galaxyDistance."</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                  </a>";
                }
                mysqli_free_result($galaxies);
                mysqli_close($dbQuery);
                ?>
            </div>
        </div>
    </div>
</div>
<div class="arrow boxSizingStyle transitionBox" id="rightArrow"> > </div>
<script src="/newUniverse/scripts/jquery-1.11.3.js"></script>
<script src="/newUniverse/scripts/jquery.cookie.js"></script>
<!--<script src="/newUniverse/scripts/index_js.js"></script>-->
<script src="/newUniverse/scripts/search_ukr.js"></script>
<script src="/newUniverse/scripts/allScripts.js"></script>
</body>
</html>