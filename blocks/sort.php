<?php
include ($_SERVER["DOCUMENT_ROOT"]."/newUniverse/blocks/connection.php");
$sortType = $_REQUEST['sortType'];
$tableName = $_REQUEST['tableName'];
if($tableName == 'planets')
{
    echo "<table class='sortTable sortPlanets'>";
    echo "<tr class='bg_color1 transitionBox'>
            <th>Name</th>
            <th>Image</th>
            <th>Radius (km)</th>
            <th>Mass (Et)<br>[Exatonne - 10<sup>18</sup> tonne]</th>
            <th>Volume (km<sup>3</sup>)</th>
            <th>Area (km<sup>2</sup>)</th>
            <th>Temperature (K)</th>
          </tr>";
    $sortRequest = "SELECT ".$tableName."_name, ".$tableName."_sort_radius, ".$tableName."_sort_mass, ".$tableName."_sort_volume, ".$tableName."_sort_area, ".$tableName."_sort_temperature, ".$tableName."_image, ".$tableName."_id FROM ".$tableName." ORDER BY ".$sortType;
    $sortObj = mysqli_query($dbQuery, $sortRequest);
    while($sortArr = mysqli_fetch_array($sortObj))
    {
        $sortObjName = $sortArr[$tableName.'_name'];
        $sortObjRadius = $sortArr[$tableName.'_sort_radius'];
        $sortObjMass = $sortArr[$tableName.'_sort_mass'];
        $sortObjVolume = $sortArr[$tableName.'_sort_volume'];
        $sortObjArea = $sortArr[$tableName.'_sort_area'];
        $sortObjTemperature = $sortArr[$tableName.'_sort_temperature'];
        $sortObjImg = $sortArr[$tableName.'_image'];
        $sortId = $sortArr[$tableName.'_id'];
        echo "<tr class='bg_color1 transitionBox'>
            <td class='planets-name'><a href='/newUniverse/pages/object.php?objectId=".$sortId."&o=planets&t=planets'>".$sortObjName."</a></td>
            <td><img class='boxSizingStyle transitionBox' src='".$sortObjImg."' width='200'></td>
            <td>".$sortObjRadius."</td>
            <td>".$sortObjMass."</td>
            <td>".$sortObjVolume."</td>
            <td>".$sortObjArea."</td>
            <td>".$sortObjTemperature."</td>
          </tr>";
    }
    mysqli_free_result($sortObj);
}
elseif($tableName == 'satellites')
{
    echo "<table class='sortTable sortSatellites'>";
    echo "<tr class='bg_color1 transitionBox'>
            <th>Name</th>
            <th>Image</th>
            <th>Planet</th>
            <th>Radius (km)</th>
            <th>Mass (Pt)<br>[Petatonne - 10<sup>15</sup> tonne]</th>
            <th>Volume (km<sup>3</sup>)</th>
            <th>Area (km<sup>2</sup>)</th>
          </tr>";
    $sortRequest = "SELECT ".$tableName."_name, ".$tableName."_planet, ".$tableName."_image, ".$tableName."_radius, ".$tableName."_sort_mass, ".$tableName."_sort_volume, ".$tableName."_sort_area, ".$tableName."_id FROM ".$tableName." ORDER BY ".$sortType;
    $sortObj = mysqli_query($dbQuery, $sortRequest);
    while($sortArr = mysqli_fetch_array($sortObj))
    {
        $sortObjName = $sortArr[$tableName.'_name'];
        $sortObjPlanet = $sortArr[$tableName.'_planet'];
        $sortObjImg = $sortArr[$tableName.'_image'];
        $sortObjRadius = $sortArr[$tableName.'_radius'];
        $sortObjMass = $sortArr[$tableName.'_sort_mass'];
        $sortObjVolume = $sortArr[$tableName.'_sort_volume'];
        $sortObjArea = $sortArr[$tableName.'_sort_area'];
        $sortId = $sortArr[$tableName.'_id'];
        echo "<tr class='bg_color1 transitionBox'>
            <td><a href='/newUniverse/pages/object.php?objectId=".$sortId."&o=satellites&t=satellites'>".$sortObjName."</a></td>
            <td><img class='boxSizingStyle transitionBox' src='".$sortObjImg."' width='200'></td>
            <td>".$sortObjPlanet."</td>
            <td>".$sortObjRadius."</td>
            <td>".$sortObjMass."</td>
            <td>".$sortObjVolume."</td>
            <td>".$sortObjArea."</td>
          </tr>";
    }
    mysqli_free_result($sortObj);
}
elseif ($tableName == 'stars')
{
    echo "<table class='sortTable sortStars'>";
    echo "<tr class='bg_color1 transitionBox'>
            <th>Name</th>   
            <th>Image</th>
            <th>Spectral Type</th>
            <th>Radius (km)</th>
            <th>Mass (Et)<br>[Exatonne - 10<sup>18</sup> tonne]</th>
            <th>Luminosity (x Sun)<br>[3.828 x 10<sup>26</sup> W]<br>[3.75 x 10<sup>28</sup> lm]</th>
            <th>Distance (pc)</th>
            <th>Temperature (K)</th>
          </tr>";
    $sortRequest = "SELECT ".$tableName."_name, ".$tableName."_image, ".$tableName."_class, ".$tableName."_sort_radius, ".$tableName."_sort_mass, ".$tableName."_sort_luminosity, ".$tableName."_sort_distance, ".$tableName."_sort_temp, ".$tableName."_id FROM ".$tableName." ORDER BY ".$sortType;
    $sortObj = mysqli_query($dbQuery, $sortRequest);
    while($sortArr = mysqli_fetch_array($sortObj))
    {
        $sortObjName = $sortArr[$tableName.'_name'];
        $sortObjImg = $sortArr[$tableName.'_image'];
        $sortObjClass = $sortArr[$tableName.'_class'];
        $sortObjRadius = $sortArr[$tableName.'_sort_radius'];
        $sortObjMass = $sortArr[$tableName.'_sort_mass'];
        $sortObjLuminosity = $sortArr[$tableName.'_sort_luminosity'];
        $sortObjDistance = $sortArr[$tableName.'_sort_distance'];
        $sortObjTemperature = $sortArr[$tableName.'_sort_temp'];
        $sortId = $sortArr[$tableName.'_id'];
        echo "<tr class='bg_color1 transitionBox'>
            <td><a href='/newUniverse/pages/object.php?objectId=".$sortId."&o=stars&t=stars'>".$sortObjName."</a></td>
            <td><img class='boxSizingStyle transitionBox' src='".$sortObjImg."' width='200'></td>
            <td>".$sortObjClass."</td>
            <td>".$sortObjRadius."</td>
            <td>".$sortObjMass."</td>
            <td>".$sortObjLuminosity."</td>
            <td>".$sortObjDistance."</td>
            <td>".$sortObjTemperature."</td>
          </tr>";
    }
    mysqli_free_result($sortObj);
}
elseif($tableName == 'galaxies')
{
    echo "<table class='sortTable sortGalaxies'>";
    echo "<tr class='bg_color1 transitionBox'>
            <th>Name</th>
            <th>Image</th>
            <th>Type</th>
            <th>Distance (Mly)</th>
            <th>Apparent magnitude (V)<br>[in visual light]</th>
            <th>Size (Mly)<br>[in diameter]</th>
          </tr>";
    $sortRequest = "SELECT ".$tableName."_name, ".$tableName."_image, ".$tableName."_type, ".$tableName."_distance, ".$tableName."_sort_am, ".$tableName."_sort_size, ".$tableName."_id FROM ".$tableName." ORDER BY ".$sortType;
    $sortObj = mysqli_query($dbQuery, $sortRequest);
    while($sortArr = mysqli_fetch_array($sortObj))
    {
        $sortObjName = $sortArr[$tableName.'_name'];
        $sortObjImg = $sortArr[$tableName.'_image'];
        $sortObjType = $sortArr[$tableName.'_type'];
        $sortObjDistance = $sortArr[$tableName.'_distance'];
        $sortObjAM = $sortArr[$tableName.'_sort_am'];
        $sortObjSize = $sortArr[$tableName.'_sort_size'];
        $sortId = $sortArr[$tableName.'_id'];
        echo "<tr class='bg_color1 transitionBox'>
            <td><a href='/newUniverse/pages/object.php?objectId=".$sortId."&o=galaxies&t=galaxies'>".$sortObjName."</a></td>
            <td><img class='boxSizingStyle transitionBox' src='".$sortObjImg."' width='200'></td>
            <td>".$sortObjType."</td>
            <td>".$sortObjDistance."</td>
            <td>".$sortObjAM."</td>
            <td>".$sortObjSize."</td>
          </tr>";
    }
    mysqli_free_result($sortObj);
}
elseif($tableName == 'constellations')
{
    echo "<table class='sortTable sortConstellations'>";
    echo "<tr class='bg_color1 transitionBox'>
            <th>Name</th>
            <th>Image</th>
            <th>Area (sq. deg.)</th>
            <th>Solid Angle<br>(millisteradians)</th>
            <th>Percentage (%)</th>
            <th>Right Ascension<br>(hours & mins)</th>
            <th>Declination<br>(degs & mins)</th>
            <th>Quadrant</th>
          </tr>";
    $sortRequest = "SELECT ".$tableName."_name, ".$tableName."_image, ".$tableName."_area, ".$tableName."_sort_solid_angle, ".$tableName."_sort_percentage, ".$tableName."_sort_ra, ".$tableName."_sort_declination, ".$tableName."_sort_quadrant, ".$tableName."_id FROM ".$tableName." ORDER BY ".$sortType;
    $sortObj = mysqli_query($dbQuery, $sortRequest);
    while($sortArr = mysqli_fetch_array($sortObj))
    {
        $sortObjName = $sortArr[$tableName.'_name'];
        $sortObjImg = $sortArr[$tableName.'_image'];
        $sortObjArea = $sortArr[$tableName.'_area'];
        $sortObjSolidAngle = $sortArr[$tableName.'_sort_solid_angle'];
        $sortObjPercentage = $sortArr[$tableName.'_sort_percentage'];
        $sortObjRA = $sortArr[$tableName.'_sort_ra'];
        $sortObjDeclination = $sortArr[$tableName.'_sort_declination'];
        $sortObjQuadrant = $sortArr[$tableName.'_sort_quadrant'];
        $sortId = $sortArr[$tableName.'_id'];
        echo "<tr class='bg_color1 transitionBox'>
            <td><a href='/newUniverse/pages/object.php?objectId=".$sortId."&o=constellations&t=constellations'>".$sortObjName."</a></td>
            <td><img class='boxSizingStyle transitionBox' src='".$sortObjImg."' width='200'></td>
            <td>".$sortObjArea."</td>
            <td>".$sortObjSolidAngle."</td>
            <td>".$sortObjPercentage."</td>
            <td>".$sortObjRA."</td>
            <td>".$sortObjDeclination."</td>
            <td>".$sortObjQuadrant."</td>
          </tr>";
    }
    mysqli_free_result($sortObj);
}
echo "</table>";
mysqli_close($dbQuery);